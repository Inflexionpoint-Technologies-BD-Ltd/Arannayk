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


    @if (request()->query('q') == 1)
        <title>Refund Terms and Conditions</title>
    @elseif (request()->query('q') == 2)
        <title>Privacy Policy</title>
    @elseif (request()->query('q') == 3)
        <title>Refund Policy</title>
    @else
        <title>Terms & Conditions , Refund Policy & Privacy Policy</title>
    @endif

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
        <!-------------------------------Publications Heading ------------------------------------------------->

        <div class="greennature-page-title-wrapper header-style-5-title-wrapper">
            <div class="greennature-page-title-overlay"></div>
            <div class="greennature-page-title-container container">
                <span class="greennature-page-caption">Terms & Conditions , Refund Policy & Privacy Policy</span>
                <h1 class="section-heading-title"></h1>

            </div>
        </div>

        <!--------------------------------------------------------------Publications Heading ------->

        <!------------------------------Publication Books Section-------------------------------->

        <div class="content-wrapper">
            <div class="greennature-content">

                <div class="with-sidebar-wrapper">
                    <section id="content-section-1">
                        <div class="section-container container">
                            <div class="portfolio-item-wrapper type-classic-portfolio" style="margin-bottom: 20px;">
                                <div class="portfolio-item-holder  greennature-portfolio-column-3">
                                    <div class="greennature-isotope" data-type="portfolio" data-layout="fitRows">
                                        <div class="clear"></div>


                                        @if (request()->query('q') == 1)
                                            <h1>Refund Terms and Conditions</h1>
                                            <p>To request a refund of your donation made to Arannayk Foundation, please
                                                fill
                                                out our contact form and
                                                request a refund within 30 days after the date of making the donation.
                                                Arannayk Foundation will not be
                                                able to refund any donations further than the past 30 days in all
                                                situations.
                                                We can only issue a refund to the same card or account from which the
                                                donation was made using the
                                                payment methods currently available at our website.
                                            </p>
                                        @elseif(request()->query('q') == 2)
                                            <h1>Privacy Policy</h1>
                                            <p>Arannayk Foundation is committed to protecting both personal as well as
                                                business
                                                information you
                                                share and/or store with us. This Privacy Policy applies to transactions
                                                and
                                                activities and data gathered
                                                through our website and interaction you may have with its social media
                                                accounts.
                                                Arannayk Foundation does not collect personally identifiable information
                                                such as
                                                name, e-mail address,
                                                contact or similar information unless you choose to provide it. If you
                                                voluntarily provide us with
                                                personal information, for example by sending an e-mail or by filling out
                                                a
                                                form
                                                and submitting it through
                                                our website, we may use that information only to respond to your message
                                                and
                                                to
                                                help us provide you
                                                with the information or services that you request.
                                            </p>
                                        @elseif(request()->query('q') == 3)
                                            <h1>Refund Policy</h1>
                                            <p>Arannayk Foundation is grateful for your donation and support of our
                                                organization. Donations made to
                                                Arannayk Foundation are nonrefundable. However, we may refund if you
                                                have
                                                accidentally entered the
                                                wrong amount.
                                            </p>

                                            <h1>Requesting a Refund</h1>
                                            <p>If you wish to request for a refund, please fill out our contact form and
                                                provide:</p>
                                            <ul>
                                                <li>Your full name</li>
                                                <li>The email address provided when making the donation</li>
                                                <li>Your country of residence</li>
                                                <li>Your phone number</li>
                                                <li>Date on which the donation was made</li>
                                                <li>The amount of the relevant donation</li>
                                                <li>Payment method, and transaction reference number</li>
                                                <li>All relevant circumstances justifying your request</li>
                                            </ul>
                                            <p>Upon receipt we will review your request and endeavor to respond to you
                                                within
                                                ten working days. If
                                                the request is accepted, we will process the refund as soon as possible.
                                                Please
                                                note that it may take
                                                7 to 10 working days until a refund reaches your account.
                                            </p>
                                        @else
                                            <h1>Refund Policy</h1>
                                            <p>Arannayk Foundation is grateful for your donation and support of our
                                                organization. Donations made to
                                                Arannayk Foundation are nonrefundable. However, we may refund if you
                                                have
                                                accidentally entered the
                                                wrong amount.
                                            </p>

                                            <h1>Refund Terms and Conditions</h1>
                                            <p>To request a refund of your donation made to Arannayk Foundation, please
                                                fill
                                                out our contact form and
                                                request a refund within 30 days after the date of making the donation.
                                                Arannayk Foundation will not be
                                                able to refund any donations further than the past 30 days in all
                                                situations.
                                                We can only issue a refund to the same card or account from which the
                                                donation was made using the
                                                payment methods currently available at our website.
                                            </p>

                                            <h1>Requesting a Refund</h1>
                                            <p>If you wish to request for a refund, please fill out our contact form and
                                                provide:</p>
                                            <ul>
                                                <li>Your full name</li>
                                                <li>The email address provided when making the donation</li>
                                                <li>Your country of residence</li>
                                                <li>Your phone number</li>
                                                <li>Date on which the donation was made</li>
                                                <li>The amount of the relevant donation</li>
                                                <li>Payment method, and transaction reference number</li>
                                                <li>All relevant circumstances justifying your request</li>
                                            </ul>
                                            <p>Upon receipt we will review your request and endeavor to respond to you
                                                within
                                                ten working days. If
                                                the request is accepted, we will process the refund as soon as possible.
                                                Please
                                                note that it may take
                                                7 to 10 working days until a refund reaches your account.
                                            </p>

                                            <h1>Privacy Policy</h1>
                                            <p>Arannayk Foundation is committed to protecting both personal as well as
                                                business
                                                information you
                                                share and/or store with us. This Privacy Policy applies to transactions
                                                and
                                                activities and data gathered
                                                through our website and interaction you may have with its social media
                                                accounts.
                                                Arannayk Foundation does not collect personally identifiable information
                                                such as
                                                name, e-mail address,
                                                contact or similar information unless you choose to provide it. If you
                                                voluntarily provide us with
                                                personal information, for example by sending an e-mail or by filling out
                                                a
                                                form
                                                and submitting it through
                                                our website, we may use that information only to respond to your message
                                                and
                                                to
                                                help us provide you
                                                with the information or services that you request.
                                            </p>
                                        @endif


                                    </div>
                                    <div class="clear"></div>
                                    <div class="clear"></div>
                                    <div class="pagination-style">

                                    </div>

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
        <!-- content wrapper -->
        <!---------------------------------------------------------Publication Books Section-------->

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
