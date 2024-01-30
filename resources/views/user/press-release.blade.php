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
    <link rel="icon" href="{{ asset('img/logo_new.png') }}" type="image/icon type">

    <title>Arannayk - Press Release</title>

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
                <span class="greennature-page-caption">Press Release</span>
                <h1 class="section-heading-title"></h1>

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

                                                    @foreach ($pressReleases as $press)
                                                        <div class="greennature-item greennature-blog-full"
                                                            id="{{ $press->title }}">
                                                            <div class="greennature-ux greennature-blog-full-ux">
                                                                <article id="post-862"
                                                                    class="post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news">
                                                                    <div class="greennature-standard-style">
                                                                        <div class="press-release-style">
                                                                            <a> <img src="{{ asset('storage/' . $press->image) }}"
                                                                                    class="press-release-image"
                                                                                    alt="" /></a>
                                                                        </div>

                                                                        <div class="blog-content-wrapper">
                                                                            <header class="post-header">
                                                                                <h3 class="greennature-blog-title">
                                                                                    <a>{{ $press->title }}</a>
                                                                                </h3>

                                                                                <div class="greennature-blog-info">
                                                                                    {{--                                                                            <div class="blog-info blog-author greennature-skin-info"><i class="fa fa-edit"></i><a>Posted on {{ $press->created_at-> format('d/m/y') }} </a></div> --}}
                                                                                    <div
                                                                                        class="blog-info blog-author greennature-skin-info">
                                                                                        <i
                                                                                            class="fa fa-tags"></i><a>{{ $press->tag }}</a>
                                                                                    </div>
                                                                                    <div class="clear"></div>
                                                                                </div>
                                                                                <div class="clear"></div>
                                                                            </header>
                                                                            <!-- entry-header -->

                                                                            <div class="greennature-blog-content"
                                                                                style="text-align: justify">
                                                                                {!! \Illuminate\Support\Str::limit($press->content, '1500', '.....') !!}
                                                                                <div class="clear">
                                                                                </div>
                                                                                <a href="{{ route('single-press', $press->id) }}"
                                                                                    class="excerpt-read-more">Read
                                                                                    More</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- blog content wrapper -->
                                                                        <div class="clear"></div>
                                                                    </div>
                                                                </article>
                                                                <!-- #post -->
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                                {{-- ----------------- pagination ------------------------ --}}

                                                <div class="pagination-style">
                                                    {{ $pressReleases->links() }}
                                                </div>

                                                {{-- ----------------- pagination ------------------------ --}}
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </section>
                                </div>

                                <div class="clear"></div>
                            </div>

                            <div class="greennature-sidebar greennature-right-sidebar four columns">
                                <div class="greennature-item-start-content sidebar-right-item">

                                    <div id="gdlr-recent-portfolio-widget-2"
                                        class="widget widget_gdlr-recent-portfolio-widget greennature-item greennature-widget">
                                        <h3 class="greennature-widget-title">Recent Press Releases</h3>
                                        <div class="clear"></div>
                                        <div class="greennature-recent-port-widget">
                                            @foreach ($pressReleases as $press)
                                                <div class="recent-post-widget">
                                                    <div class="recent-post-widget-thumbnail">
                                                        <a><img src="{{ asset('storage/' . $press->image) }}"
                                                                alt="" width="150" height="150" /></a>
                                                    </div>
                                                    <div class="recent-post-widget-content">
                                                        <div class="recent-post-widget-title"><a
                                                                href="#{{ $press->title }}">{{ $press->title }}</a>
                                                        </div>
                                                        <div class="recent-post-widget-info">
                                                            {{--                                                    <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a>{{ $press->created_at-> format('d/m/y') }}</a></div> --}}
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            @endforeach

                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    {{--                                <div id="tag_cloud-2" class="widget widget_tag_cloud greennature-item greennature-widget"> --}}
                                    {{--                                    <h3 class="greennature-widget-title">Tags</h3> --}}
                                    {{--                                    <div class="clear"></div> --}}
                                    {{--                                    <div class="tagcloud"> --}}
                                    {{--                                        @foreach ($pressReleases as $press) --}}
                                    {{--                                        <a href="#{{ $press->title }}" class="tag-cloud-link tag-link-11 tag-link-position-1" style="font-size: 8pt;" aria-label="Animal (1 item)">{{ $press->tag }}</a> --}}
                                    {{--                                        @endforeach --}}
                                    {{--                                        </div> --}}
                                    {{--                                </div> --}}
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
