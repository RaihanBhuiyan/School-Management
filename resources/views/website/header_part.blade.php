<header>
    <div id="top-nav" class="dark-div nav-style-1">
        <nav class="navbar navbar-inverse main-color-1-bg" role="navigation">
            <div class="container">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="top-menu">
                    <ul class="nav navbar-nav hidden-xs">
                        <li id="nav-menu-item-1438"
                            class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent dropdown">
                            <a href="blog/index.html"
                               class="menu-link dropdown-toggle disabled main-menu-link"
                               data-toggle="dropdown">Email: zhsust.campus@gmail.com </a>
                        </li>
                        <li id="nav-menu-item-1438"
                            class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent dropdown">
                            <a href="blog/index.html"
                               class="menu-link dropdown-toggle disabled main-menu-link"
                               data-toggle="dropdown">Call Now @ {{$general_settings->Phone}} </a>
                        </li>
                    </ul>
                    <button type="button" class="mobile-menu-toggle visible-xs">
                        <span class="sr-only">Menu</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-right search-toggle collapsed" data-toggle="collapse"
                       data-target="#nav-search" href="#"><i class="fa fa-search"></i></a>
                    <div class="navbar-right topnav-sidebar">
                        <div id="text-17" class=" col-md-12  widget_text">
                            <div class=" widget-inner">
                                <div class="textwidget"><a href="#"><i class="fa fa-facebook"></i></a><a
                                            href="#"><i class="fa fa-youtube"></i></a><a href="#"><i
                                                class="fa fa-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div id="nav-search" class="collapse dark-div">
                        <div class="container">
                            <form action="http://university.cactusthemes.com/">
                                <div class="input-group">
                                    <input type="text" name="s" class="form-control search-field"
                                           placeholder="Search Here" autocomplete="off">
                                    <span class="input-group-btn">
                                            <button type="submit"><i class="fa fa-search fa-4x"></i>&nbsp;</button>
                                        </span>
                                    <span class="input-group-btn hidden-xs">
                                            <button type="button" data-toggle="collapse" data-target="#nav-search">&nbsp;<i
                                                        class="fa fa-times fa-2x"></i></button>
                                        </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </div><!--/top-nap-->
    <div id="main-nav" class="dark-div nav-style-1">
        <nav class="navbar navbar-inverse main-color-2-bg" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="navbar-header">
                            <a href="/frontend">
                                <img alt="logo" src="{{asset('img/logo.png')}}">
                            </a>
                            <h3 class="varsity_title">{{$general_settings->system_name}}</h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="main-menu hidden-xs  " data-spy="affix" data-offset-top="500">

                        @php
                            $nav_dept = collect($manage_department)->groupBy('department_name');
                        @endphp
                        <!-- <div class="navbar-header">
                                      <img src="./index_files/logo.png">
                                    </div> -->
                            <ul class="nav navbar-nav main_navbar navbar-right">
                                <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown"><a href="/frontend">Home</a></li>

                                <!-- <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Institute<span class="caret"></span></a>
                                    <ul class="dropdown-menu main_menu">
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/about_us">About The Institution</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/history">History</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/mission_vision">Mission & Vission</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/principal_message">Principle Message</a>
                                        </li>
                                    </ul>
                                </li> -->

                                <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
                                    <ul class="dropdown-menu main_menu">
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Bot</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Message Bot Chairman</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Message From VC</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Overview</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Vision, Mission & Strategy</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Syndicate</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Academic Council</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">About US</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Academic<span class="caret"></span></a>
                                    <ul class="dropdown-menu main_menu">
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/department">Department of Computer science & Engineering</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Department of Chemical Engineering</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Department of Electrical & Electronic Engineering</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Department of Civil Engineering</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Department of English</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Department of LAW</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Department of Business Administration</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrative<span class="caret"></span></a>
                                    <ul class="dropdown-menu main_menu">
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Office of the Chairperson, BoT</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Office of the Chief Advisor</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Office of the Vice-Chancellor</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Office of the pro vice chancellor</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Office of the Treasurer</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Office of the Dean’s</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">AOffice of the Registrar</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Office of the Proctor</a>
                                        </li>

                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Office of the Library</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Office of the Director of Finance</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Office of the Controller of Examination</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admission<span class="caret"></span></a>
                                    <ul class="dropdown-menu main_menu">
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1" href="#">
                                                Admission Information
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Admission Test</a>
                                                </li>
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Admission Test Results</a>
                                                </li>
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Admission Contact</a>
                                                </li>
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Apply Online</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1" href="#">
                                                Guidelines
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Admission Eligibility</a>
                                                </li>
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Admission Guidelines</a>
                                                </li>
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Admission Process</a>
                                                </li>
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Credit Transfer Guidelines</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1" href="#">
                                                Fees and Founding
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Tuition and Other Fees</a>
                                                </li>
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Tuition fee Calculator</a>
                                                </li>
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Payment Guidelines</a>
                                                </li>
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Scholarship for Students</a>
                                                </li>
                                                <li>
                                                    <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Waiver Calculator and Apply</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Convocation<span class="caret"></span></a>
                                    <ul class="dropdown-menu main_menu">
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Convocation Date</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Convocation Registration Form</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Convocation Rules & Guidelines</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Convocation Database</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Department of English</a>
                                        </li>
                                        <li>
                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="#">Convocation Notice</a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Faculties<span class="caret"></span></a>
                                    <ul class="dropdown-menu main_menu">
                                        @foreach($nav_dept as $key => $value)
                                            <li class="dropdown-submenu">
                                                <a class="test" tabindex="-1" href="#">
                                                    {{$key}}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                <li>
                              <a tabindex="-1" href="/frontend/faculties/message-from-head/{{$key}}">Message From Head</a>
                            </li>
                            <li>
                              <a tabindex="-1" href="/frontend/faculties/about_department/{{$key}}">About Department</a>
                            </li>
                                                    <li>
                                                        <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/faculties/teacher_info/{{$key}}">Teacher Info</a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/faculties/lab_info/{{$key}}">Lab Info</a>
                                                    </li>
                                                    <li>
                                                        <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/faculties/fees_structure/{{$key}}">Fees Structure</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endforeach
                                        <li>
                                            <a class="test" tabindex="-1" href="/frontend/faculties/staff_info/staff">Administrative Staff</a>
                                        </li>
                                        <li>
                                            <a class="test" tabindex="-1" href="/frontend/non_tech_instructor">Non Tech Instructor</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="test" tabindex="-1" href="#">
                                                Course
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($course_category as $value)
                                                    <li>
                                                        <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/courses/{{$value->id}}">
                                                            {{$value->name}}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->

                                <!-- <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student's Info<span class="caret"></span></a>
                                    <ul class="dropdown-menu main_menu">
                                        @foreach($nav_dept as $key => $value)
                                            <li class="dropdown-submenu">
                                                <a class="test" tabindex="-1" href="#">
                                                    {{$key}}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @foreach($value as $key => $sub_menu)
                                                        <li>
                                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/student-info/{{$sub_menu['department_code']}}/{{str_slug($sub_menu['class_name'])}}">{{$sub_menu['class_name']}}</a>
                                                        </li>
                                                    @endforeach
                                                    <li>
                                                        <a class="test" tabindex="-1" href="#">Ex Students</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li> -->

                                <!-- <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Course Material<span class="caret"></span></a>
                                    <ul class="dropdown-menu main_menu">
                                        @foreach($nav_dept as $key => $value)
                                            <li class="dropdown-submenu">
                                                <a class="test" tabindex="-1" href="#">
                                                    {{$key}}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @foreach($value as $key => $sub_menu)
                                                        <li>
                                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/course-material/{{$sub_menu['department_code']}}/{{str_slug($sub_menu['class_name'])}}">{{$sub_menu['class_name']}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li> -->

                                <!-- <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Class Routine<span class="caret"></span></a>
                                    <ul class="dropdown-menu main_menu">
                                        @foreach($nav_dept as $key => $value)
                                            <li class="dropdown-submenu">
                                                <a class="test" tabindex="-1" href="#">
                                                    {{$key}}
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @foreach($value as $key => $sub_menu)
                                                        <li>
                                                            <a class="menu-link  sub-menu-link" tabindex="-1" href="/frontend/class-routine/{{$sub_menu['department_code']}}/{{str_slug($sub_menu['class_name'])}}">{{$sub_menu['class_name']}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li> -->
                                <!--
                                                  <li>
                                                    <a href="#">Digital Content</a>
                                                  </li> -->

                                <!--  <li>
                                   <a tabindex="-1" href="/frontend/citizen-charter">Citizen Charter</a>
                                 </li> -->

                                <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a tabindex="-1" href="/frontend/live-class">Live Class Schedule</a>
                                </li>

                                <li class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown">
                                    <a tabindex="-1" href="/frontend/contact_info">Contact</a>
                                </li>

                            </ul>
                            <a href="#top" class="sticky-gototop main-color-1-hover"><i class="fa fa-angle-up"></i></a>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>
                <!-- Brand and toggle get grouped for better mobile display -->

                <!-- Collect the nav links, forms, and other content for toggling -->

            </div>
        </nav>
    </div><!-- #main-nav -->
    <style type="text/css" scoped="scoped">
        #slider {
            height: autopx;
        }
    </style>
</header>
<div class="top-sidebar displaynone">
    <div class="container">
        <div class="row">
        </div><!--/row-->
    </div><!--/container-->
</div><!--/Top sidebar-->