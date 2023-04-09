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
<link rel="icon" href="{{ asset('img/logo_new.png') }}" type="image/icon type">


    <title>Arannayk - Board Members</title>

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

            <span class="greennature-page-caption">Board Members</span>
            <h1 class="section-heading-title"></h1>
        </div>
    </div>



    <section style="margin-top: 5rem;" class="container">
        <div id="team">
            @foreach($board as $board)

            <div class="card">
                <img src="{{ asset('storage/'.$board->image) }}" alt="" />
                <div class="data">
                    <h2>{{ $board->name }}</h2>
                    <i>{{ $board->position }}</i>
                    <p style="text-align:center;">{{ $board->location }}</p>

                </div>
            </div>
            @endforeach

        </div>
    </section>
    <style>

        h1{
            text-align:center;
            font-size:3em;

        }
        #team{
            display:flex;
            flex-wrap: wrap;
            flex-grow:3;
        }
        .card {
            width:33%;
            min-width: 250px;
            height: 350px;
            overflow: hidden;
            position: relative;
            margin:0 0.5% 1% 0;
            display:inline-block;
            margin-bottom: 3rem;
            color: #000;
        }
        .card:nth-of-type(3n){
            margin-right:0;
        }
        .card img {
            width: 100%;
            min-height:100%;
            transition:all 0.9s;
            object-fit: cover;
        }
        .card:hover img{
            transform:scale(1.2,1.2)
        }
        .data {
            position: absolute;
            /*bottom: 5%;*/
            background: #fff;
            text-align:center;
            width: 90%;
            height: 80px;
            overflow: hidden;
            left: 0;
            right: 0;
            margin: 0 auto;
            padding: 10px 5%;
            box-sizing: border-box;
            opacity: 0.8;
            transition: all 0.4s
        }

        .card:hover .data {
            width: 100%;
            height: 100%;
            bottom: 0;
            opacity: 0.9;
            padding:90px 10%
        }

        .data h2 {
            margin: 0 0 5px 0;
            transition:color 0.4s;
            font-size: 20px;
        }

        .data p {
            opacity: 0;
            text-align:justify;
            transition: all 0.2s
        }

        .card:hover .data p,.card:hover .data a {
            opacity: 1
        }

        .data a{
            color:#000;
            text-decoration:none;
            padding:20px;
            opacity:0
        }
        .data a:hover,.card:hover h2{
            color:#005e5e;
        }
        @media (max-width:1180px){
            .card {
                width:30%;
                height:350px;
                margin-bottom:2rem;
                margin-right:0.5rem;
            margin-left: 0.5rem;}
            .data {
                bottom: 5%;
                height: 65px;
            }
        }
        @media (max-width:959px){
            .card {
                width:45%;
                height:400px;
                margin-bottom:2rem;
                margin-right:0;
             }
            .data {
                bottom: 5%;
                height: 65px;
            }
        }

        @media (max-width:767px){
            .card {width:100%;
                height:300px;
                margin-bottom:2rem;
                margin-right:0}
            .data {
                bottom: 3%;
                height: 90px;
            }
        }

    </style>

{{--    <section id="content-section-1">--}}
{{--        <div class="section-container container">--}}
{{--            <div class="greennature-personnel-item-wrapper" style="margin-bottom: 30px;">--}}
{{--                <div class="clear"></div>--}}
{{--              --}}
{{--                <div class="four columns">--}}
{{--                    <div class="greennature-item greennature-personnel-item plain-style">--}}
{{--                        <div class="greennature-ux greennature-personnel-ux">--}}
{{--                            <div class="personnel-item">--}}
{{--                                <div class="personnel-author-image greennature-skin-border"><img src="{{ asset('storage/'.$board->image) }}" class="team-image" alt="" /></div>--}}
{{--                                <div class="personnel-info">--}}
{{--                                    <div class="personnel-author greennature-skin-title">{{ $board->name }}</div>--}}
{{--                                    <div class="personnel-position greennature-skin-info">{{ $board->position }}</div>--}}
{{--                                    <div class="personnel-position greennature-skin-info">{{ $board->location }}</div><br>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}

{{--                @endforeach--}}




{{--                <div class="clear"></div>--}}
{{--            </div>--}}
{{--            <div class="clear"></div>--}}
{{--        </div>--}}
{{--    </section>--}}

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
