<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]>
<html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />

    <title>Arannayk - Gender</title>
    <link rel="icon" href="{{ asset('img/logo_new.png') }}" type="image/icon type">


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;"
        type="text/css" media="all" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;"
        type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('plugins/superfish/css/superfish.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('plugins/dl-menu/component.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('plugins/elegant-font/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('plugins/fancybox/jquery.fancybox.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('plugins/flexslider/flexslider.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/style-custom.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('plugins/masterslider/public/assets/css/masterslider.main.css') }}"
        type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/master-custom.css') }}" type="text/css" media="all" />


    {{-- ------------------------------ font awsome icon ------------------------------  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- ------------------------------ font awsome icon ------------------------------  --}}
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
                <h1 class="section-heading-title">Gender</h1>
                <span class="greennature-page-caption"></span>
            </div>
        </div>


        <section id="content-section-3">
            <div class="greennature-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; ">
                @foreach ($gender as $ecosystem)
                    <div class="container">
                        <div class="six columns">
                            <div class="greennature-video-item greennature-item">
                                <img src="{{ asset('storage/' . $ecosystem->image) }}" class="ecosystem-image"
                                    alt="" width="80" height="80" />
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="greennature-item greennature-about-us-item greennature-normal">
                                <div class="about-us-title-wrapper">
                                    <h3 class="about-us-title"></h3>
                                    <div class="about-us-caption greennature-title-font greennature-skin-info"></div>
                                    <div class="about-us-title-divider"></div>
                                </div>
                                <div class="about-us-content-wrapper">
                                    <div class="about-us-content greennature-skin-content">
                                        <p>{!! $ecosystem->content !!} </p>
                                    </div>
                                    <div>
                                        @foreach ($sdgs as $image)
                                            <img src="{{ asset('storage/' . $image->image) }}"
                                                style="width:80px; height:80px; margin-right: 10px;">
                                        @endforeach

                                        {{--                                <img src="{{ asset('images/forest-pic-2.png') }}" style="width:80px; height:80px; margin-right: 10px;"> --}}
                                        {{--                                <img src="{{ asset('images/forest-pic-3.png') }}" style="width:80px; height:80px; margin-right: 10px;"> --}}
                                        {{--                                <img src="{{ asset('images/forest-pic-4.png') }}" style="width:80px; height:80px; margin-right: 10px;"> --}}
                                        {{--                                <img src="{{ asset('images/forest-pic-5.png') }}" style="width:80px; height:80px;"> --}}

                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                @endforeach
            </div>
            <div class="clear"></div>
        </section>

        <section id="content-section-4">
            <div class="greennature-color-wrapper gdlr-show-all no-skin"
                style="background-color: #ffffff; padding-bottom: 25px">
                <div class="container">
                    <div
                        class="greennature-item-title-wrapper greennature-item greennature-left-divider greennature-medium">
                        <div class="greennature-item-title-container container">
                            <div class="greennature-item-title-head">
                                <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                    <img src="{{ asset('upload/icon-5.png') }}" alt="" width="80"
                                        height="80" />Our
                                    Latest Projects
                                </h3>
                                <a class="greennature-item-title-link" href="/current-projects">More
                                    Projects</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapper type-classic-portfolio">
                        <div class="portfolio-item-holder greennature-portfolio-column-4">
                            <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                                <div class="clear"></div>

                                @foreach ($projects as $project)
                                    <!--------------------------Project 1 Description------------------------>
                                    <div class="three columns">
                                        <div
                                            class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                            <div class="greennature-ux greennature-classic-portfolio-ux">
                                                <div class="portfolio-thumbnail greennature-image">
                                                    <img src="{{ asset('storage/' . $project->image) }}" alt=""
                                                        style="width: 250px; height: 150px" /><span
                                                        class="portfolio-overlay">&nbsp;</span><a
                                                        class="portfolio-overlay-icon"
                                                        href="{{ asset('storage/' . $project->image) }}"
                                                        data-rel="fancybox"><span class="portfolio-icon"><i
                                                                class="fa fa-search"></i></span></a>
                                                </div>
                                                <div class="portfolio-classic-content">
                                                    <h3 class="portfolio-title">
                                                        <a
                                                            href="{{ route('viewCurrentProject', $project->id) }}">{{ $project->title }}</a>
                                                    </h3>
                                                    <div class="greennature-portfolio-info">
                                                        <div class="portfolio-info portfolio-tag">
                                                            <span class="info-head greennature-title">
                                                            </span>
                                                            <p>
                                                                {{ $project->location }}
                                                            </p>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="portfolio-excerpt">
                                                        {!! \Illuminate\Support\Str::words($project->achievement, 13, '...') !!}

                                                        <div class="clear"></div>
                                                        <a href="/current-projects" class="excerpt-read-more">Read
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

        <section id="content-section-4">
            <div class="greennature-color-wrapper gdlr-show-all no-skin"
                style="background-color: #ffffff; padding-bottom: 25px">
                <div class="container">
                    <div
                        class="greennature-item-title-wrapper greennature-item greennature-left-divider greennature-medium">
                        <div class="greennature-item-title-container container">
                            <div class="greennature-item-title-head">
                                <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                    <img src="{{ asset('upload/icon-5.png') }}" alt="" width="80"
                                        height="80" />
                                    Project Archives
                                </h3>
                                <a class="greennature-item-title-link" href="{{ route('archives') }}">More
                                    Projects</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapper type-classic-portfolio">
                        <div class="portfolio-item-holder greennature-portfolio-column-4">
                            <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                                <div class="clear"></div>

                                @foreach ($archives as $project)
                                    <!--------------------------Project 1 Description------------------------>
                                    <div class="three columns">
                                        <div
                                            class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                            <div class="greennature-ux greennature-classic-portfolio-ux">
                                                <div class="portfolio-thumbnail greennature-image">
                                                    <img src="{{ asset('storage/' . $project->image) }}" alt=""
                                                        style="width: 250px; height: 150px" /><span
                                                        class="portfolio-overlay">&nbsp;</span><a
                                                        class="portfolio-overlay-icon"
                                                        href="{{ asset('storage/' . $project->image) }}"
                                                        data-rel="fancybox"><span class="portfolio-icon"><i
                                                                class="fa fa-search"></i></span></a>
                                                </div>
                                                <div class="portfolio-classic-content">
                                                    <h3 class="portfolio-title">

                                                        <a href="{{ route('viewProject', $project->id) }}">{{ \Illuminate\Support\Str::words($project->title, 13, '...') }}
                                                        </a>
                                                    </h3>
                                                    <div class="greennature-portfolio-info">
                                                        <div class="portfolio-info portfolio-tag">
                                                            <span class="info-head greennature-title">
                                                            </span>
                                                            <p>
                                                                {{ $project->location }}
                                                            </p>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="portfolio-excerpt">
                                                        {!! \Illuminate\Support\Str::words($project->achievement, 13, '...') !!}

                                                        <div class="clear"></div>
                                                        <a href="{{ route('archives') }}"
                                                            class="excerpt-read-more">Read
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

        <section id="content-section-4">
            <div class="greennature-color-wrapper gdlr-show-all no-skin"
                style="background-color: #ffffff; padding-bottom: 25px">
                <div class="container">
                    <div
                        class="greennature-item-title-wrapper greennature-item greennature-left-divider greennature-medium">
                        <div class="greennature-item-title-container container">
                            <div class="greennature-item-title-head">
                                <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">
                                    <img src="{{ asset('upload/icon-5.png') }}" alt="" width="80"
                                        height="80" />
                                    Related Blogs
                                </h3>
                                <a class="greennature-item-title-link" href="{{ route('blogs') }}">More
                                    Blogs</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item-wrapper type-classic-portfolio">
                        <div class="portfolio-item-holder greennature-portfolio-column-4">
                            <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                                <div class="clear"></div>

                                @foreach ($blogs as $blog)
                                    <!--------------------------Project 1 Description------------------------>
                                    <div class="three columns">
                                        <div
                                            class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                            <div class="greennature-ux greennature-classic-portfolio-ux">
                                                <div class="portfolio-thumbnail greennature-image">
                                                    <img src="{{ asset('storage/' . $blog->image) }}" alt=""
                                                        style="width: 250px; height: 150px" /><span
                                                        class="portfolio-overlay">&nbsp;</span><a
                                                        class="portfolio-overlay-icon"
                                                        href="{{ asset('storage/' . $blog->image) }}"
                                                        data-rel="fancybox"><span class="portfolio-icon"><i
                                                                class="fa fa-search"></i></span></a>
                                                </div>
                                                <div class="portfolio-classic-content">
                                                    <h3 class="portfolio-title">
                                                        <a
                                                            href="{{ route('viewBlog', $blog->id) }}">{{ $blog->title }}</a>
                                                    </h3>
                                                    <div class="greennature-portfolio-info">
                                                        <div class="portfolio-info portfolio-tag">
                                                            <span class="info-head greennature-title">
                                                            </span>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="portfolio-excerpt">
                                                        {!! \Illuminate\Support\Str::limit($blog->content, 150, '...') !!}

                                                        <div class="clear"></div>
                                                        <a href="{{ route('blogs') }}" class="excerpt-read-more">Read
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


        <x-user.footer.footer-component></x-user.footer.footer-component>

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
