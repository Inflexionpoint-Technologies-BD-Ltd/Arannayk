<div>

    <footer class="footer-wrapper">
        <div class="footer-container container">
            <div class="footer-column three columns" id="footer-widget-1">
                <div id="text-5" class="widget widget_text greennature-item greennature-widget">

                    <div class="textwidget">

                        <p>
                            <img src="{{ asset('img/logo_new_footer.png') }}" style="width: 170px" alt=""/>
                        </p>

                    </div>
                </div>
            </div>
            <div class="footer-column three columns" id="footer-widget-2">
                <div id="text-9" class="widget widget_text greennature-item greennature-widget">
                    <h3 class="greennature-widget-title">Contact Info</h3>
                    <div class="clear"></div>
                    <div class="textwidget">
                        <span class="clear"></span><span class="greennature-space"
                                                         style="margin-top: -6px; display: block"></span>

                        {{ \App\Contact::first()->address ?? "Address: 572/K, 6th floor, Wasi Tower, ECB Chattar, Matikata, Dhaka
                        Cantonment, 1206 Dhaka, Dhaka Division, Bangladesh" }}

                        <span class="clear"></span><span class="greennature-space"
                                                         style="margin-top: 10px; display: block"></span>

                        <i class="greennature-icon fa fa-phone"
                           style="vertical-align: middle; color: #fff; font-size: 16px"></i>

                        {{ \App\Contact::first()->phone ?? "+8801913440955" }}

                        <span class="clear"></span><span class="greennature-space"
                                                         style="margin-top: 10px; display: block"></span>


                        <span class="clear"></span><span class="greennature-space"
                                                         style="margin-top: 10px; display: block"></span>

                        <i class="fa-solid fa-envelope"
                           style="vertical-align: middle; color: #fff; font-size: 16px"></i>

                        {{ \App\Contact::first()->email ?? "info@arannayk.org" }}


{{--                        <span class="clear"></span><span class="greennature-space"--}}
{{--                                                         style="margin-top: 10px; display: block"></span>--}}


{{--                        <i class="greennature-icon fa fa-globe"--}}
{{--                           style="vertical-align: middle; color: #fff; font-size: 16px"></i>--}}

{{--                        http://arannayk.org/--}}

                    </div>
                    <br>
                    <p>{{ \App\Contact::first()->rjsc ?? "RJSC : C-550(02)/2003" }}</p>

                </div>
            </div>

            <div class="footer-column three columns" id="footer-widget-4">
                <div id="gdlr-recent-portfolio2-widget-6"
                     class="widget widget_gdlr-recent-portfolio2-widget greennature-item greennature-widget">
                    <h3 class="greennature-widget-title">Quick Links</h3>
                    <div class="clear"></div>
                    <div class="greennature-recent-port2-widget">
                        <div style="margin-bottom: 0.5rem">
                            <a href="{{ route('aboutUs') }}" style="color: #0c0c0c">Who We Are</a>
                        </div>
                        <div style="margin-bottom: 0.5rem">
                            <a href="{{ route('services') }}" style="color: #0c0c0c">What We Do</a>
                        </div>

                        <div style="margin-bottom: 0.5rem">
                            <a href="{{ route('projects') }}" style="color: #0c0c0c">Current Projects</a>
                        </div>

                        <div style="margin-bottom: 0.5rem">
                            <a href="{{ route('publication') }}" style="color: #0c0c0c">Publications</a>
                        </div>
                        <div style="margin-bottom: 0.5rem">
                            <a href="{{ route('terms', ['q' => 1]) }}" style="color: #0c0c0c">Terms & Conditions</a>
                        </div>
                        <div style="margin-bottom: 0.5rem">
                            <a href="{{ route('terms', ['q' => 3]) }}" style="color: #0c0c0c"> Refund Policy </a><br>
                            <a href="{{ route('terms', ['q' => 2]) }}" style="color: #0c0c0c"> Privacy Policy </a>

                        </div>


                        {{--                    <div style="margin-bottom: 0.5rem"> --}}
                        {{--                        <a href="{{ route('contactUs') }}" style="color: #0c0c0c">Contact Us</a> --}}
                        {{--                    </div> --}}

                        <div class="clear"></div>
                    </div>
                </div>
            </div>

            <div class="footer-column three columns" id="footer-widget-4">
                <div class="greennature-stunning-item-ux greennature-ux">
                    <div>
                        <div class="stunning-item-caption greennature-skin-content">
                            <h3 class="greennature-widget-title">Support Us</h3>
                        </div>
                        <a class="stunning-item-button greennature-button large" href="{{ route('donate') }}"
                           style="background-color: #eb681c; color: #000">Donate Now</a><a
                            class="stunning-item-button greennature-button large" href="{{ route('career') }}"
                            style="color: #000">Get
                            Involved</a>
                        {{-- <img src="{{ asset('img/ssl.png') }}" alt="" style="height: 60px;  "> --}}
                    </div>
                </div>
            </div>
            <img src="{{ asset('img/ssl.png') }}" alt="" style="height: 90px; float: left;  ">

            <div class="clear"> </div>

        </div>


        <div class="copyright-wrapper">
            <div class="copyright-container container">
                <div class="copyright-left">
                    <a href="{{ \App\Contact::first()->fb_link ?? "https://www.facebook.com/arannaykfoundation/" }}">
                        <i class="fa-brands fa-facebook"
                            style="
                    vertical-align: middle;
                    color: #bbbbbb;
                    font-size: 20px;
                    margin-right: 8px
                  "></i></a>

                    <a href="{{ \App\Contact::first()->yt_link ?? "https://www.youtube.com/user/Arannayk/videos" }}"><i class="fa-brands fa-youtube"
                            style="
                    vertical-align: middle;
                    color: #bbbbbb;
                    font-size: 20px;
                    margin-right: 8px
                  "></i></a>
                    <a href="{{ \App\Contact::first()->ln_link ?? "https://www.linkedin.com/in/arannayk-foundation-5405ab247" }}"><i class="fa-brands fa-linkedin"
                            style="
                    vertical-align: middle;
                    color: #bbbbbb;
                    font-size: 20px;
                    margin-right: 8px
                  "></i></a>
                    <a href="{{ \App\Contact::first()->flicker_link ?? "https://www.flickr.com/photos/137990726@N07/albums/" }}"><i class="fa-brands fa-flickr"
                            style="
                    vertical-align: middle;
                    color: #bbbbbb;
                    font-size: 20px;
                    margin-right: 8px
                  "></i></a>
                    <a href="{{ \App\Contact::first()->twitter_link ?? "https://twitter.com/Arannayk" }}"><i class="fa-brands fa-x-twitter"
                            style="
                    vertical-align: middle;
                    color: #bbbbbb;
                    font-size: 20px;
                    margin-right: 8px
                  "></i></a>


                </div>
                <div class="copyright-right">
                    Design And Developed by SiS Inflexionpoint (BD) Ltd.
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </footer>
</div>
