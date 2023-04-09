<div class="greennature-logo">

    <!-------------------- Navbar logo ---------------------------------------->
    <div class="greennature-logo-inner">
        <a href="/">
            <img src="{{ asset('img/logo_new.png') }}" style="height: 70px" alt="" />
        </a>
    </div>
    <!-------------------------------------------------------------  Navbar Logo --------->

    <div class="greennature-responsive-navigation dl-menuwrapper" id="greennature-responsive-navigation">
        <button class="dl-trigger">Open Menu</button>
        <ul id="menu-main-menu" class="dl-menu greennature-main-mobile-menu">
            <li class="menu-item menu-item-home current-menu-item page_item page-item-5680 current_page_item">
                <a href="index.html" aria-current="page"></a>
            </li>
            <li class="menu-item menu-item-has-children menu-item-15">
                <a>Who We Are</a>
                <ul class="dl-submenu">
                    <li class="menu-item">
                        <a href="{{ route('aboutUs') }}">About Arannayk Foundation</a>
                    </li>
                    <li class="menu-item"><a href="{{ route('boardMembers') }}">Board Members</a></li>
                    <li class="menu-item"><a href="{{ route('team') }}">Our Team</a></li>
                    <li class="menu-item"><a href="{{ route('achievements') }}">Our Achievements</a></li>
                    <li class="menu-item"><a href="{{ route('timeline') }}">Timeline</a></li>
                    <li class="menu-item">
                        <a href="{{ route('partners') }}">Our Partners & Donors</a>
                    </li>
                </ul>
            </li>

            <li class="menu-item menu-item-has-children menu-item-15">
                <a>What We Do</a>
                <ul class="dl-submenu">
                    <li class="menu-item"><a href="{{ route('services') }}">Our Services</a></li>
                    <li class="menu-item"><a href="{{ route('projects') }}">Current Projects</a></li>
                    <li class="menu-item"><a href="{{ route('archives') }}">Project Archives</a></li>
                </ul>
            </li>

            <li class="menu-item menu-item-has-children menu-item-15">
                <a href="{{ route('map') }}" target="_blank">Where We Work</a>
            </li>

            <li class="menu-item menu-item-has-children menu-item-15">
                <a>Get Involved</a>
                <ul class="dl-submenu">
                    <li class="menu-item"><a href="{{ route('career') }}">Career</a></li>
                    <li class="menu-item"><a href="{{ route('internship') }}">Internship</a></li>
                    <li class="menu-item"><a href="{{ route('consultancy') }}">Consultancy</a></li>
                    <li class="menu-item"><a href="{{ route('procurement') }}">Procurement</a></li>
                </ul>
            </li>

            <li class="menu-item menu-item-has-children menu-item-15">
                <a>Media Center</a>
                <ul class="dl-submenu">
                    <li class="menu-item"><a href="{{ route('press') }}">Press Release</a></li>
                    <li class="menu-item"><a href="{{ route('activities') }}">Activity Updates</a></li>
                    <li class="menu-item"><a href="{{ route('videos') }}">Video Stories</a></li>
                    <li class="menu-item"><a href="{{ route('media') }}">Media Coverage</a></li>
                    <li class="menu-item"><a href="{{ route('photos') }}">Photos</a></li>
                    <li class="menu-item"><a href="{{ route('blogs') }}">Blogs</a></li>
                </ul>
            </li>

            <li class="menu-item menu-item-has-children menu-item-15">
                <a>Knowledge</a>
                <ul class="dl-submenu">
                    <li class="menu-item">
                        <a href="{{ route('publication') }}">Publications</a>
                    </li>
                    <li class="menu-item"><a href="{{ route('tools') }}">Tools & Data</a></li>
                </ul>
            </li>

            <li class="menu-item menu-item-has-children menu-item-15">
                <a>Thematic Areas</a>
                <ul class="dl-submenu">
                    <li class="menu-item"><a href="{{ route('forest') }}">Forest</a></li>
                    <li class="menu-item"><a href="{{ route('biodiversity') }}">Biodiversity</a></li>
                    <li class="menu-item"><a href="{{ route('climate') }}">Climate Change</a></li>
                    <li class="menu-item"><a href="{{ route('sustainability') }}">Sustainability</a></li>
                    <li class="menu-item"><a href="{{ route('gender') }}">Gender</a></li>

                </ul>
            </li>
            <li class="menu-item menu-item-has-children menu-item-15" style="background-color:#ecb338">
                <a href="{{ route('donate') }}">Donate</a>
            </li>
        </ul>
    </div>
</div>
