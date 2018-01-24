<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CampaignRequest;
use App\Campaign;

class CampaignController extends Controller
{
    /**
     * Show the application Campanha add form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $scripts = array('js/campaign-importform.js');
        return view('/campaign/campaign', compact('scripts'));
    }

    /**
     * Store a newly created Campaign in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CampaignRequest $request)
    {
		return "{ 'saved!' }";
    }
}
