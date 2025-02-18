<section id="bottom-sidebar">
    <div class="container">
        <div class="row normal-sidebar">
        </div>
    </div>
</section>
<footer class="dark-div main-color-2-bg">
    <section id="bottom">
        <div class="section-inner">
            <div class="container">
                <div class="row normal-sidebar">
                    <div id="divider-6" class=" col-md-3  widget divider_widget">
                        <div class=" widget-inner">
                            <div class="un-heading un-separator">
                                <div class="un-heading-wrap">
                                    <span class="un-heading-line un-heading-before"><span></span></span>
                                    <a href="#"
                                       class="btn btn-default btn-lg btn-lighter un-heading-content">
                                        ENROLL TODAY &nbsp;<i class="fa fa-angle-right"></i>
                                    </a>
                                    <span class="un-heading-line un-heading-after"><span></span></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div id="nav_menu-11" class=" col-md-3  widget widget_nav_menu">
                        <div class=" widget-inner"><h2 class="widget-title maincolor1">ABOUT UNIVERSITY</h2>
                            <div class="menu-law-business-container">
                                <p>
                                    <img style="width: 120px;" src="{{asset('img/logo.png')}}"> <br/>
                                    {{$general_settings->system_name}} <br/>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="nav_menu-7" class=" col-md-3  widget widget_nav_menu">
                        <div class=" widget-inner"><h2 class="widget-title maincolor1">LINKS</h2>
                            <div class="menu-engineering-container">
                                <ul id="menu-engineering" class="menu">
                                    <li id="menu-item-1290"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1290">
                                        <a href="#">About Us</a></li>
                                    <li id="menu-item-1289"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1289">
                                        <a href="#">Contact Us</a></li>
                                    <li id="menu-item-1292"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1292">
                                        <a href="#">Register Office</a></li>
                                    <li id="menu-item-1291"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1291">
                                        <a href="#">Support</a></li>
                                    <li id="menu-item-1287"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1287">
                                        <a href="#">Terms & Conditions</a></li>
                                    <li id="menu-item-1288"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1288">
                                        <a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="nav_menu-8" class=" col-md-3  widget widget_nav_menu">
                        <div class=" widget-inner"><h2 class="widget-title maincolor1">TECHNOLOGY</h2>
                            <div class="menu-higher-education-container">
                                @php
                                    $footer_dept = collect($manage_department)->unique('department_code');
                                @endphp
                                <ul id="menu-higher-education" class="menu">
                                    @foreach($footer_dept as $value)
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom">{{$value['department_name']}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="text-14" class=" col-md-3 border widget widget_text">
                        <div class=" widget-inner"><h2 class="widget-title maincolor1">CONTACT</h2>
                            <div class="textwidget">
                                <p><i class="fas fa-map-maker"></i>&nbsp;{{$general_settings->address}}</p>
                                <p><i class="fas fa-phone"></i>&nbsp;{{$general_settings->Phone}}</p>
                                <p>Email: zhsust.campus@gmail.com</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="bottom-nav">
        <div class="container">
            <div class="text-center line-under">
                <a class="btn btn-default main-color-2-bg back-to-top" href="#top">TOP</a>

            </div>
            <div class="row footer-content">
                <div class="copyright col-md-6">
                    © 2020 Nice Software. All rights reserved.
                </div>
                <nav class="col-md-6 footer-social">
                    <ul class="list-inline pull-right social-list">
                        <li><a href="https://www.facebook.com/cactustheme/"
                               class="btn btn-default social-icon"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="btn btn-default social-icon"><i
                                        class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="btn btn-default social-icon"><i
                                        class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="btn btn-default social-icon"><i
                                        class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="btn btn-default social-icon"><i
                                        class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="btn btn-default social-icon"><i class="fa "></i></a></li>
                    </ul>
                </nav>
            </div><!--/row-->
        </div><!--/container-->
    </div>
</footer>