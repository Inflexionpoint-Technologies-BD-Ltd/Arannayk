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

    <title>Arannayk - Services</title>

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
            <span class="greennature-page-caption">Our Services</span>
            <h1 class="section-heading-title"></h1>

        </div>
    </div>


    <section id="content-section-3">
        <div class="greennature-color-wrapper  gdlr-show-all no-skin" style="background-color: #f3f3f3; ">
            <div class="container">
                <div class="six columns">
                    <div class="greennature-video-item greennature-item">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/lN-QMt0BB0A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="six columns">
                    <div class="greennature-item greennature-about-us-item greennature-normal">
                        <div class="about-us-title-wrapper">
                            <h3 class="about-us-title">What We Do?</h3>
                            <div class="about-us-caption greennature-title-font greennature-skin-info"></div>
                            <div class="about-us-title-divider"></div>
                        </div>
                        <div class="about-us-content-wrapper">
                            <div class="about-us-content greennature-skin-content">
                                <p>AF has so far provided 150 grants to different organizations
                                    including NGOs,
                                    government agencies and academic institutions for conservation and restoration of
                                    forests of Bangladesh. The major areas of interventions include...</p>
                            </div>
                            <a class="button-hover" href="{{ route('aboutUs') }}">Learn More</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section id="content-section-2">
        <div class="greennature-color-wrapper  gdlr-show-all greennature-skin-light-grey"
             style="background-color: #fff; padding-bottom: 15px; ">
            <div class="container">
                {{--                <p class="services-page-subheading">AF has so far provided 150 grants to different organizations--}}
                {{--                    including NGOs,--}}
                {{--                    government agencies and academic institutions for conservation and restoration of--}}
                {{--                    forests of Bangladesh. The major areas of interventions include:</p>--}}
               @foreach($services as $service)
                <div>
                    <div class="greennature-ux column-service-ux">
                        <div class="greennature-item greennature-column-service-item greennature-type-1"
                             style="margin-bottom: 30px;">
                            <div class="column-service-image"><img src="{{ asset('storage/'.$service->icon) }}" alt="" width="40"
                                                                   height="40"/></div>
                            <div class="column-service-content-wrapper">

                                <h3 class="column-service-title hover-link-style" >{{ $service->title }}</h3>



                                <div class="column-service-content greennature-skin-content" style="font-size: 14px;">
                                    <p>{!! $service->content !!} </p>
                                </div>
{{--                                <a class="column-service-read-more" href="#">Read More</a>--}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="four columns">--}}
{{--                    <div class="greennature-ux column-service-ux">--}}
{{--                        <div class="greennature-item greennature-column-service-item greennature-type-1"--}}
{{--                             style="margin-bottom: 45px;">--}}
{{--                            <div class="column-service-image"><img src="{{ asset('./upload/icon-2-2.png') }}" alt=""--}}
{{--                                                                   width="40" height="40"/></div>--}}
{{--                            <div class="column-service-content-wrapper">--}}
{{--                                <h3 class="column-service-title">Community based forest management project</h3>--}}
{{--                                <div class="column-service-content greennature-skin-content">--}}
{{--                                    <p>Involving ethnic--}}
{{--                                        communities of Chittagong Hill Tracts (CHT), improved conservation--}}
{{--                                        and restoration of village common forests (VCF) and restored denuded--}}
{{--                                        hills.</p>--}}
{{--                                </div>--}}
{{--                                <a class="column-service-read-more" href="#">Read More</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="four columns">--}}
{{--                    <div class="greennature-ux column-service-ux">--}}
{{--                        <div class="greennature-item greennature-column-service-item greennature-type-1"--}}
{{--                             style="margin-bottom: 45px;">--}}
{{--                            <div class="column-service-image"><img src="{{ asset('./upload/icon-2-3.png') }}" alt="" width="40"--}}
{{--                                                                   height="40"/></div>--}}
{{--                            <div class="column-service-content-wrapper">--}}
{{--                                <h3 class="column-service-title">Conservation of swamp forests</h3>--}}
{{--                                <div class="column-service-content greennature-skin-content">--}}
{{--                                    <p>Involving local communities improved conservation of swamp forests in--}}
{{--                                        the Haor region.</p>--}}
{{--                                </div>--}}
{{--                                <a class="column-service-read-more" href="#">Read More</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="clear"></div>

{{--                <div class="four columns">--}}
{{--                    <div class="greennature-ux column-service-ux">--}}
{{--                        <div class="greennature-item greennature-column-service-item greennature-type-1"--}}
{{--                             style="margin-bottom: 45px;">--}}
{{--                            <div class="column-service-image"><img src="{{ asset('./upload/icon-2-4.png') }}" alt="" width="40"--}}
{{--                                                                   height="40"/></div>--}}
{{--                            <div class="column-service-content-wrapper">--}}
{{--                                <h3 class="column-service-title">Supporting nurseries</h3>--}}
{{--                                <div class="column-service-content greennature-skin-content">--}}
{{--                                    <p>Through supporting nurseries all over the country, promoted production--}}
{{--                                        and marketing of endangered native tree species.</p>--}}
{{--                                </div>--}}
{{--                                <a class="column-service-read-more" href="#">Read More</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="four columns">--}}
{{--                    <div class="greennature-ux column-service-ux">--}}
{{--                        <div class="greennature-item greennature-column-service-item greennature-type-1"--}}
{{--                             style="margin-bottom: 45px;">--}}
{{--                            <div class="column-service-image"><img src="{{ asset('./upload/icon-2-5.png') }}" alt="" width="40"--}}
{{--                                                                   height="40"/></div>--}}
{{--                            <div class="column-service-content-wrapper">--}}
{{--                                <h3 class="column-service-title">Biodiversity monitoring</h3>--}}
{{--                                <div class="column-service-content greennature-skin-content">--}}
{{--                                    <p>Biodiversity monitoring (flora and fauna) in--}}
{{--                                        different protected areas and reserve forests for supporting--}}
{{--                                        management strategies.</p>--}}
{{--                                </div>--}}
{{--                                <a class="column-service-read-more" href="#">Read More</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="four columns">--}}
{{--                    <div class="greennature-ux column-service-ux">--}}
{{--                        <div class="greennature-item greennature-column-service-item greennature-type-1"--}}
{{--                             style="margin-bottom: 45px;">--}}
{{--                            <div class="column-service-image"><img src="{{ asset('./upload/icon-2-6.png') }}" alt="" width="40"--}}
{{--                                                                   height="40"/></div>--}}
{{--                            <div class="column-service-content-wrapper">--}}
{{--                                <h3 class="column-service-title">Alternative Livelihood of forest dependent people</h3>--}}
{{--                                <div class="column-service-content greennature-skin-content">--}}
{{--                                    <p>Organizing the forest--}}
{{--                                        dependent people living in and around the forest area for local forest--}}
{{--                                        conservation through skill development for alternative livelihood,--}}
{{--                                        establishing revolving loan fund and institutionalizing their groups.</p>--}}
{{--                                </div>--}}
{{--                                <a class="column-service-read-more" href="#">Read More</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="clear"></div>

{{--                <div class="four columns">--}}
{{--                    <div class="greennature-ux column-service-ux">--}}
{{--                        <div class="greennature-item greennature-column-service-item greennature-type-1"--}}
{{--                             style="margin-bottom: 45px;">--}}
{{--                            <div class="column-service-image"><img src="{{ asset('./upload/icon-2-2.png') }}" alt="" width="40"--}}
{{--                                                                   height="40"/></div>--}}
{{--                            <div class="column-service-content-wrapper">--}}
{{--                                <h3 class="column-service-title">Climate Change Risk Management</h3>--}}
{{--                                <div class="column-service-content greennature-skin-content">--}}
{{--                                    <p>Creating public awareness on--}}
{{--                                        climate change risk and adaptation strategies in the CHT and the--}}
{{--                                        coastal areas, reducing carbon emission etc.</p>--}}
{{--                                </div>--}}
{{--                                <a class="column-service-read-more" href="#">Read More</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section id="content-section-5">
        <div class="greennature-color-wrapper  gdlr-show-all no-skin"
             style="background-color: #f3f3f3; padding-top: 85px; padding-bottom: 62px; ">
            <div class="container">
                <div class="greennature-stunning-item-ux greennature-ux">
                    <div class="greennature-item greennature-stunning-item greennature-stunning-center">
                        <h2 class="stunning-item-title">The only way to make this happened is to take action!</h2>
                        <div class="stunning-item-caption greennature-skin-content">
                            <p></p>
                        </div>
                        <a class="stunning-item-button greennature-button large" href="{{ route('donate') }}"
                           style="background-color: #fec428; color: #fff;">Donate Now!</a><a
                            class="stunning-item-button greennature-button large" style="color: #fff;" href="{{ route('career') }}">Get Involved</a></div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
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
