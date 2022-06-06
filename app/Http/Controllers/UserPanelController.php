<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Service;
use App\Project;
use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    public function index(){
        $services = Service::skip(0)->take(2)->get();
        $projects=Project::skip(0)->take(4)->get();
        return view('user.front',compact('services','projects'));
    }

    public function publication(){
        return view('user.publication');
    }

    public function services(){
        $services = Service::all();
        return view('user.services',compact('services'));
    }

    public function currentproject(){
        $projects = Project::all();
        return view('user.currentproject',compact('projects'));
    }

    public function projectarchives(){
        return view('user.project-archives');
    }

    public function aboutus(){
        return view('user.about-arannayk');
    }
}
