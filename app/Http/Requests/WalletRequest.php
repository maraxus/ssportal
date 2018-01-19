<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use FileUpload\FileNameGenerator\FileNameGenerator;
use FileUpload\FileUpload;

class WalletRequest extends FormRequest
{

    protected $uploader;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    /**
     * Save the files to the disk with Fileuploader.
     *
     * @return array
     */
    public function storeFile($file)
    {
        if ($this->has($file)) {
            $fileUpload = $this->getUploader($file);
            return $fileUpload->processAll();
        }

    }

    /**
     * Prepare and return a uploader instance.
     *
     * @return FileUploader\FileUploader
     */
    public function getUploader(string $file)
    {
        if($this->uploader) {
            return $this->uploader;
        }
        $generator = app()->make('FileUpload\FileNameGenerator\Simple');
        $pathResolver = app()->makeWith('\FileUpload\PathResolver\Simple',['main_path' => storage_path() ."/uploads"]);
        $fileSystem = app()->make('\FileUpload\FileSystem\Simple');
        $this->uploader = app()->makeWith( 'FileUpload\FileUpload',
            ['upload' => $_FILES[$file],
             'server' => $_SERVER,
             'generator' => $generator
         ]);
        $this->uploader->setFileSystem($fileSystem);
        $this->uploader->setPathResolver($pathResolver);
        return $this->uploader;
    }    
}
