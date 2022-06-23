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

    <title>Arannayk - Internship</title>

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


{{--    <div class="greennature-page-title-wrapper header-style-5-title-wrapper">--}}
{{--        <div class="greennature-page-title-overlay"></div>--}}
{{--        <div class="greennature-page-title-container container">--}}
{{--            <span class="greennature-page-caption">Internship</span>--}}
{{--            <h1 class="section-heading-title"></h1>--}}

{{--        </div>--}}
{{--    </div>--}}


    <br> <br> <br> <br> <br>

    <section class="container" style="margin-top:2rem;">
        <div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->
                <div class="above-sidebar-wrapper">
                    <section id="content-section-1">
                        <div class="section-container container eight columns">

                            @if($careers->count() > 0)

                                @foreach($careers as $career)
                                    <div>
                                        <div class="greennature-item greennature-accordion-item style-1"
                                             style="margin-bottom: 60px;">
                                            <div class="accordion-tab active pre-active">
                                                <h4 class="accordion-title"><i
                                                        class="icon-minus"></i><span>{{ $career->title }}</span></h4>
                                                <div class="accordion-content">
                                                    <p>{!! $career->description !!} </p>
                                                    <p>Deadline: {{ $career->deadline }}</p>
                                                    <a class="greennature-button small" href="mailto: jobs@arannayk.org"
                                                       target="_self" style="color:#ffffff; background-color:#f38142; ">Apply</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                @endforeach

                            @else
                                <p>No Job information available</p>

                            @endif
                        </div>
                        <div class="greennature-sidebar greennature-right-sidebar four columns">
                            <div class="greennature-item-start-content sidebar-right-item">
                                <div id="text-7" class="widget widget_text greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Contact Information</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">
                                        <p>Address: 527/K Wasi Tower, ECB Chattar, Matikata, Dhaka Cantonment, 1206
                                            Dhaka, Dhaka Division, Bangladesh </p>
                                        <p><i class="greennature-icon fa fa-phone"
                                              style="vertical-align: middle; color: #444444; font-size: 16px; "></i>
                                            +02-8711240 </p>
                                        <p><i class="greennature-icon fa fa-envelope"
                                              style="vertical-align: middle; color: #444444; font-size: 16px; "></i>
                                            info@arannayk.org</p>
                                        <p><i class="greennature-icon fa fa-clock-o"
                                              style="vertical-align: middle; color: #444444; font-size: 16px; "></i>
                                            Sun-Thu 9:00-17:00</p>
                                    </div>
                                </div>
                                <div id="text-8" class="widget widget_text greennature-item greennature-widget">
                                    <h3 class="greennature-widget-title">Social Media</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget"><a href="">
                                            <i class="greennature-icon fa fa-facebook"
                                               style="vertical-align: middle; color: #444444; font-size: 28px; "></i></a>
                                        <a href=""><i class="greennature-icon fa fa-linkedin"
                                                      style="vertical-align: middle; color: #444444; font-size: 28px; "></i></a>
                                        <a href=""><i class="greennature-icon fa fa-youtube-play"
                                                      style="vertical-align: middle; color: #444444; font-size: 28px; "></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>

                    </section>
                </div>

                <!-- Sidebar With Content Section-->

                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
    </section>

    <br> <br> <br> <br> <br>


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
