<?php

namespace App\Http\Controllers;

use App\Svg;
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
use App\Map;
use Illuminate\Http\Request;


class UserPanelController extends Controller
{
    //------------------------------------HOMEPAGE CONTROLLERS--------------------------------------------------//

    public function index()
    {
        $services = Service::skip(0)->take(2)->get();
        $projects = Project::orderBy('id','desc')->get();
        $publications = Publication::skip(0)->take(4)->get();
        $sliders = Slider::all();
        $timelines = Timeline::skip(0)->take(3)->get();

        return view('user.front', compact('services', 'projects', 'publications', 'sliders', 'timelines'));
    }
    //-------------------------------------------------HOMEPAGE CONTROLLERS----------------------//


    //------------------------------------WHAT WE DO ( SERVICE, CURRENT PROJECTS, PROJECT ARCHIVES) CONTROLLERS--------------------------------------------------//

    public function services()
    {
        $services = Service::all();
        return view('user.services', compact('services'));
    }

    public function currentProject($search = null)
    {

//        $test = Project::where('tag',$search)->paginate(5);
//        return $test;


        if (!$search == null) {
            $projects = Project::where('tag', $search)->paginate(5);
        } else {
            $projects = Project::paginate(5);
        }

        $widgets = Project::skip(0)->take(3)->get();
        $tags = Project::select('tag')->distinct()->get();
        return view('user.currentproject', compact('projects', 'widgets', 'tags'));
    }

    public function singleproject($id)
    {

//        $projects = Project::paginate(5);

        $archives = Archive::find($id);

        return view('user.single-project', compact('archives'));
    }

    public function singlepress($id)
    {

//        $projects = Press::paginate(5);

        $press = Press::find($id);

        return view('user.single-press', compact('press'));
    }

    public function singleAchievement($id)
    {

//        $projects = Press::paginate(5);

        $achievements = Achievement::find($id);

        return view('user.single-achievement', compact('achievements'));
    }

    public function single_current_project($id)
    {
        $projects = Project::find($id);

        $svgs = Svg::where('project_id', $id)->get();

        return view('user.single-current-project', compact('projects', 'svgs'));
    }

    public function single_archived_projects($id)
    {
        $projects = Archive::find($id);

        $svgs = Svg::where('archive_id', $id)->get();

        return view('user.single-archived-project', compact('projects','svgs'));
    }


    public function viewProjects($project)
    {

//        $projects = Project::paginate(5);
        $projects = Project::where('location', 'like', '%' . $project . '%')->paginate(5);
        $archives = Archive::where('location', 'like', '%' . $project . '%')->paginate(5);

        $widgets = Project::where('location', 'like', '%' . $project . '%')->skip(0)->take(3)->get();
        $widgets_archives = Archive::where('location', 'like', '%' . $project . '%')->skip(0)->take(3)->get();

        return view('user.view-projects', compact('projects', 'widgets', 'archives', 'widgets_archives'));
    }

    public function projectArchives($search = null)
    {

        if (!$search == null) {
            $archives = Archive::where('tag', $search)->paginate(5);
        } else {
            $archives = Archive::paginate(5);
        }

        $widgets = Archive::skip(0)->take(3)->get();
        $tags = Archive::select('tag')->distinct()->get();
        return view('user.project-archives', compact('archives', 'widgets', 'tags'));

    }

    //-----------------------------------------------------------WHAT WE DO CONTROLLERS--------------------------//


    //------------------------------------WHERE WE WORK (MAP) CONTROLLER--------------------------------------------------//

    public function map()
    {
        $maps = Map::all();
        return view('user.map', compact('maps'));
    }

    //---------------------------------------------------------------------WHERE WE WORK (MAP) CONTROLLER-----------------------//


    //------------------------------------WHO WE ARE CONTROLLER--------------------------------------------------//

    public function aboutUs()
    {
        $aboutUs = About::all();
        $missions = Mission::all();
        return view('user.about-arannayk', compact('aboutUs', 'missions'));
    }

    public function ourTeam()
    {
        $teams = Team::orderBy('priority','asc')->get();
        return view('user.our-team', compact('teams'));
    }

    public function boardMembers()
    {
        $board = Board::all();
        return view('user.board-members', compact('board'));
    }

    public function achievements()
    {
        $achievements = Achievement::all();
        return view('user.our-achievement', compact('achievements'));
    }

    public function partnersDonors()
    {
        $partners = Partner::all();
        return view('user.partners-donors', compact('partners'));
    }

    public function timeline()
    {
        $timelines = Timeline::all();
        $timeline_id=0;
        return view('user.timeline', compact('timelines','timeline_id'));
    }
    //---------------------------------------------------------WHO WE ARE CONTROLLER----------------------//

    //------------------------------------ GET INVOLVED CONTROLLERS --------------------------------------------------//

    public function career()
    {
        $careers = Career::where('tag', 'career')->get();
        return view('user.career', compact('careers'));
    }

    public function internship()
    {
        $careers = Career::where('tag', 'internship')->get();
        return view('user.internship', compact('careers'));
    }

    public function consultancy()
    {
        $consultancy = Consultancy::all();
        return view('user.consultancy', compact('consultancy'));
    }

    public function procurement()
    {
        $procurements = Procurement::all();
        return view('user.procurement', compact('procurements'));
    }
    //----------------------------------------------------- GET INVOLVED CONTROLLERS ----------------//

    //-------------------------- MEDIA CENTER CONTROLLERS ---------------------------//

    public function pressRelease()
    {
        $pressReleases = Press::orderBy('priority','asc')->paginate(2);
        return view('user.press-release', compact('pressReleases'));
    }

    public function activityUpdates()
    {
        $activities = Activity::orderBy('id','desc')->paginate(6);
        return view('user.activity-updates', compact('activities'));
    }

    public function videoStories()
    {
        $videos = Video::orderBy('id','desc')->paginate(6);
        return view('user.video-stories', compact('videos'));
    }

    public function mediaCoverage()
    {
        $medias = Media::orderBy('id','desc')->paginate(6);
        return view('user.media-coverage', compact('medias'));
    }

    public function photos()
    {
        $photos = Photo::orderBy('id','desc')->paginate(12);
        return view('user.photos', compact('photos'));
    }

    public function blogs()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(5);
        return view('user.blogs', compact('blogs'));
    }

    public function single_blogs($id)
    {
        $blogs = Blog::find($id);
        return view('user.single-blog', compact('blogs'));
    }
    //--------------------------------------------------- MEDIA CENTER CONTROLLERS -------------//

    //-------------------------- KNOWLEDGE CONTROLLERS ---------------------------//

    public function publication()
    {
        $publications = Publication::orderBy('id','desc')->paginate(12);
        return view('user.publication', compact('publications'));
    }

    public function tools()
    {
        $tools = Tool::all();
        return view('user.tools-data', compact('tools'));
    }
    //--------------------------------------------- KNOWLEDGE CONTROLLERS ------------//


//------------------------------------Ecosystem Controllers--------------------------------------------------//
    public function forest()
    {
        $projects = Project::skip(0)->take(4)->where('tag', 'forest')->orderBy('id','desc')->get();
        $archives = Archive::skip(0)->take(4)->where('tag', 'forest')->orderBy('id','desc')->get();
        $blogs = Blog::skip(0)->take(4)->where('tag', 'forest')->orderBy('id','desc')->get();
        $ecosystems = Ecosystem::where('title', 'forest')->orderBy('id','desc')->get();
        return view('user.forest', compact('projects', 'blogs', 'ecosystems', 'archives'));
    }

    public function climate()
    {
        $projects = Project::skip(0)->take(4)->where('tag', 'climate')->orderBy('id','desc')->get();
        $archives = Archive::skip(0)->take(4)->where('tag', 'climate')->orderBy('id','desc')->get();
        $blogs = Blog::skip(0)->take(4)->where('tag', 'climate')->orderBy('id','desc')->get();
        $ecosystems = Ecosystem::where('title', 'climate')->orderBy('id','desc')->get();
        return view('user.climate', compact('projects', 'blogs', 'ecosystems', 'archives'));
    }

    public function biodiversity()
    {
        $projects = Project::skip(0)->take(4)->where('tag', 'biodiversity')->orderBy('id','desc')->get();
        $archives = Archive::skip(0)->take(4)->where('tag', 'biodiversity')->orderBy('id','desc')->get();

        $blogs = Blog::skip(0)->take(4)->where('tag', 'biodiversity')->orderBy('id','desc')->get();
        $ecosystems = Ecosystem::where('title', 'biodiversity')->orderBy('id','desc')->get();
        return view('user.biodiversity', compact('projects', 'blogs', 'ecosystems', 'archives'));
    }

    public function sustainability()
    {
        $projects = Project::skip(0)->take(4)->where('tag', 'sustainability')->orderBy('id','desc')->get();
        $archives = Archive::skip(0)->take(4)->where('tag', 'sustainability')->orderBy('id','desc')->get();

        $blogs = Blog::skip(0)->take(4)->where('tag', 'sustainability')->orderBy('id','desc')->get();
        $ecosystems = Ecosystem::where('title', 'sustainability')->orderBy('id','desc')->get();
        return view('user.sustainability', compact('projects', 'blogs', 'ecosystems', 'archives'));
    }

    public function gender()
    {
        $projects = Project::skip(0)->take(4)->where('tag', 'gender')->orderBy('id','desc')->get();
        $archives = Archive::skip(0)->take(4)->where('tag', 'gender')->orderBy('id','desc')->get();

        $blogs = Blog::skip(0)->take(4)->where('tag', 'gender')->orderBy('id','desc')->get();
        $ecosystems = Ecosystem::where('title', 'gender')->orderBy('id','desc')->get();
        return view('user.gender', compact('projects', 'blogs', 'ecosystems', 'archives'));
    }

//----------------------------------------------------------------------------Ecosystem Controllers----------------------//

    public function contactUs()
    {
        return view('user.contact-us');
    }


//------------------------------------DONATE Controllers--------------------------------------------------//

    public function donate()
    {
        $donates = Donate::all();
        return view('user.donate', compact('donates'));
    }

//------------------------------------------------DONATE Controllers--------------------//


//------------------------------------ SEARCH Controllers--------------------------------------------------//

    public function search()
    {
//        $achievements = Achievement::all();
//        $projects = Project::all();
//        $archives = Archive::all();
//        $services = Service::all();
//        $publications = Publication::all();
//        $blogs = Blog::all();
//        $press = Press::all();
//        return view('user.search', compact('achievements', 'projects', 'archives', 'services', 'publications', 'blogs', 'press'));


        $search_data = "rdgrdghrdglrdgdjhgkrdhgrdjklgdhgrdjklghg";

        $achievements = Achievement::where('title', 'like', '%' . $search_data . '%')->get();
        $projects = Project::where('title', 'like', '%' . $search_data . '%')->orWhere('tag', 'like', '%' . $search_data . '%')->get();
        $archives = Archive::where('title', 'like', '%' . $search_data . '%')->orWhere('tag', 'like', '%' . $search_data . '%')->get();
        $press = Press::where('title', 'like', '%' . $search_data . '%')->get();
        $services = Service::where('title', 'like', '%' . $search_data . '%')->get();
        $blogs = Blog::where('title', 'like', '%' . $search_data . '%')->orWhere('tag', 'like', '%' . $search_data . '%')->get();

        return view('user.search', compact('achievements', 'projects', 'archives', 'services', 'blogs', 'press'));

    }
//----------------------------------------------------- SEARCH Controllers---------------------//

//----------------------------------------------------- SEARCH Form---------------------//

    public function searchForm()
    {
        $search_data = \request('search');

        $achievements = Achievement::where('title', 'like', '%' . $search_data . '%')->get();
        $projects = Project::where('title', 'like', '%' . $search_data . '%')->orWhere('tag', 'like', '%' . $search_data . '%')->get();
        $archives = Archive::where('title', 'like', '%' . $search_data . '%')->orWhere('tag', 'like', '%' . $search_data . '%')->get();
        $press = Press::where('title', 'like', '%' . $search_data . '%')->get();
        $services = Service::where('title', 'like', '%' . $search_data . '%')->get();
        $blogs = Blog::where('title', 'like', '%' . $search_data . '%')->orWhere('tag', 'like', '%' . $search_data . '%')->get();
        return view('user.search', compact('achievements', 'projects', 'archives', 'services', 'blogs', 'press'));
    }


//----------------------------------------------------- SEARCH Form---------------------//
// ---------------------------------Terms & COnditions---------------------------------//

function terms(){
    return view('user.terms');
}

// ---------------------------------Terms & COnditions---------------------------------//


}
