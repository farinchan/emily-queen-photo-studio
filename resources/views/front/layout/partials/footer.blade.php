<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget office-widget wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h4>Studio</h4>
                        <ul class="location-list">
                            <li>
                                {{ $setting_web->address }}
                            </li>
                            <li><a href="mailto:{{ $setting_web->email }}?Subject=Halo%20{{ $setting_web->name }}">{{ $setting_web->email }}</a></li>
                            <li><a href="tel:{{ $setting_web->phone }}">{{ $setting_web->phone }}</a></li>
                        </ul>
                        <!-- Social Box -->
                        <ul class="social-box">

                            <li class="instagram">
                                <a href="https://www.instagram.com/" class="icofont-instagram"></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" class="icofont-twitter"></a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/" class="icofont-tiktok"></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" class="icofont-linkedin"></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget logo-widget wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="logo">
                            <a href="{{ route("front.index") }}"><img src="{{ asset("ext_image/logo_color.png") }}" style="width: 250px;"
                                 alt="" /></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget twitter-widget wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h4>twitter</h4>
                        <div class="tweet">
                            Looking for a Creative PSD Template? <br> It here: <a href="#">
                                https://tf.net/OAWS890a</a><br>
                            <div class="post-date">2 days ago</div>
                        </div>
                        <div class="tweet">
                            You need an image stock <br> It here: <a href="#"> https://uph.com/567AW1</a><br>
                            <div class="post-date">4 days ago</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="auto-container">
            <div class="copyright">Copyright ©
                <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
                <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script> <span class="text-black"> {{ $setting_web->name }}</span> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
