<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    public function index(){
        return view('user.front');
    }

    public function publication(){
        return view('user.publication');
    }

    public function services(){
        return view('user.services');
    }

    public function currentproject(){
        return view('user.currentproject');
    }

    public function projectarchives(){
        return view('user.project-archives');
    }

    public function aboutus(){
        return view('user.about-arannayk');
    }
}
