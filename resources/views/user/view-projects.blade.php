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

    <title>Arannayk - Projects</title>

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
            <h1 class="section-heading-title">What We Do</h1>
            <span class="greennature-page-caption">Projects</span>
        </div>
    </div>

    <section>
        <div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <div class="with-sidebar-container container">
                        <div class="with-sidebar-left eight columns">
                            <div class="with-sidebar-content twelve columns">
                                <section id="content-section-1">
                                    <div class="section-container container">
                                        <div class="blog-item-wrapper">
                                            <div class="blog-item-holder">
                                                <div class="greennature-isotope" data-type="blog" data-layout="fitRows">
                                                    <div class="clear"></div>

                                                    @foreach($projects as $project)
                                                        <div class="twelve columns" id="{{ $project->title }}">
                                                            <div class="greennature-item greennature-blog-grid greennature-skin-box">
                                                                <div class="greennature-ux greennature-blog-grid-ux">
                                                                    <article id="post-852" class="post-852 post type-post status-publish format-standard has-post-thumbnail hentry category-fit-row tag-blog tag-life-style">
                                                                        <div class="greennature-standard-style">
                                                                            <div class="greennature-blog-thumbnail">
                                                                                <a href=""> <img src="{{ asset('storage/'.$project->image) }}" class="image-projects" alt=""  /></a>
                                                                            </div>

                                                                            <div class="greennature-blog-grid-content">
                                                                                <header class="post-header">
                                                                                    <h3 class="greennature-blog-title"><a>{{ $project->title }}</a></h3>

                                                                                    <div class="greennature-blog-info">
                                                                                        {{--                                                                                    <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-calendar"></i><a>{{ $project->date }}</a></div>--}}
                                                                                        <div class="blog-info blog-comment greennature-skin-info"><i class="fa fa-heart"></i><a>Funded By - {{ $project->funded_by}} </a></div>
                                                                                        <div class="blog-info blog-comment greennature-skin-info"><i class="fa fa-location-arrow"></i><a>{{ $project->location }} </a></div>

                                                                                        <div class="clear"></div>
                                                                                    </div>
                                                                                    <div class="clear"></div>
                                                                                </header>
                                                                                <!-- entry-header -->

                                                                                <div class="greennature-blog-content">Major Achievements:
                                                                                    <p>{!! $project->achievement !!}</p>
                                                                                    {{--                                                                                <div class="clear"></div><a href="" class="excerpt-read-more">Read More</a></div>--}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                    <!-- #post -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                    <div class="clear"></div>
                                                    {{-- ----------------- pagination ------------------------ --}}

                                                    <div class="pagination-style">
                                                        {{ $projects->links() }}
                                                    </div>

                                                    {{-- ----------------- pagination ------------------------ --}}
                                                </div>
                                            </div>

                                            {{--                                            <div class="greennature-pagination"><span aria-current='page' class='page-numbers current'>1</span>--}}
                                            {{--                                                <a class='page-numbers' href='page/2/index.html'>2</a>--}}
                                            {{--                                                <a class="next page-numbers" href="page/2/index.html">Next &rsaquo;</a></div>--}}
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </section>
                            </div>

                            <div class="clear"></div>
                        </div>

                        <div class="greennature-sidebar greennature-right-sidebar four columns">
                            <div class="greennature-item-start-content sidebar-right-item">
                                <div id="search-3" class="widget widget_search greennature-item greennature-widget">

                                </div>
                                {{--                                <div id="text-2" class="widget widget_text greennature-item greennature-widget">--}}
                                {{--                                    <h3 class="greennature-widget-title">Text Widget</h3>--}}
                                {{--                                    <div class="clear"></div>--}}
                                {{--                                    <div class="textwidget">Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>--}}
                                {{--                                </div>--}}
                                <div id="gdlr-recent-portfolio-widget-2" class="widget widget_gdlr-recent-portfolio-widget greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Recent Projects</h3>
                                    <div class="clear"></div>
                                    <div class="greennature-recent-port-widget">

                                        @foreach($widgets as $project)
                                            <div class="recent-post-widget">
                                                <div class="recent-post-widget-thumbnail">
                                                    <a href=""><img src="{{ asset('storage/'.$project->image) }}" alt="" width="150" height="150" /></a>
                                                </div>
                                                <div class="recent-post-widget-content">
                                                    <div class="recent-post-widget-title"><a href="#{{ $project->title }}">{{ $project->title }}</a></div>
                                                    <div class="recent-post-widget-info">
                                                        {{--                                                    <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-calendar"></i><a>{{ $project->date }}</a></div>--}}
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        @endforeach

                                        <div class="clear"></div>
                                    </div>
                                </div>

                                <div id="tag_cloud-2" class="widget widget_tag_cloud greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Tags</h3>
                                    <div class="clear"></div>
                                    <div class="tagcloud">
                                        @foreach($projects as $project)
                                            <a href="#{{ $project->title }}" class="tag-cloud-link tag-link-11 tag-link-position-1" style="font-size: 8pt;" aria-label="Animal (1 item)">{{ $project->tag }}</a>
                                        @endforeach
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
    </section>

    <!-------------------------------------------------------------------------
  ------------------------------------------------------------------------
  Footer------------------------------------------------------------------
---------------------------------------------------------------------- -->

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
