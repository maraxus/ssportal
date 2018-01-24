<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\TemplateRequest;

class Template extends Model
{
    /**
     * Store a newly created Template in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return boolean
     */
    public static function saveTemplate(TemplateRequest $request)
    {
    	$template = new Template();
    	$template->message =  $request->message;
    	return $template->save();
    }
}
