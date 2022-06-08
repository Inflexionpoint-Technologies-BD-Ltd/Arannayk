<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Slider;
use App\Service;
use App\Project;
use App\Archive;
use App\Publication;
use App\Team;
use App\Board;
use App\Partner;
use App\Achievement;
use App\Career;
use App\Consultancy;
use App\Procurement;
use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    public function index(){
        $services = Service::skip(0)->take(2)->get();
        $projects=Project::skip(0)->take(4)->get();
        $publications=Publication::skip(0)->take(4)->get();
        $sliders=Slider::skip(0)->take(2)->get();
        return view('user.front',compact('services','projects','publications','sliders'));
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
        $archive= Archive::all();
        $projects= Project::all();
        return view('user.project-archives', compact('archive','projects'));
    }

    public function aboutUs(){
        return view('user.about-arannayk');
    }

    public function ourTeam(){
        $teams=Team::all();
        return view('user.our-team', compact('teams'));
    }

    public function boardMembers(){
        $board= Board::all();
        return view('user.board-members', compact('board'));
    }

    public function achievements(){
        $achievements=Achievement::all();
        return view('user.our-achievement', compact('achievements'));
    }

    public function partnersDonors(){
        $partners=Partner::all();
        return view('user.partners-donors',compact('partners'));
    }

    public function career(){
        $careers= Career::all();
        return view('user.career',compact('careers'));
    }

    public function internship(){
        $careers= Career::all();
        return view('user.internship',compact('careers'));
    }

    public function consultancy(){
        $consultancy= Consultancy::all();
        return view('user.consultancy',compact('consultancy'));
    }

    public function procurement(){
        $procurements=Procurement::all();
        return view('user.procurement',compact('procurements'));
    }

    public function pressRelease(){
        return view('user.press-release');
    }
    public function activityUpdates(){
        return view('user.activity-updates');
    }
    public function videoStories(){
    }
    public function mediaCoverage(){
    }
    public function photos(){
    }
    public function blogs(){
        return view('user.blogs');
    }
}
