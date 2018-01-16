<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application Campanha add form.
     *
     * @return \Illuminate\Http\Response
     */
    public function campanha()
    {
        $scripts = array('js/campaign-importform.js');
        return view('/campaign/campaign', compact('scripts'));
    }

}
