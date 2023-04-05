<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="initial-scale=1.0"/>
    <link rel="icon" href="{{ asset('img/logo_new.png') }}" type="image/icon type">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Arannayk Foundation">
    <meta name="description"
          content="Supporting tropical forest conservation activities in Bangladesh. Established through joint initiatives of the US Govt. and Bangladesh Govt. in 2003 as a NPO.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://arannayk.inflexionpointbd.com/">
    <meta property="og:title" content="Arannayk Foundation">
    <meta property="og:description"
          content="Supporting tropical forest conservation activities in Bangladesh. Established through joint initiatives of the US Govt. and Bangladesh Govt. in 2003 as a NPO.">
    <meta property="og:image" content="http://arannayk.org/assets/bg/home-what-we-do.jpg">

    <!-- Twitter -->
    {{--    <meta property="twitter:card" content="summary_large_image">--}}
    {{--    <meta property="twitter:url" content="http://arannayk.org/">--}}
    {{--    <meta property="twitter:title" content="Arannayk Foundation">--}}
    {{--    <meta property="twitter:description" content="Supporting tropical forest conservation activities in Bangladesh. Established through joint initiatives of the US Govt. and Bangladesh Govt. in 2003 as a NPO.">--}}
    {{--    <meta property="twitter:image" content="http://arannayk.org/assets/bg/home-what-we-do.jpg">--}}

    <title>Arannayk - Where We Work</title>

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
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""
    />

    <style>
        #map {
            height: 100vh;
        }

        img.huechange {
            filter: hue-rotate(150deg);
        }
    </style>
</head>

<body>

<!-------------------------------Navigation Starts Here---------------------------------------------------------->

<header class="map-navbar greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">

    <!-------------------------------------------------------------------------
      ------------------------------------------------------------------------
      Top navigation---------------------------------------------------------
    ---------------------------------------------------------------------- -->

    {{--    <x-user.navbar.top-navigation-component></x-user.navbar.top-navigation-component>--}}

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

            {{--            <x-user.navbar.mobile-navbar-component></x-user.navbar.mobile-navbar-component>--}}


            <!-----------------------------------------------------------------
              -----------------------------------------------------------------
              -----------------------------------------------------------------
              -----------------------------Mobile Navbar----------------------->
            {{--            <x-user.navbar.pc-navbar-component></x-user.navbar.pc-navbar-component>--}}

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

<div class="break-tags">

</div>

<div id="map"></div>

<x-user.footer.footer-component></x-user.footer.footer-component>

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


<script>
    function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);
</script>
<script
    src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""
></script>

<script>
    var map = L.map("map").setView([23.7806207, 90.3492859], 7);


    const tileUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

    const attribution =
        "© OpenStreetMap contributors ♥ Make a Donation. Website and API terms";

    const tiles = L.tileLayer(tileUrl, {
        attribution,
    });

    tiles.addTo(map);
    @foreach($maps as $map)
    var marker = L.marker([{{ $map->lat }}, {{ $map->long }}]).bindPopup('<div class="map-hover-link-style" style="font-size: 18px; margin-bottom:1rem;">{{ $map->location }}</div><div style="font-size: 16px;">Total Projects: {{ \App\Project::where('location', 'like', '%' . $map->location . '%')->count() + \App\Archive::where('location', 'like', '%' . $map->location . '%')->count() }}</div> <br><br> <a href="{{ route('viewProjects', $map->location) }}" target="_blank" style="text-decoration: none;" ><button class="map-button-hover" >View Projects</button></a>').addTo(map);
    marker._icon.classList.add("huechange");
    @endforeach
</script>

</body>
</html>

