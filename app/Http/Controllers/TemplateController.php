<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TemplateRequest;
use App\Template;

class TemplateController extends Controller
{

    /**
     * Store a newly created Template in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TemplateRequest $request)
    {
    	if($request->validate(['message' => 'required|max:255'])){
	    	return Template::saveTemplate($request) ? 'saved!' : '????';
    	}else{
    		return back()->withInput();
    	}
    }
}
