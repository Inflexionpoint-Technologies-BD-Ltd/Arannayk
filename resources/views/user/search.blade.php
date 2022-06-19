<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]>
<html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="initial-scale=1.0"/>

    <title>Arannayk - Search</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;"
          type="text/css" media="all"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;"
          type="text/css" media="all"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;"
          type="text/css" media="all"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;"
          type="text/css" media="all"/>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset('plugins/superfish/css/superfish.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset('plugins/dl-menu/component.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset('plugins/elegant-font/style.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset('plugins/fancybox/jquery.fancybox.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset('plugins/flexslider/flexslider.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset('css/style-custom.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset('plugins/masterslider/public/assets/css/masterslider.main.css') }}"
          type="text/css"
          media="all"/>
    <link rel="stylesheet" href="{{ asset('css/master-custom.css') }}" type="text/css" media="all"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body data-rsssl="1"
      class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
<div class="body-wrapper float-menu" data-home="https://demo.goodlayers.com/greennature/">

    <!-------------------------------Navigation Starts Here---------------------------------------------------------->

    <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">

        <!-------------------------------------------------------------------------
          ------------------------------------------------------------------------
          Top navigation---------------------------------------------------------
        ---------------------------------------------------------------------- -->

        <x-user.navbar.top-navigation-component></x-user.navbar.top-navigation-component>

        <!---------------------------------------------------------------------------------
          --------------------------------------------------------------------------------
        ---------------------------------------------------- Top navigation------------------ -->


        <div id="greennature-header-substitute"></div>

        <div class="greennature-header-inner header-inner-header-style-5">

            <div class="greennature-header-container container">
                <div class="greennature-header-inner-overlay"></div>

                <!-----------------------------------------------------------------
                  -----------------------------------------------------------------
                  -----------Mobile Navbar-----------------------------------------
                  ------------------------------------------------------------------>

                <x-user.navbar.mobile-navbar-component></x-user.navbar.mobile-navbar-component>


                <!-----------------------------------------------------------------
                  -----------------------------------------------------------------
                  -----------------------------------------------------------------
                  -----------------------------Mobile Navbar----------------------->
                <x-user.navbar.pc-navbar-component></x-user.navbar.pc-navbar-component>

                <!-----------------------------------------------------------------
                  -----------------------------------------------------------------
                  ------------------- PC Navbar -----------------------------------
                  ---------------------------------------------------------------->


                <!-----------------------------------------------------------------
                  -----------------------------------------------------------------
                  ----------------------------------------------------------------
                  --------------------------------------------PC Navbar-------------------->
                <div class="clear"></div>
            </div>
        </div>
    </header>
    <!------------------------------------------ Navbar ends here--- -->


    <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
        <div class="greennature-page-title-overlay"></div>
        <div class="greennature-page-title-container container">
            <h1 class="section-heading-title"></h1>
            <span class="greennature-page-caption"></span>
        </div>
    </div>

    <section class="container" style="margin-bottom:3rem;">
        <div class="search__container">
            <p class="search__title">

            </p>
            <form action="{{ route('search.post') }}" method="post">
                {{ csrf_field() }}
                <div>
                    <input class="search__input" type="text" placeholder="Search" name="search" style="margin-right: 8px;">
                    <button type="submit" class="search-button-style"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </section>

    <!---------------------------- Our Achievement Search ------------------------------------------------------>


    @if($achievements->count() > 0)

        <section id="content-section-4">
            <div class="greennature-color-wrapper gdlr-show-all no-skin"
                 style="background-color: #ffffff; padding-bottom: 25px">
                <div class="container">
                    <div
                        class="greennature-item-title-wrapper greennature-item greennature-left-divider greennature-medium">
                        <div class="greennature-item-title-container container">
                            <div class="greennature-item-title-head">
                                <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                    <img src="{{ asset('upload/icon-5.png') }}" alt="" width="80" height="80"/>
                                    Our Achievements
                                </h3>

                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapper type-classic-portfolio">
                        <div class="portfolio-item-holder greennature-portfolio-column-4">
                            <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                                <div class="clear"></div>

                                @foreach($achievements as $project)
                                    <!--------------------------Project 1 Description------------------------>
                                    <div class="">
                                        <div
                                            class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                            <div class="greennature-ux greennature-classic-portfolio-ux">

                                                <div class="portfolio-classic-content">
                                                    <h3 class="portfolio-title">
                                                        <a href="{{ route('viewAchievement', $project->id) }}">{{ \Illuminate\Support\Str::words($project -> title,13,'...')}}</a>
                                                    </h3>
                                                    <div class="greennature-portfolio-info">
                                                        <div class="portfolio-info portfolio-tag">
                                  <span class="info-head greennature-title">
                                  </span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="portfolio-excerpt">
                                                        <p>{!! \Illuminate\Support\Str::words($project->content,13,'...')  !!}</p>

                                                        <div class="clear"></div>
                                                        <a href="" class="excerpt-read-more">Read
                                                            More</a>
                                                    </div>
                                                    <a class="portfolio-classic-learn-more" href="#">Learn
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--------------------------------------Project 1 Description---->
                                @endforeach


                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </section>

    @endif


    <!------------------------------------------------------------------------  Our Achievement Search ----------->

    <!---------------------------- Current Projects Search ------------------------------------------------------>
    @if($projects->count() > 0)
    <section id="content-section-4">
        <div class="greennature-color-wrapper gdlr-show-all no-skin"
             style="background-color: #ffffff; padding-bottom: 25px">
            <div class="container">
                <div
                    class="greennature-item-title-wrapper greennature-item greennature-left-divider greennature-medium">
                    <div class="greennature-item-title-container container">
                        <div class="greennature-item-title-head">
                            <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                <img src="{{ asset('upload/icon-5.png') }}" alt="" width="80" height="80"/>Our
                                Recent Projects
                            </h3>

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper type-classic-portfolio">
                    <div class="portfolio-item-holder greennature-portfolio-column-4">
                        <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                            <div class="clear"></div>

                            @foreach($projects as $project)
                                <!--------------------------Project 1 Description------------------------>
                                <div class="">
                                    <div
                                        class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                        <div class="greennature-ux greennature-classic-portfolio-ux">

                                            <div class="portfolio-classic-content">
                                                <h3 class="portfolio-title">
                                                    <a href="{{ route('viewCurrentProject', $project->id) }}">{{ \Illuminate\Support\Str::words($project -> title,13,'...')}}</a>
                                                </h3>
                                                <div class="greennature-portfolio-info">
                                                    <div class="portfolio-info portfolio-tag">
                                  <span class="info-head greennature-title">
                                  </span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="portfolio-excerpt">
                                                    <p>{!! \Illuminate\Support\Str::words($project->achievement,13,'...')  !!}</p>

                                                    <div class="clear"></div>
                                                    <a href="{{ route('projects') }}" class="excerpt-read-more">Read
                                                        More</a>
                                                </div>
                                                <a class="portfolio-classic-learn-more" href="#">Learn
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--------------------------------------Project 1 Description---->
                            @endforeach


                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    @endif
    <!------------------------------------------------------------------------ Current Projects Search ----------->

    <!---------------------------- Project Archives Search ------------------------------------------------------>
    @if($archives->count() > 0)

    <section id="content-section-4">
        <div class="greennature-color-wrapper gdlr-show-all no-skin"
             style="background-color: #ffffff; padding-bottom: 25px">
            <div class="container">
                <div
                    class="greennature-item-title-wrapper greennature-item greennature-left-divider greennature-medium">
                    <div class="greennature-item-title-container container">
                        <div class="greennature-item-title-head">
                            <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                <img src="{{ asset('upload/icon-5.png') }}" alt="" width="80" height="80"/>
                                Project Archives
                            </h3>

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper type-classic-portfolio">
                    <div class="portfolio-item-holder greennature-portfolio-column-4">
                        <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                            <div class="clear"></div>

                            @foreach($archives as $project)
                                <!--------------------------Project 1 Description------------------------>
                                <div class="">
                                    <div
                                        class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                        <div class="greennature-ux greennature-classic-portfolio-ux">

                                            <div class="portfolio-classic-content">
                                                <h3 class="portfolio-title">
                                                    <a href="{{ route('viewProject', $project->id) }}">{{ \Illuminate\Support\Str::words($project -> title,13,'...')}}</a>
                                                </h3>
                                                <div class="greennature-portfolio-info">
                                                    <div class="portfolio-info portfolio-tag">
                                  <span class="info-head greennature-title">
                                  </span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="portfolio-excerpt">
                                                    <p>{!! \Illuminate\Support\Str::words($project->achievement,13,'...')  !!}</p>

                                                    <div class="clear"></div>
                                                    <a href="{{ route('projects') }}" class="excerpt-read-more">Read
                                                        More</a>
                                                </div>
                                                <a class="portfolio-classic-learn-more" href="#">Learn
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--------------------------------------Project 1 Description---->
                            @endforeach


                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    @endif
    <!------------------------------------------------------------------------ Project Archives Search ----------->

    <!---------------------------- Services Search------------------------------------------------------>
    @if($services->count() > 0)

    <section id="content-section-2">
        <div class="greennature-color-wrapper  gdlr-show-all greennature-skin-light-grey"
             style="background-color: #fff; padding-bottom: 15px; ">
            <div class="container">
                <div
                    class="greennature-item-title-wrapper greennature-item greennature-left-divider greennature-medium">
                    <div class="greennature-item-title-container container">
                        <div class="greennature-item-title-head">
                            <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                <img src="{{ asset('upload/icon-5.png') }}" alt="" width="80" height="80"/>
                                Services
                            </h3>

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                @foreach($services as $service)
                    <div>
                        <div class="greennature-ux column-service-ux">
                            <div class="greennature-item greennature-column-service-item greennature-type-1"
                                 style="margin-bottom: 30px;">
                                <div class="column-service-image"><img src="{{ asset('storage/'.$service->icon) }}"
                                                                       alt="" width="40"
                                                                       height="40"/></div>
                                <div class="column-service-content-wrapper">

                                    <a href="{{ route('services') }}"><h3 class="column-service-title hover-link-style">{{ $service->title }}</h3></a>

                                    <div class="column-service-content greennature-skin-content"
                                         style="font-size: 14px;">
                                        <p>{!! $service->content !!} </p>
                                    </div>
                                    {{--                                <a class="column-service-read-more" href="#">Read More</a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="clear"></div>

            </div>
        </div>
        <div class="clear"></div>
    </section>
    @endif
    <!-------------------------------------------------------------- Services Search--------------------->

    <!---------------------------- Publications Search------------------------------------------------------>
    {{--    <section id="content-section-4">--}}
    {{--        <div class="greennature-color-wrapper gdlr-show-all no-skin"--}}
    {{--             style="background-color: #ffffff; padding-bottom: 25px">--}}
    {{--            <div class="container">--}}
    {{--                <div--}}
    {{--                    class="greennature-item-title-wrapper greennature-item greennature-left-divider greennature-medium">--}}
    {{--                    <div class="greennature-item-title-container container">--}}
    {{--                        <div class="greennature-item-title-head">--}}
    {{--                            <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">--}}
    {{--                                <img src="{{ asset('upload/icon-5.png') }}" alt="" width="80" height="80"/>Our--}}
    {{--                                Publications--}}
    {{--                            </h3>--}}

    {{--                            <div class="clear"></div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="portfolio-item-wrapper type-classic-portfolio">--}}
    {{--                    <div class="portfolio-item-holder greennature-portfolio-column-4">--}}
    {{--                        <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">--}}
    {{--                            <div class="clear"></div>--}}

    {{--                            @foreach($publications as $publication)--}}
    {{--                                <div class="three columns">--}}
    {{--                                    <div--}}
    {{--                                        class="greennature-item greennature-portfolio-item greennature-classic-portfolio">--}}
    {{--                                        <div class="greennature-ux greennature-classic-portfolio-ux">--}}
    {{--                                            <div class="portfolio-thumbnail greennature-image">--}}
    {{--                                                <img src="{{asset('storage/'.$publication->image) }}"--}}
    {{--                                                     style="width: 300px; height: 280px"/><span--}}
    {{--                                                    class="portfolio-overlay">&nbsp;</span><a--}}
    {{--                                                    class="portfolio-overlay-icon"--}}
    {{--                                                    href="{{ asset('storage/'.$publication->image) }}"--}}
    {{--                                                    data-rel="fancybox"><span class="portfolio-icon"><i--}}
    {{--                                                            class="fa fa-search"></i></span></a>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="portfolio-classic-content">--}}
    {{--                                                <div style="text-align: center" class="reveal fade-bottom">--}}
    {{--                                                    <a class="stunning-item-button large download-button-style"--}}
    {{--                                                       href="{{ asset('storage/'.$publication->file_content) }}"--}}
    {{--                                                       download>Download</a>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="greennature-portfolio-info">--}}
    {{--                                                    <div class="clear"></div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="portfolio-excerpt">--}}
    {{--                                                    <div class="clear"></div>--}}
    {{--                                                    <a href="#" class="excerpt-read-more">Read More</a>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            @endforeach--}}


    {{--                        </div>--}}
    {{--                        <div class="clear"></div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="clear"></div>--}}
    {{--                <div class="clear"></div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="clear"></div>--}}
    {{--    </section>--}}
    <!------------------------------------------------------------ Publications Search------------------------>

    <!---------------------------- Blogs Search------------------------------------------------------>
    @if($blogs->count() > 0)

    <section id="content-section-4">
        <div class="greennature-color-wrapper gdlr-show-all no-skin"
             style="background-color: #ffffff; padding-bottom: 25px">
            <div class="container">
                <div
                    class="greennature-item-title-wrapper greennature-item greennature-left-divider greennature-medium">
                    <div class="greennature-item-title-container container">
                        <div class="greennature-item-title-head">
                            <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                <img src="{{ asset('upload/icon-5.png') }}" alt="" width="80" height="80"/>
                                Blogs
                            </h3>

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper type-classic-portfolio">
                    <div class="portfolio-item-holder greennature-portfolio-column-4">
                        <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                            <div class="clear"></div>

                            @foreach($blogs as $project)
                                <!--------------------------Project 1 Description------------------------>
                                <div class="">
                                    <div
                                        class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                        <div class="greennature-ux greennature-classic-portfolio-ux">

                                            <div class="portfolio-classic-content">
                                                <h3 class="portfolio-title">
                                                    <a href="{{ route('viewBlog', $project->id) }}">{{ \Illuminate\Support\Str::words($project -> title,13,'...')}}</a>
                                                </h3>
                                                <div class="greennature-portfolio-info">
                                                    <div class="portfolio-info portfolio-tag">
                                  <span class="info-head greennature-title">
                                  </span>

                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="portfolio-excerpt">
                                                    <p>{!! \Illuminate\Support\Str::words($project->content,13,'...')  !!}</p>

                                                    <div class="clear"></div>
                                                    <a href="{{ route('projects') }}" class="excerpt-read-more">Read
                                                        More</a>
                                                </div>
                                                <a class="portfolio-classic-learn-more" href="#">Learn
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--------------------------------------Project 1 Description---->
                            @endforeach


                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    @endif
    <!-------------------------------------------------------------- Blogs Search--------------------->

    <!---------------------------- Press Release Search------------------------------------------------------>
    @if($press->count() > 0)

    <section id="content-section-4">
        <div class="greennature-color-wrapper gdlr-show-all no-skin"
             style="background-color: #ffffff; padding-bottom: 25px">
            <div class="container">
                <div
                    class="greennature-item-title-wrapper greennature-item greennature-left-divider greennature-medium">
                    <div class="greennature-item-title-container container">
                        <div class="greennature-item-title-head">
                            <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                <img src="{{ asset('upload/icon-5.png') }}" alt="" width="80" height="80"/>
                                Press Release
                            </h3>

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item-wrapper type-classic-portfolio">
                    <div class="portfolio-item-holder greennature-portfolio-column-4">
                        <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                            <div class="clear"></div>

                            @foreach($press as $project)
                                <!--------------------------Project 1 Description------------------------>
                                <div class="">
                                    <div
                                        class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                        <div class="greennature-ux greennature-classic-portfolio-ux">

                                            <div class="portfolio-classic-content">
                                                <h3 class="portfolio-title">
                                                    <a href="{{ route('viewPress', $project->id) }}">{{ \Illuminate\Support\Str::words($project -> title,13,'...')}}</a>
                                                </h3>
                                                <div class="greennature-portfolio-info">
                                                    <div class="portfolio-info portfolio-tag">
                                  <span class="info-head greennature-title">
                                  </span>

                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="portfolio-excerpt">
                                                    <p>{!! \Illuminate\Support\Str::words($project->content,13,'...')  !!}</p>

                                                    <div class="clear"></div>
                                                    <a href="{{ route('projects') }}" class="excerpt-read-more">Read
                                                        More</a>
                                                </div>
                                                <a class="portfolio-classic-learn-more" href="#">Learn
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--------------------------------------Project 1 Description---->
                            @endforeach


                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
    @endif
    <!-------------------------------------------------------------- Press Release Search--------------------->


    <!-------------------------------------------------------------------------
  ------------------------------------------------------------------------
  Footer------------------------------------------------------------------
---------------------------------------------------------------------- -->


    <!-------------------------------------------------------------------------
        ------------------------------------------------------------------------
        -----------------------------------------------------------------------
      --------------------------------------------------Footer---------------- -->

</div>


<!-- body-wrapper -->

<script type="text/javascript" src="{{ asset('js/jquery/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
<script>
    var ms_grabbing_curosr =
            "plugins/masterslider/public/assets/css/common/grabbing.html",
        ms_grab_curosr =
            "plugins/masterslider/public/assets/css/common/grab.html";
</script>
<script type="text/javascript" src="{{ asset('plugins/superfish/js/superfish.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/hoverIntent.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/dl-menu/modernizr.custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/dl-menu/jquery.dlmenu.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery.easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/fancybox/jquery.fancybox.pack.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/fancybox/helpers/jquery.fancybox-media.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/fancybox/helpers/jquery.fancybox-thumbs.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/flexslider/jquery.flexslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/masterslider/public/assets/js/masterslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jquery.transit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/gdlr-portfolio/gdlr-portfolio-script.js') }}"></script>

</body>

</html>
