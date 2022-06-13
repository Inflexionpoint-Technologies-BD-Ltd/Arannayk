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
use App\Press;
use App\Blog;
use App\Activity;
use App\Media;
use App\Photo;
use App\Video;
use App\Tool;
use App\About;
use App\Mission;
use App\Ecosystem;
use App\Donate;
use App\Timeline;
use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    public function index(){
        $services = Service::skip(0)->take(2)->get();
        $projects=Project::skip(0)->take(4)->get();
        $publications=Publication::skip(0)->take(4)->get();
        $sliders=Slider::skip(0)->take(3)->get();
        return view('user.front',compact('services','projects','publications','sliders'));
    }

    public function publication(){
        $publications = Publication::paginate(12);
        return view('user.publication',compact('publications'));
    }

    public function services(){
        $services = Service::all();
        return view('user.services',compact('services'));
    }

    public function currentProject(){
        $projects = Project::paginate(5);
        $widgets= Project::skip(0)->take(3)->get();
        return view('user.currentproject',compact('projects','widgets'));
    }

    public function projectArchives(){
        $archives= Archive::paginate(5);
        $widgets= Archive::skip(0)->take(3)->get();
        $projects= Project::all();

        return view('user.project-archives', compact('archives','projects','widgets'));
    }

    public function aboutUs(){
        $aboutUs=About::all();
        $missions=Mission::all();
        return view('user.about-arannayk',compact('aboutUs','missions'));
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
        $achievements=Achievement::paginate(5);
        return view('user.our-achievement', compact('achievements'));
    }

    public function partnersDonors(){
        $partners=Partner::all();
        return view('user.partners-donors',compact('partners'));
    }

    public function career(){
        $careers= Career::where('tag','career')->get();
        return view('user.career',compact('careers'));
    }

    public function internship(){
        $careers= Career::where('tag','internship')->get();
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
        $pressReleases=Press::paginate(5);
        return view('user.press-release',compact('pressReleases'));
    }
    public function activityUpdates(){
        $activities= Activity::paginate(6);
        return view('user.activity-updates',compact('activities'));
    }
    public function videoStories(){
        $videos= Video::paginate(6);
        return view('user.video-stories', compact('videos'));
    }
    public function mediaCoverage(){
        $medias= Media::paginate(6);
        return view('user.media-coverage',compact('medias'));
    }
    public function photos(){
        $photos = Photo::paginate(12);
        return view('user.photos', compact('photos'));
    }

    public function blogs(){
        $blogs=Blog::paginate(5);
        return view('user.blogs',compact('blogs'));
    }

    public function tools(){
        $tools= Tool::all();
        return view('user.tools-data', compact('tools'));
    }

    public function forest(){
        $projects=Project::skip(0)->take(4)->where('tag','forest')->get();
        $blogs=Blog::skip(0)->take(4)->where('tag','forest')->get();
        $ecosystems = Ecosystem::where('title','forest')->get();
        return view('user.forest',compact('projects', 'blogs','ecosystems'));
    }

    public function climate(){
        $projects=Project::skip(0)->take(4)->where('tag','climate')->get();
        $blogs=Blog::skip(0)->take(4)->where('tag','climate')->get();
        $ecosystems = Ecosystem::where('title','climate')->get();
        return view('user.climate',compact('projects', 'blogs','ecosystems'));
    }

    public function biodiversity(){
        $projects=Project::skip(0)->take(4)->where('tag','biodiversity')->get();
        $blogs=Blog::skip(0)->take(4)->where('tag','biodiversity')->get();
        $ecosystems = Ecosystem::where('title','biodiversity')->get();
        return view('user.biodiversity',compact('projects', 'blogs','ecosystems'));
    }

    public function sustainability(){
        $projects=Project::skip(0)->take(4)->where('tag','sustainability')->get();
        $blogs=Blog::skip(0)->take(4)->where('tag','sustainability')->get();
        $ecosystems = Ecosystem::where('title','sustainability')->get();
        return view('user.sustainability',compact('projects', 'blogs','ecosystems'));
    }
    public function gender(){
        $projects=Project::skip(0)->take(4)->where('tag','gender')->get();
        $blogs=Blog::skip(0)->take(4)->where('tag','gender')->get();
        $ecosystems = Ecosystem::where('title','gender')->get();
        return view('user.gender',compact('projects', 'blogs','ecosystems'));
    }

    public function contactUs(){
        return view('user.contact-us');
    }

    public function timeline(){
        $timelines=Timeline::all();
        return view('user.timeline',compact('timelines'));
    }

    public function donate(){
        $donates=Donate::all();
        return view('user.donate', compact('donates'));
    }
    public function search(){
        return view('user.search');

    }
}
