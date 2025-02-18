@extends('website.index')
@section('website_main_section')
    <div id="body">
        <div class="row" style="height:10px">
            <div class="col-md-12">
                <marquee width="100%" direction="left" height="25px" style="color:red; font-size: 15px">
                    The website is under development. In case of emergencies, please contact on +8801313760750
                </marquee>
            </div>
        </div>
        <div class="row">
            <div id="content" class="col-md-12" role="main">
                <article class="single-page-content">
                    <div id="slider" class="header-bg-rev header-content-scroller">
                        <div class="cactus-rev-slider-default">
                            <link href="http://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet"
                                  property="stylesheet" type="text/css" media="all">
                            <div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                                 data-source="gallery" style="background:#E9E9E9;padding:0px;">
                                <div class="co-lg-12 sixteen columns">
                                    <div class="callbacks_container" style="box-shadow: 0 1px 5px #999999;">
                                        <ul class="rslides callbacks callbacks1" id="front-image-slider" style="max-width: 100%;">

                                            @foreach($fixed_slider as $key => $slider_value)
                                                <li id="callbacks1_s{{$key}}" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 2000ms ease-in-out 0s;">

                                                    <img src="{{asset($slider_value->image)}}" title="{{$slider_value->title}}" alt="Baner1" width="" height="800" style="height: 800px;">

                                                </li>
                                        @endforeach
                                        <!-- <li id="callbacks1_s1" style="float: left; position: relative; opacity: 1; z-index: 2; display: list-item; transition: opacity 2000ms ease-in-out 0s;" class="callbacks1_on">

                        <img src="{{asset('website/index_files/Kormoshala1.jpg')}}" alt="Kormoshala1" width="960" height="220">

                    </li>
                    <li id="callbacks1_s2" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 2000ms ease-in-out 0s;" class="">

                        <img src="{{asset('website/index_files/APA.jpg')}}" alt="APA" width="960" height="220">

                    </li> -->
                                        </ul><a href="#" class="callbacks_nav callbacks1_nav prev">Previous</a><a href="http://bteb.portal.gov.bd/#" class="callbacks_nav callbacks1_nav next">Next</a>
                                    </div>

                                    <div class="header-site-info displaynone" id="header-site-info">

                                        <div id="logo">
                                            <a href="/frontend">
                                                <img alt="logo" src="{{asset('img/logo.png')}}">
                                            </a>
                                        </div>
                                        <div class="clearfix" id="site-name-wrapper">
                        <span id="site-name" class="displaynone">
                            <a title="{{$general_settings->system_name}}" href="#">{{$general_settings->system_name}}</a>
                        </span>
                                            <span id="slogan" class="displaynone">{{$general_settings->address}}</span>
                                        </div>

                                        <!-- /header-site-info-inner -->
                                    </div>
                                </div>
                                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                                {{--<div id="rev_slider_3_1" class="rev_slider fullscreenbanner" style="display:none;"
                                     data-version="5.4.1">
                                    <ul>    <!-- SLIDE  -->
                                        <li data-index="rs-5" data-transition="fade" data-slotamount="7"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-thumb="{{asset('theme/cactusthemes/wp-content/uploads/2014/10/Sliderv1-005-100x50.jpg')}}"
                                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                            data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                            data-param7="" data-param8="" data-param9="" data-param10=""
                                            data-description="">
                                            <!-- MAIN IMAGE -->
                                            <img src="{{asset('theme/cactusthemes/wp-content/uploads/2014/10/Sliderv1-005.jpg')}}"
                                                 alt="" title="Sliderv1-005" width="2000" height="1000"
                                                 data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"
                                                 class="rev-slidebg" data-no-retina>
                                            <!-- LAYERS -->

                                            <!-- LAYER NR. 1 -->
                                            <div class="tp-caption big_black_222   tp-resizeme"
                                                 id="slide-5-layer-1"
                                                 data-x="100"
                                                 data-y="100"
                                                 data-width="auto"
                                                 data-height="auto"

                                                 data-type="text"
                                                 data-responsive_offset="on"

                                                 data-frames='[{"from":"y:-50px;opacity:0;","speed":300,"to":"","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]'
                                                 data-textAlign="['','','','']"

                                                 style="z-index: 5; white-space: nowrap;text-transform:left;">
                                                <div class="text-r-silder">
                                                    <div class="r-title main-color-1 font-2">For A Better Education Theme
                                                    </div>
                                                    <div class="r-content">Search no more! What you ever want for an
                                                        education website is here
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- SLIDE  -->
                                        <li data-index="rs-7" data-transition="fade" data-slotamount="7"
                                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                            data-easeout="default" data-masterspeed="300"
                                            data-thumb="{{asset('theme/cactusthemes/wp-content/uploads/2014/10/002-100x50.jpg')}}"
                                            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                            data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                            data-param7="" data-param8="" data-param9="" data-param10=""
                                            data-description="">
                                            <!-- MAIN IMAGE -->
                                            <img src="{{asset('theme/cactusthemes/wp-content/uploads/2014/10/002.jpg')}}"
                                                 alt="" title="002" width="1920" height="1280" data-bgposition="center top"
                                                 data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                                                 data-no-retina>
                                            <!-- LAYERS -->

                                            <!-- LAYER NR. 2 -->
                                            <div class="tp-caption big_black_222   tp-resizeme"
                                                 id="slide-7-layer-2"
                                                 data-x="100"
                                                 data-y="100"
                                                 data-width="auto"
                                                 data-height="auto"

                                                 data-type="text"
                                                 data-responsive_offset="on"

                                                 data-frames='[{"from":"y:-50px;opacity:0;","speed":300,"to":"","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]'
                                                 data-textAlign="['','','','']"

                                                 style="z-index: 6; white-space: nowrap;text-transform:left;">
                                                <div class="text-r-silder">
                                                    <div class="r-title main-color-1 font-2">Best Campus Facility In The
                                                        World
                                                    </div>
                                                    <div class="r-content">We offer the best infrastructure to give you the
                                                        best opportunities and comfort during your study.
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                        var htmlDivCss = "";
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement("div");
                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                </div>
                                <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                    var htmlDivCss = ".tp-caption.big_black_222,.big_black_222{font-size:64px;line-height:75px;font-weight:700;font-family:Roboto;color:#ffffff;text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none}";
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement("div");
                                        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                    }
                                </script>
                                <script type="text/javascript">
                                    /******************************************
                                     -    PREPARE PLACEHOLDER FOR SLIDER    -
                                     ******************************************/

                                    var setREVStartSize = function () {
                                        try {
                                            var e = new Object, i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0,
                                                f = 0, s = 0, h = 0;
                                            e.c = jQuery('#rev_slider_3_1');
                                            e.gridwidth = [1140];
                                            e.gridheight = [800];

                                            e.sliderLayout = "fullscreen";
                                            e.fullScreenAutoWidth = 'off';
                                            e.fullScreenAlignForce = 'off';
                                            e.fullScreenOffsetContainer = '#top-nav, #main-nav';
                                            e.fullScreenOffset = '';
                                            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                                                f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                                            }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                                                var u = (e.c.width(), jQuery(window).height());
                                                if (void 0 != e.fullScreenOffsetContainer) {
                                                    var c = e.fullScreenOffsetContainer.split(",");
                                                    if (c) jQuery.each(c, function (e, i) {
                                                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                                                }
                                                f = u
                                            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                                            e.c.closest(".rev_slider_wrapper").css({height: f})

                                        } catch (d) {
                                            console.log("Failure at Presize of Slider:" + d)
                                        }
                                    };

                                    setREVStartSize();

                                    var tpj = jQuery;
                                    tpj.noConflict();
                                    var revapi3;
                                    tpj(document).ready(function () {
                                        if (tpj("#rev_slider_3_1").revolution == undefined) {
                                            revslider_showDoubleJqueryError("#rev_slider_3_1");
                                        } else {
                                            revapi3 = tpj("#rev_slider_3_1").show().revolution({
                                                sliderType: "standard",
                                                jsFileLocation: "//university.cactusthemes.com/wp-content/plugins/revslider/public/assets/js/",
                                                sliderLayout: "fullscreen",
                                                dottedOverlay: "none",
                                                delay: 10000,
                                                navigation: {
                                                    keyboardNavigation: "off",
                                                    keyboard_direction: "horizontal",
                                                    mouseScrollNavigation: "off",
                                                    mouseScrollReverse: "default",
                                                    onHoverStop: "off",
                                                    touch: {
                                                        touchenabled: "on",
                                                        touchOnDesktop: "off",
                                                        swipe_threshold: 0.7,
                                                        swipe_min_touches: 1,
                                                        swipe_direction: "horizontal",
                                                        drag_block_vertical: false
                                                    }
                                                    ,
                                                    arrows: {
                                                        style: "hesperiden",
                                                        enable: true,
                                                        hide_onmobile: false,
                                                        hide_onleave: false,
                                                        tmp: '',
                                                        left: {
                                                            h_align: "left",
                                                            v_align: "center",
                                                            h_offset: 20,
                                                            v_offset: 0
                                                        },
                                                        right: {
                                                            h_align: "right",
                                                            v_align: "center",
                                                            h_offset: 20,
                                                            v_offset: 0
                                                        }
                                                    }
                                                },
                                                visibilityLevels: [1240, 1024, 778, 480],
                                                gridwidth: 1140,
                                                gridheight: 800,
                                                lazyType: "none",
                                                shadow: 0,
                                                spinner: "spinner0",
                                                stopLoop: "off",
                                                stopAfterLoops: -1,
                                                stopAtSlide: -1,
                                                shuffle: "off",
                                                autoHeight: "off",
                                                fullScreenAutoWidth: "off",
                                                fullScreenAlignForce: "off",
                                                fullScreenOffsetContainer: "#top-nav, #main-nav",
                                                fullScreenOffset: "",
                                                disableProgressBar: "on",
                                                hideThumbsOnMobile: "off",
                                                hideSliderAtLimit: 0,
                                                hideCaptionAtLimit: 0,
                                                hideAllCaptionAtLilmit: 0,
                                                debugMode: false,
                                                fallbacks: {
                                                    simplifyAll: "off",
                                                    nextSlideOnWindowFocus: "off",
                                                    disableFocusListener: false,
                                                }
                                            });
                                        }
                                    });	/*ready*/
                                </script>
                                <script>
                                    var htmlDivCss = unescape(".hesperiden.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A100%3B%0A%20%20%20%20border-radius%3A%2050%25%3B%0A%7D%0A.hesperiden.tparrows%3Ahover%20%7B%0A%09background%3Argba%280%2C%200%2C%200%2C%201%29%3B%0A%7D%0A.hesperiden.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%22revicons%22%3B%0A%09font-size%3A20px%3B%0A%09color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A.hesperiden.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce82c%22%3B%0A%20%20%20%20margin-left%3A-3px%3B%0A%7D%0A.hesperiden.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce82d%22%3B%0A%20%20%20%20margin-right%3A-3px%3B%0A%7D%0A");
                                    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                    if (htmlDiv) {
                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                    } else {
                                        var htmlDiv = document.createElement('div');
                                        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                    }
                                </script>--}}
                            </div><!-- END REVOLUTION SLIDER --></div>
                        <div class="header-overlay-content header-overlay-scroller">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <section class="un-post-scroller un-post-scroller-6479 " data-delay=0>
                                            <div class="section-inner-no-padding">
                                                <div class="post-scroller-wrap">
                                                    <div class="post-scroller-carousel" data-next='.post-scroller-down'
                                                         data-prev='.post-scroller-up'>
                                                        <div class="post-scroller-carousel-inner">
                                                            <div class=" post-scroller-item">
                                                                <div class="scroller-item-inner">
                                                                    <div class="scroller-item-content post-item-mini">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 right-side-bar" id="right-content">
                                                                                <!-- <div class="column block">
                                                                                    <h5 class="bk-org title">About Sikdar University</h5>
                                                                                    <p class="imgcenterofficehead">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-content/uploads/2015/08/iStock_000027500935_Large-150x150.jpg')}}" width="100" height=""></p>
                                                                                    <p style="text-align: center;">
                                                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                                                    </p>
                                                                                </div> -->
                                                                                @foreach($our_management as $value)
                                                                                    <div class="column block">
                                                                                        <h5 class="bk-org title">
                                                                                            <p style="color: #fff !Important;">{{$value['designation']}}</p>
                                                                                        </h5>
                                                                                        <p class="imgcenterofficehead">
                                                                                            <img src="{{asset($value['image'])}}" alt="$value->image" width="100" height=""></p>
                                                                                        <p style="text-align: center;">{{$value['name']}}</p>
                                                                                    </div>
                                                                                @endforeach
                                                                                <div class="column block">
                                                                                    <h5 class="bk-org title">Features</h5>
                                                                                    <ul>
                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a href="/frontend/principal_message">Principal's Message</a></li>

                                                                                        <!-- <li><i class="fas fa-caret-right"></i>&nbsp;<a href="#">Vice Principal's Message</a></li> -->

                                                                                        <!-- <li><i class="fas fa-caret-right"></i>&nbsp;<a href="#">Present Principal information</a></li> -->

                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a href="/frontend/faculties/staff_info/Office">Office Staff</a></li>

                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a href="#">Academic Information</a></li>

                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a href="/frontend/gallery">Gallery</a></li>

                                                                                        <!-- <li><i class="fas fa-caret-right"></i>&nbsp;<a href="#">Video Gallery</a></li> -->

                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a href="/frontend/online-admission">Online Admission</a></li>

                                                                                        <!-- <li><i class="fas fa-caret-right"></i>&nbsp;<a href="#">Megazine</a></li>
                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a href="#">Curriculum</a></li>
                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a href="#">Scout</a></li>
                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a href="#">Cultural practices</a></li>
                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a href="#">About Hostels</a></li> -->
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="column block">
                                                                                    <h5 class="bk-org title">Important Links</h5>
                                                                                    <ul>
                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a target="_blank" href="https://moedu.gov.bd/">Ministry of Education</a></li>

                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a target="_blank" href="http://www.bteb.gov.bd/">Bangladesh Technical Education Board (BTEB)</a></li>

                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a target="_blank" href="http://www.techedu.gov.bd/"> Directorate of Technical Education (DTE)</a></li>

                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a target="_blank" href="https://www.tmss-bd.org/"> TMSS</a></li>

                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a target="_blank" href="https://www.tmss-ict.com/">TMSS-ICT</a></li>

                                                                                        <li><i class="fas fa-caret-right"></i>&nbsp;<a target="_blank" href="http://www.pundrouniversity.edu.bd/">Pundra University of Science & Technology (PUST)</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="displaynone row">
                                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                                <div class="item-thumbnail">
                                                                                    <a href="video-post/index.html"
                                                                                       title="Your Career Starts Here">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-content/uploads/2015/08/iStock_000027500935_Large-150x150.jpg')}}"
                                                                                             width="150" height="150"
                                                                                             title="Your Career Starts Here"
                                                                                             alt="Your Career Starts Here">
                                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                                <h4>
                                                                                    <a class="post-title-mini main-color-1-hover"
                                                                                       href="video-post/index.html"
                                                                                       title="Your Career Starts Here">Your
                                                                                        Career Starts Here</a></h4>
                                                                                <div class="post-excerpt-mini">On the other
                                                                                    hand we denounce with righteous
                                                                                    indignation and dislike men who are so
                                                                                    beguiled and demoralized.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--/post-item-mini-->
                                                                </div>
                                                            </div><!--/post-scroller-item-->
                                                            <div class="displaynone post-scroller-item">
                                                                <div class="scroller-item-inner">
                                                                    <div class="scroller-item-content post-item-mini">
                                                                        <div class="row">
                                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                                <div class="item-thumbnail">
                                                                                    <a href="gallery-post/index.html"
                                                                                       title="Spark Of Genius">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-content/uploads/2014/06/University-blog-001-150x150.jpg')}}"
                                                                                             width="150" height="150"
                                                                                             title="Spark Of Genius"
                                                                                             alt="Spark Of Genius">
                                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                                <h4>
                                                                                    <a class="post-title-mini main-color-1-hover"
                                                                                       href="gallery-post/index.html"
                                                                                       title="Spark Of Genius">Spark Of
                                                                                        Genius</a></h4>
                                                                                <div class="post-excerpt-mini">To take a
                                                                                    trivial example which of us ever
                                                                                    undertakes laborious physical exercise
                                                                                    except.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--/post-item-mini-->
                                                                </div>
                                                            </div><!--/post-scroller-item-->
                                                            <div class="displaynone post-scroller-item">
                                                                <div class="scroller-item-inner">
                                                                    <div class="scroller-item-content post-item-mini">
                                                                        <div class="row">
                                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                                <div class="item-thumbnail">
                                                                                    <a href="the-highest-ranked-university/index.html"
                                                                                       title="University Ranking">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-content/uploads/2014/05/University-blog-003-150x150.jpg')}}"
                                                                                             width="150" height="150"
                                                                                             title="University Ranking"
                                                                                             alt="University Ranking">
                                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                                <h4>
                                                                                    <a class="post-title-mini main-color-1-hover"
                                                                                       href="the-highest-ranked-university/index.html"
                                                                                       title="University Ranking">University
                                                                                        Ranking</a></h4>
                                                                                <div class="post-excerpt-mini">Some People
                                                                                    and Students in front of the new and
                                                                                    futuristic building of the University of
                                                                                    Economics and Business in Vienna.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--/post-item-mini-->
                                                                </div>
                                                            </div><!--/post-scroller-item-->
                                                            <div class="displaynone post-scroller-item">
                                                                <div class="scroller-item-inner">
                                                                    <div class="scroller-item-content post-item-mini">
                                                                        <div class="row">
                                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                                <div class="item-thumbnail">
                                                                                    <a href="our-new-campus/index.html"
                                                                                       title="Our New Campus">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-content/uploads/2014/05/003-150x150.jpg')}}"
                                                                                             width="150" height="150"
                                                                                             title="Our New Campus"
                                                                                             alt="Our New Campus">
                                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                                <h4>
                                                                                    <a class="post-title-mini main-color-1-hover"
                                                                                       href="our-new-campus/index.html"
                                                                                       title="Our New Campus">Our New
                                                                                        Campus</a></h4>
                                                                                <div class="post-excerpt-mini">Nor again is
                                                                                    there anyone who loves or pursues or
                                                                                    desires to obtain pain of itself but
                                                                                    because occasionally circumstances.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--/post-item-mini-->
                                                                </div>
                                                            </div><!--/post-scroller-item-->
                                                            <div class="displaynone post-scroller-item">
                                                                <div class="scroller-item-inner">
                                                                    <div class="scroller-item-content post-item-mini">
                                                                        <div class="row">
                                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                                <div class="item-thumbnail">
                                                                                    <a href="education-organization-theme/index.html"
                                                                                       title="Education Organization Theme">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-content/uploads/2014/05/University-blog-004-150x150.jpg')}}"
                                                                                             width="150" height="150"
                                                                                             title="Education Organization Theme"
                                                                                             alt="Education Organization Theme">
                                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                                <h4>
                                                                                    <a class="post-title-mini main-color-1-hover"
                                                                                       href="education-organization-theme/index.html"
                                                                                       title="Education Organization Theme">Education
                                                                                        Organization Theme</a></h4>
                                                                                <div class="post-excerpt-mini">At vero eos
                                                                                    et accusamus et iusto odio dignissimos
                                                                                    ducimus qui blanditiis praesentium
                                                                                    voluptatum equal blame belongs.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--/post-item-mini-->
                                                                </div>
                                                            </div><!--/post-scroller-item-->
                                                            <div class="displaynone post-scroller-item">
                                                                <div class="scroller-item-inner">
                                                                    <div class="scroller-item-content post-item-mini">
                                                                        <div class="row">
                                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                                <div class="item-thumbnail">
                                                                                    <a href="summer-is-coming/index.html"
                                                                                       title="Summer Is Coming">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-content/uploads/2014/05/University-blog-005-150x150.jpg')}}"
                                                                                             width="150" height="150"
                                                                                             title="Summer Is Coming"
                                                                                             alt="Summer Is Coming">
                                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                                <h4>
                                                                                    <a class="post-title-mini main-color-1-hover"
                                                                                       href="summer-is-coming/index.html"
                                                                                       title="Summer Is Coming">Summer Is
                                                                                        Coming</a></h4>
                                                                                <div class="post-excerpt-mini">Except to
                                                                                    obtain some advantage from quis autem
                                                                                    vel eum iure reprehenderit qui in ea
                                                                                    voluptate velit esse quam.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--/post-item-mini-->
                                                                </div>
                                                            </div><!--/post-scroller-item-->
                                                            <div class="displaynone post-scroller-item">
                                                                <div class="scroller-item-inner">
                                                                    <div class="scroller-item-content post-item-mini">
                                                                        <div class="row">
                                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                                <div class="item-thumbnail">
                                                                                    <a href="blog-post-3/index.html"
                                                                                       title="Visiting Our Campus">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-content/uploads/2014/05/University-blog-007-150x150.jpg')}}"
                                                                                             width="150" height="150"
                                                                                             title="Visiting Our Campus"
                                                                                             alt="Visiting Our Campus">
                                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                                <h4>
                                                                                    <a class="post-title-mini main-color-1-hover"
                                                                                       href="blog-post-3/index.html"
                                                                                       title="Visiting Our Campus">Visiting
                                                                                        Our Campus</a></h4>
                                                                                <div class="post-excerpt-mini">who loves or
                                                                                    pursues or desires lorem ipsum dolor sit
                                                                                    amet consectetur adipisicing elit sed do
                                                                                    eiusmod.
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--/post-item-mini-->
                                                                </div>
                                                            </div><!--/post-scroller-item-->
                                                            <div class="displaynone post-scroller-item">
                                                                <div class="scroller-item-inner">
                                                                    <div class="scroller-item-content post-item-mini">
                                                                        <div class="row">
                                                                            <div class="col-md-4 col-sm-4 col-xs-4 post-thumbnail-mini">
                                                                                <div class="item-thumbnail">
                                                                                    <a href="video-post-2/index.html"
                                                                                       title="Video Post">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-includes/images/media/default.png
')}}" width="48" height="64" title="Video Post" alt="Video Post">
                                                                                        <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                                        <div class="thumbnail-hoverlay-cross"></div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8 col-sm-8 col-xs-8 post-content-mini">
                                                                                <h4>
                                                                                    <a class="post-title-mini main-color-1-hover"
                                                                                       href="video-post-2/index.html"
                                                                                       title="Video Post">Video Post</a>
                                                                                </h4>
                                                                                <div class="post-excerpt-mini">Video Post
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--/post-item-mini-->
                                                                </div>
                                                            </div><!--/post-scroller-item-->
                                                        </div>
                                                    </div>
                                                    <div class="post-scroller-control">
                        <span class="post-scroller-button-wrap">
                        	<a class="btn btn-primary post-scroller-button post-scroller-down" href="#"><i
                                        class="fa fa-angle-down"></i></a>
                        	<a class="btn btn-primary post-scroller-button post-scroller-up" href="#"> <i
                                        class="fa fa-angle-up"></i></a>
                        </span>
                                                    </div>
                                                </div>
                                            </div><!--/section-inner-->
                                        </section><!--/u-post-carousel-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/slider-->
                    <div class="u_row u_full_row dark-div u_paralax">
                        <div class="container">
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1434458178725 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1434459494306">
                                                <div class="wpb_wrapper">
                                                    <h1 style="text-align: center;">UNIVERSITY CAMPUSES EVENTS</h1>

                                                </div>
                                            </div>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1434458718041">
                                                <div class="row">
                                                    @if(isset($event))
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="carousel slide" id="myCarousel">
                                                                    <div class="carousel-inner">

                                                                        @foreach($event as $key => $value)
                                                                            <div class="item @if($key == 0) active @endif">
                                                                                <div class="col-xs-3"><a href="#"><img
                                                                                                src="{{$value->image}}"
                                                                                                class="img-responsive"></a>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach

                                                                    </div>
                                                                    <a class="left carousel-control" href="#myCarousel"
                                                                       data-slide="prev"><i
                                                                                class="glyphicon glyphicon-chevron-left"
                                                                                style="display: none;"></i></a>
                                                                    <a class="right carousel-control" href="#myCarousel"
                                                                       data-slide="next"><i
                                                                                class="glyphicon glyphicon-chevron-right"
                                                                                style="display: none;"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <script>
                                                        jQuery(document).ready(function ($) {
                                                            $('.counter').counterUp({
                                                                delay: 10,
                                                                time: 1000
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/u_row-->
                    <div class="u_row u_full_row">
                        <div class="container">
                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1407228240702">
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1407230237880">
                                                <div class="wpb_wrapper">
                                                    <h1><span style="color: #253b80;">Why Choose Us</span></h1>
                                                    <div>
                                                        <hr>
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div style="" class="panel panel-danger">
                                                                        <div class="panel-heading">Course Material</div>
                                                                        <div class="panel-body">

                                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                                                <tr>
                                                                                    <td style="width: 44%"><img  style='height:100px'src="website/index_files/course_material.gif"  width="100%" height="157px"> </td>
                                                                                    <td>
                                                                                        <ul style="list-style: disclosure-closed">
                                                                                            <li><a href="#">Academic Syllabus</a></li>
                                                                                            <li><a href="#">Class Routine</a></li>
                                                                                            <li><a href="#">Libray</a></li>
                                                                                        </ul>
                                                                                    </td>
                                                                                </tr>

                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div style="" class="panel panel-primary">
                                                                        <div class="panel-heading">Online Admission</div>
                                                                        <div class="panel-body">

                                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                                                <tr>
                                                                                    <td style="width: 44%"><img  style='height:100px'src="website/index_files/open.gif"  width="100%" height="157px"> </td>
                                                                                    <td>
                                                                                        <ul style="list-style: disclosure-closed">
                                                                                            <li><a href="/frontend/online-admission">Online Application For Admission</a></li>
                                                                                            <li style="list-style: none;font-size: 11px;text-align: justify;">Click Here  Get Online application for admission</li>
                                                                                        </ul>
                                                                                    </td>
                                                                                </tr>

                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><p>&nbsp;</p>
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div style="" class="panel panel-success">
                                                                        <div class="panel-heading">Student Portal</div>
                                                                        <div class="panel-body">
                                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                                                <tr>
                                                                                    <td style="width: 44%"><img  style='height:100px'src="website/index_files/student-mgmt.gif"  width="100%" height="157px"> </td>
                                                                                    <td>
                                                                                        <ul style="list-style: disclosure-closed;">
                                                                                            <li><a href="{{url('/student')}}">Login</a></li>
                                                                                            <li style="list-style: none;font-size: 11px;text-align: justify;">For Check Your Attendence , Fees Information , Result , Digital Content </li>
                                                                                        </ul>
                                                                                    </td>
                                                                                </tr>

                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div style="" class="panel panel-warning">
                                                                        <div class="panel-heading">Parent Portal</div>
                                                                        <div class="panel-body">
                                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                                                <tr>
                                                                                    <td style="width: 44%"><img  style='height:100px'src="website/index_files/parent_login.gif"  width="100%" height="157px"> </td>
                                                                                    <td>
                                                                                        <ul style="list-style: disclosure-closed;">
                                                                                            <li><a href="{{url('/parent')}}">Login</a></li>
                                                                                            <li style="list-style: none;font-size: 11px;text-align: justify;">For Check Your Child Activities </li>
                                                                                        </ul>
                                                                                    </td>
                                                                                </tr>

                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><p>&nbsp;</p>
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div style="" class="panel panel-danger">
                                                                        <div class="panel-heading">Online Class</div>
                                                                        <div class="panel-body">
                                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                                                <tr>
                                                                                    <td style="width: 44%"><img  style='height:100px'src="website/index_files/live_class.gif"  width="100%" height="157px"> </td>
                                                                                    <td>
                                                                                        <ul style="list-style: disclosure-closed">
                                                                                            <li><a href="/student">Online Class</a></li>
                                                                                            <li style="list-style: none;font-size: 11px;text-align: justify;">Click Here And Start Online Class</li>
                                                                                        </ul>
                                                                                    </td>
                                                                                </tr>

                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div style="" class="panel panel-primary">
                                                                        <div class="panel-heading">Extra Facilties</div>
                                                                        <div class="panel-body" style="height: 129px;">
                                                                            <ul>
                                                                                <li><a href="#">Transport</a></li>
                                                                                <li><a href="#">Dorimitory</a></li>
                                                                                <li><a href="#">Canteen</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>






                                                            </div>
                                                        </div><p>&nbsp;</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>

                                            </div>

                                            <div class="displaynone wpb_accordion wpb_content_element  not-column-inherit"
                                                 data-collapsible="" data-vc-disable-keydown="false"
                                                 data-active-tab="1">

                                                <div class="wpb_wrapper wpb_accordion_wrapper ui-accordion">

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a
                                                                    href="#build-your-own-homepage-with-visual-composer">Build
                                                                Your Own Homepage With Visual Composer</a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p><span style="color: #000000;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</span>
                                                                    </p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a
                                                                    href="#clean-beautiful-and-responsive-design">Clean,
                                                                Beautiful And Responsive Design</a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p><span style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                                                    </p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a
                                                                    href="#u-event-plugin-allow-you-to-sell-ticket">U-Event
                                                                Plugin Allow You To Sell Ticket</a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p><span style="color: #000000;">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</span>
                                                                    </p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a
                                                                    href="#sell-courses-with-u-course-plugin">Sell
                                                                Courses With U-Course Plugin</a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p><span style="color: #000000;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</span>
                                                                    </p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a
                                                                    href="#shop-version-available-with-woo-commerce-integrated">Shop
                                                                Version Available With Woo Commerce
                                                                Integrated</a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">
                                                            Empty section. Edit page to add content here.
                                                        </div>
                                                    </div>

                                                    <div class="wpb_accordion_section group">
                                                        <h3 class="wpb_accordion_header ui-accordion-header"><a
                                                                    href="#professional-look-and-feel-for-your-business">Professional
                                                                Look and Feel For Your Business</a></h3>
                                                        <div class="wpb_accordion_content ui-accordion-content vc_clearfix">

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p><span style="color: #000000;">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus</span>
                                                                    </p>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <section class="un-post-listing shortcode-blog-5865 " data-delay=0>
                                                <div class="section-inner">
                                                    <div class="section-header">
                                                        <h1 class="pull-left main-color-2">Blog</h1><a
                                                                class="btn btn-default btn-lighter pull-right"
                                                                href="#2">VISIT BLOG <i
                                                                    class="fa fa-angle-right"></i></a>
                                                        <div class="clearfix"></div>
                                                        <hr>
                                                    </div><!--/section-header-->
                                                    <div class="section-body">
                                                        <div class="row">
                                                            <div class="col-md-12 shortcode-blog-item">
                                                                <div class="content-pad">
                                                                    <div class="post-item row">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="content-pad">
                                                                                <div class="item-thumbnail">
                                                                                    <a href="video-post/index.html"
                                                                                       title="Your Career Starts Here">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-content/uploads/2015/08/iStock_000027500935_Large-526x526.jpg')}}"
                                                                                             width="526"
                                                                                             height="526"
                                                                                             title="Your Career Starts Here"
                                                                                             alt="Your Career Starts Here">
                                                                                        <span class="thumbnail-overlay">June 3, 2014</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="content-pad">
                                                                                <div class="item-content">
                                                                                    <h3 class="item-title"><a
                                                                                                href="video-post/index.html"
                                                                                                title="Your Career Starts Here"
                                                                                                class="main-color-1-hover">Your
                                                                                            Career Starts
                                                                                            Here</a></h3>
                                                                                    <div class="shortcode-blog-excerpt">
                                                                                        On the other hand we
                                                                                        denounce with righteous
                                                                                        indignation and dislike
                                                                                        men who are so beguiled
                                                                                        and demoralized.
                                                                                    </div>
                                                                                    <div class="item-meta">
                                                                                        <a class="btn btn-default btn-lighter"
                                                                                           href="video-post/index.html"
                                                                                           title="Your Career Starts Here">DETAILS
                                                                                            <i class="fa fa-angle-right"></i></a>
                                                                                        <a href="video-post/index.html#comment"
                                                                                           class="main-color-1-hover"
                                                                                           title="View comments">0
                                                                                            COMMENTS</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--/post-item-->
                                                                </div>
                                                            </div><!--/shortcode-blog-item-->
                                                            <div class="col-md-12 shortcode-blog-item">
                                                                <div class="content-pad">
                                                                    <div class="post-item row">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="content-pad">
                                                                                <div class="item-thumbnail">
                                                                                    <a href="gallery-post/index.html"
                                                                                       title="Spark Of Genius">
                                                                                        <img src="{{asset('theme/cactusthemes/wp-content/uploads/2014/06/University-blog-001-526x526.jpg')}}"
                                                                                             width="526"
                                                                                             height="526"
                                                                                             title="Spark Of Genius"
                                                                                             alt="Spark Of Genius">
                                                                                        <span class="thumbnail-overlay">June 3, 2014</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="content-pad">
                                                                                <div class="item-content">
                                                                                    <h3 class="item-title"><a
                                                                                                href="gallery-post/index.html"
                                                                                                title="Spark Of Genius"
                                                                                                class="main-color-1-hover">Spark
                                                                                            Of Genius</a></h3>
                                                                                    <div class="shortcode-blog-excerpt">
                                                                                        To take a trivial
                                                                                        example which of us ever
                                                                                        undertakes laborious
                                                                                        physical exercise
                                                                                        except.
                                                                                    </div>
                                                                                    <div class="item-meta">
                                                                                        <a class="btn btn-default btn-lighter"
                                                                                           href="gallery-post/index.html"
                                                                                           title="Spark Of Genius">DETAILS
                                                                                            <i class="fa fa-angle-right"></i></a>
                                                                                        <a href="gallery-post/index.html#comment"
                                                                                           class="main-color-1-hover"
                                                                                           title="View comments">0
                                                                                            COMMENTS</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--/post-item-->
                                                                </div>
                                                            </div><!--/shortcode-blog-item-->
                                                        </div><!--/row-->
                                                    </div><!--/section-body-->
                                                </div>
                                            </section><!--/un-blog-listing-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/u_row-->
                </article>
            </div><!--/content-->
        </div><!--/row-->
    </div><!--/body-->


    <div class="displaynone col-lg-8 twelve columns" id="left-content">
        <div class="row mainwrapper">
            <div class="col-lg-12">
                <div class="row" id="about">
                    <h2 style="margin-left: 10px">Welcome to TISI</h2>
                    <hr>
                    <div class="about_content">
                        <img src="{{asset('website/index_files/tisi.jpg')}}"
                             style="float: left; width: 50%; margin: 7px 10px 10px 10px; border: 2px solid #ddd;">
                        <p style="margin-bottom: 0px;">{{$about_us->about_us}}</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-lg-12">
                <div class="row" id="notice-board" class="ticker-container"
                     style="background-image: url('website/index_files/recent_news.png'); background-size: 327px; background-repeat: no-repeat; background-color: #f5f5f5;">
                    <div class="notice-board-bg">
                        <h2 style="margin-left: 28px;">Notice Board</h2>

                        <div id="notice-board-ticker" style="max-height: 190px " class="ticker ticker1">

                            <ul style="width: 97%;">
                                @foreach($notice as $notice_data)
                                    <li class="notice_list">
                                        <i class="fas fa-caret-right"></i>
                                        <a href="/frontend/notice/{{$notice_data->notice_id}}">
                                            <span>{{str_limit($notice_data->notice_title, 50)}}</span>
                                            <br>
                                            <span style="margin-left: 28px; font-size: 10px;color: black">Publish Date : {{$notice_data->created_at->format('d M Y')}}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <div style="padding: 15px;">
                            <a class="btn right" href="/frontend/notice"
                               style=" background: #428dc9;border-radius: 0px; font-size: 10px; color: #fff;">
                                See all notice</a>
                        </div>
                    </div>
                </div>
            <!--        <div class="row">
                <div id="box-1" class="col-lg-6 six columns service-box box">
                    <h4>ADMINISTRATION</h4>
                    <p>{{str_limit($about_us->about_us,180)}}<a href="/frontend/about_us">Read More</a></p>
                </div>
                <div id="box-1" class="col-lg-6 six columns service-box box">
                    <a href="/frontend/online-admission">
                        <h4>ONINE ADMISSION</h4>
                        <img src="{{asset('website/index_files/images.jpg')}}" style="width: 75px;">
                    </a>
                </div>
            </div> -->
            </div>
            <hr>
            <div class="col-lg-12">
                <div class="row">

                    <div style="width: 345px" class="five columns panel panel-danger">
                        <div class="panel-heading">Course Material</div>
                        <div class="panel-body">

                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="width: 44%"><img style='height:100px'
                                                                src="website/index_files/course_material.gif"
                                                                width="100%" height="157px"></td>
                                    <td>
                                        <ul style="list-style: disclosure-closed">
                                            <li><a href="#">Academic Syllabus</a></li>
                                            <li><a href="#">Class Routine</a></li>
                                            <li><a href="#">Libray</a></li>
                                        </ul>
                                    </td>
                                </tr>

                            </table>

                        </div>
                    </div>

                    <div style="width: 345px;margin-left: 4%" class="five columns panel panel-primary">
                        <div class="panel-heading">Online Admission</div>
                        <div class="panel-body">

                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="width: 44%"><img style='height:100px' src="website/index_files/open.gif"
                                                                width="100%" height="157px"></td>
                                    <td>
                                        <ul style="list-style: disclosure-closed">
                                            <li><a href="/frontend/online-admission">Online Application For
                                                    Admission</a></li>
                                            <li style="list-style: none;font-size: 11px;text-align: justify;">Click Here
                                                Get Online application for admission
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">

                    <div style="width: 345px" class="five columns panel panel-success">
                        <div class="panel-heading">Student Portal</div>
                        <div class="panel-body">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="width: 44%"><img style='height:100px'
                                                                src="website/index_files/student-mgmt.gif" width="100%"
                                                                height="157px"></td>
                                    <td>
                                        <ul style="list-style: disclosure-closed;">
                                            <li><a href="{{url('/student')}}">Login</a></li>
                                            <li style="list-style: none;font-size: 11px;text-align: justify;">For Check
                                                Your Attendence , Fees Information , Result , Digital Content
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div style="width: 345px;margin-left: 4%" class="five columns panel panel-warning">
                        <div class="panel-heading">Parent Portal</div>
                        <div class="panel-body">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="width: 44%"><img style='height:100px'
                                                                src="website/index_files/parent_login.gif" width="100%"
                                                                height="157px"></td>
                                    <td>
                                        <ul style="list-style: disclosure-closed;">
                                            <li><a href="{{url('/parent')}}">Login</a></li>
                                            <li style="list-style: none;font-size: 11px;text-align: justify;">For Check
                                                Your Child Activities
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div style="width: 345px" class="five columns panel panel-danger">
                        <div class="panel-heading">Online Class</div>
                        <div class="panel-body">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="width: 44%"><img style='height:100px'
                                                                src="website/index_files/live_class.gif" width="100%"
                                                                height="157px"></td>
                                    <td>
                                        <ul style="list-style: disclosure-closed">
                                            <li><a href="/student">Online Class</a></li>
                                            <li style="list-style: none;font-size: 11px;text-align: justify;">Click Here
                                                And Start Online Class
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                            </table>

                        </div>
                    </div>

                    <div style="width: 345px;margin-left: 4%" class="five columns panel panel-primary">
                        <div class="panel-heading">Extra Facilties</div>
                        <div class="panel-body" style="height: 129px;">
                            <ul>
                                <li><a href="#">Transport</a></li>
                                <li><a href="#">Dorimitory</a></li>
                                <li><a href="#">Canteen</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>

            <!-- <div class="col-lg-12">
                <div class="row">
                    <div id="box-3" class="six columns service-box box">
                        <h4>Course Material</h4>
                        <ul class="caption fade-caption" style="margin:0">
                            <li><a href="/site/page/a34671e3-a81c-4927-834f-19d6afc41217/Diploma-Level" title="Diploma Level">Diploma Level</a></li>
                            <li><a href="/site/page/a34671e3-a81c-4927-834f-19d6afc41217/HSC-Level" title="HSC Level">HSC Level</a></li>
                            <li><a href="/site/page/a34671e3-a81c-4927-834f-19d6afc41217/SSC-Level" title="SSC Level">SSC Level</a></li>
                            <li><a href="/site/page/a34671e3-a81c-4927-834f-19d6afc41217/Basic-and-Others" title="Basic and Others">Basic and Others</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->


        </div>


        <div class="col-lg-12">
        <!--  <div class="row row_border" id="mission_vission"  style="margin-bottom: 0px">

                <h3 class="header_msg_section_title">Short Courses</h3>









                @foreach($course as $key => $value)
            <div class="col-lg-4">
                <div style="margin-top: 8px;margin-top: 8px;width: 261px;height: 390px;border: gray 1px solid;border-radius: 10px">
                    <div class="pricing-item" style="padding: 0px 0px 5px; height: 390px;">
                        <div class="pricing-top" style="padding: 0px;">
                            <img style="height: 128px;width: 258px;border-radius: 10px 10px 0px 0px;" src="{{asset($value->banner)}}" style="height: 128px;">
                            </div>
                            <div style="padding: 10px;">
                                <a href="/frontend/course/{{$value->website_course_id}}" style="font-size: 15px;font-weight: bold;color: black;"><h6>{{$value->title}}</h6></a>
                            </div>
                            <div style="text-align: left;height: 33%">
                                <ul style="padding: 0px 10px !important;">
                                    <li style="padding: 0px;"><i class="fa fa-calendar"></i>&nbsp;{{ Carbon\Carbon::parse($value->start_date)->format('d M') }} - {{ Carbon\Carbon::parse($value->end_date)->format('d M Y') }}</li>
                                    <li style="padding: 0px;"><i class="fa fa-clock-o"></i>&nbsp;<span>Total Hours :</span><span>{{$value->total_hours}}</span></li><li style="padding: 0px;">৳&nbsp;&nbsp;<span>{{$value->amount}}</span> TK</li>
                                </ul>
                            </div>
                            <div class="course_footer" style="text-align: center;">
                                <ul>
                                    <li class="pricing_btn_area">
                                        <a class="btn btn-danger" href="/frontend/course/{{$value->website_course_id}}" class="default-btn fluide-btn">Enroll Now</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                </di v>-->
        </div>


    </div>
    <script type="text/javascript">
        /* Type-1 */
        $('.ticker1, .ticker2').easyTicker({
            direction: 'up',
            easing: 'swing',
            speed: 'slow',
            interval: 2000,
            height: 'auto',
            visible: 5,
            mousePause: 1,
            controls: {
                up: '',
                down: '',
                toggle: '',
                playText: 'Play',
                stopText: 'Stop'
            }
        });
    </script>
@stop