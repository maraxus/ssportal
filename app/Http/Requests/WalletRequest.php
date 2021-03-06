<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use FileUpload\FileNameGenerator\FileNameGenerator;
use App\Http\Concerns\InteractsWithUploads;

class WalletRequest extends FormRequest
{
    use InteractsWithUploads;
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
            'file' => 'required|mimetypes:text/plain,text/csv|mimes:txt,csv|max:5000',
        ];
    }

}
