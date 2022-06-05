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
}
