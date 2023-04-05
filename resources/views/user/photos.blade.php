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

    <title>Arannayk - Photos</title>

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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" media="all" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <span class="greennature-page-caption">Photos</span>
                <h1 class="section-heading-title"></h1>

            </div>
        </div>


        <section style="margin-top: 3rem;">
            <div class="content-wrapper">
                <div class="greennature-content">

                    <!-- Above Sidebar Section-->

                    <!-- Sidebar With Content Section-->
                    <div class="content-wrapper">


                        <div class="greennature-content">

                            <div class="with-sidebar-wrapper">
                                <section id="content-section-1">
                                    <div class="section-container container">
                                        <div class="portfolio-item-wrapper type-classic-portfolio"
                                            style="margin-bottom: 20px;">
                                            <div class="portfolio-item-holder  greennature-portfolio-column-3">
                                                <div class="greennature-isotope" data-type="portfolio"
                                                    data-layout="fitRows">
                                                    <div class="clear"></div>

                                                    <?php $id = 0; ?>

                                                    @foreach ($titles as $title)
                                                        <?php $id += 1; ?>


                                                        @if (\App\Photo::where('title', $title->title_first)->count() != 0)
                                                            <div style="overflow: hidden">
                                                                <h3 class="greennature-blog-title"
                                                                    style="text-align: center; font-weight: bold">
                                                                    <a>{{ $title->title_first }}</a>
                                                                </h3>

                                                                <br>

                                                                {{--  ------------------------------------------ Slider ------------------------------------------ --}}



                                                                <div id="carouselExampleIndicators1{{ $id }}"
                                                                    class="carousel slide" data-ride="carousel">
                                                                    {{--                                                        <ol class="carousel-indicators"> --}}
                                                                    {{--                                                            <li data-target="#carouselExampleIndicators1" --}}
                                                                    {{--                                                                data-slide-to="0" --}}
                                                                    {{--                                                                class="active"></li> --}}
                                                                    {{--                                                            <li data-target="#carouselExampleIndicators1{{$id}}" --}}
                                                                    {{--                                                                data-slide-to="1"></li> --}}
                                                                    {{--                                                            <li data-target="#carouselExampleIndicators1{{$id}}" --}}
                                                                    {{--                                                                data-slide-to="2"></li> --}}
                                                                    {{--                                                            <li data-target="#carouselExampleIndicators1{{$id}}" --}}
                                                                    {{--                                                                data-slide-to="3"></li> --}}

                                                                    {{--                                                        </ol> --}}
                                                                    <div class="carousel-inner">

                                                                        <?php $id_2 = 0; ?>
                                                                        @foreach (\App\Photo::where('title', $title->title_first)->get() as $slider_data)
                                                                            <?php $id_2 += 1; ?>

                                                                            @if ($id_2 == 1)
                                                                                <div class="carousel-item active">
                                                                                    <img class="d-block w-100"
                                                                                        src="{{ asset('storage/' . $slider_data->image) }}"
                                                                                        alt="First slide">
                                                                                    <div
                                                                                        class="carousel-caption d-none d-md-block">
                                                                                        <p>{!! $slider_data->content !!}</p>
                                                                                    </div>
                                                                                </div>
                                                                            @else
                                                                                <div class="carousel-item">
                                                                                    <img class="d-block w-100"
                                                                                        src="{{ asset('storage/' . $slider_data->image) }}"
                                                                                        alt="Second slide">
                                                                                    <div
                                                                                        class="carousel-caption d-none d-md-block">
                                                                                        <p>{!! $slider_data->content !!}</p>

                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                        {{--                                                            <div class="carousel-item"> --}}
                                                                        {{--                                                                <img class="d-block w-100" --}}
                                                                        {{--                                                                     src="https://cdn.pixabay.com/photo/2015/04/19/08/32/marguerite-729510__340.jpg" --}}
                                                                        {{--                                                                     alt="Third slide"> --}}
                                                                        {{--                                                                <div class="carousel-caption d-none d-md-block"> --}}
                                                                        {{--                                                                    <p>fsefsefsefsef</p> --}}
                                                                        {{--                                                                </div> --}}
                                                                        {{--                                                            </div> --}}
                                                                    </div>
                                                                    <a class="carousel-control-prev"
                                                                        href="#carouselExampleIndicators1{{ $id }}"
                                                                        role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon"
                                                                            aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next"
                                                                        href="#carouselExampleIndicators1{{ $id }}"
                                                                        role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon"
                                                                            aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>

                                                                {{--  ------------------------------------------ Slider ------------------------------------------ --}}

                                                                <br>

                                                                {{--  ------------------------------------------ Images ------------------------------------------ --}}

                                                                @foreach (\App\Photo::where('title', $title->title_first)->get() as $photo)
                                                                    <div class="three columns">
                                                                        <div
                                                                            class="greennature-item greennature-portfolio-item greennature-classic-portfolio">
                                                                            <div
                                                                                class="greennature-ux greennature-classic-portfolio-ux">
                                                                                <div
                                                                                    class="portfolio-thumbnail greennature-image">
                                                                                    <img src="{{ asset('storage/' . $photo->image) }}"
                                                                                        alt=""
                                                                                        class="photos-style" /><span
                                                                                        class="portfolio-overlay">&nbsp;</span><a
                                                                                        class="portfolio-overlay-icon"
                                                                                        href="{{ asset('storage/' . $photo->image) }}"
                                                                                        data-rel="fancybox"><span
                                                                                            class="portfolio-icon"><i
                                                                                                class="fa fa-search"></i></span></a>
                                                                                </div>
                                                                                <div class="portfolio-classic-content">
                                                                                    <div style="text-align:center">
                                                                                        <p>{{ $photo->title }}</p>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                                {{--  ------------------------------------------ Images ------------------------------------------ --}}
                                                                <br><br>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class="pagination-style">
                                                    {{ $titles->links() }}
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </section>
                            </div>
                            <!-- Below Sidebar Section-->

                        </div>
                        <!-- greennature-content -->
                        <div class="clear"></div>
                    </div>
                    <!-- Below Sidebar Section-->

                </div>
                <!-- greennature-content -->
                <div class="clear"></div>
            </div>
        </section>

        <br> <br> <br><br>


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
    <script src="{{ asset('js/app.js') }}"></script>

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
