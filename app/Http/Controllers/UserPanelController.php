<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Service;
use App\Project;
use App\Publication;
use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    public function index(){
        $services = Service::skip(0)->take(2)->get();
        $projects=Project::skip(0)->take(4)->get();
        $publications=Publication::skip(0)->take(4)->get();
        return view('user.front',compact('services','projects','publications'));
    }

    public function publication(){
        $publications = Publication::all();
        return view('user.publication',compact('publications'));
    }

    public function services(){
        $services = Service::all();
        return view('user.services',compact('services'));
    }

    public function currentProject(){
        $projects = Project::all();
        return view('user.currentproject',compact('projects'));
    }

    public function projectArchives(){
        return view('user.project-archives');
    }

    public function aboutUs(){
        return view('user.about-arannayk');
    }

    public function ourTeam(){
        return view('user.our-team');
    }

    public function boardMembers(){
        return view('user.board-members');
    }
}
