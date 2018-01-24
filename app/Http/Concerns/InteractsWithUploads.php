<?php 
namespace App\Http\Concerns;

trait InteractsWithUploads
{
	/**
     * Get the validation rules that apply to the request.
     * @param string $file
     * @param string $subfolder 
     * @return string (the hash filename the file was saved with)
     */
    public function storeFileAndReturnName(string $file, string $subfolder = null) 
    {
        return $this->file($file)->store($subfolder);
    }
}