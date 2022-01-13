<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>eCompany | Admin | @yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{asset('admin/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('admin/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 -->
</head>

<body>
  <div class="scrollbar">
    <div class="overflow">
 

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="/">
                    <b class="logo-abbr"><img src="{{asset('admin/images/logo.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{asset('admin/images/logo-compact.png')}}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{asset('admin/images/logo-text.png')}}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{asset('admin/images/user/1.png')}}" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                            ><i class="fa fa-power-off"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class=""  style="text-decoration:none;" href="{{route('admin.logo')}}" aria-expanded="false"><i class="fa fa-file-image-o menu-icon" aria-hidden="true"></i><span class="nav-text">Logo</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.aboutus')}}" aria-expanded="false" style="text-decoration: none;"><i class="fa fa-object-group menu-icon"></i><span class="nav-text">About Us</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.blog')}}" aria-expanded="false"style="text-decoration: none;"><i class="fa fa-rss menu-icon" ></i><span class="nav-text">Blog</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.social')}}" aria-expanded="false" style="text-decoration: none;"><i class="fa fa-google-plus menu-icon"></i><span class="nav-text">Social</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.contact')}}" aria-expanded="false" style="text-decoration: none;"><i class="fa fa-volume-control-phone menu-icon"></i><span class="nav-text">Contact Us</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.clients')}}" aria-expanded="false" style="text-decoration: none;"><i class="fa fa-user-circle"></i><span class="nav-text">Clients</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.map')}}"  style="text-decoration:none;" aria-expanded="false"><i class="fa fa-globe"></i><span class="nav-text">Map</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.team')}}" aria-expanded="false" style="text-decoration:none;"><i class="fa fa-users menu-icon"></i><span class="nav-text">Team</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.slider')}}"   style="text-decoration:none;" aria-expanded="false"><i class="fa fa-sliders menu-icon"></i><span class="nav-text">Slider</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.skill')}}"  style="text-decoration:none;" aria-expanded="false"><i class="fa fa-cogs menu-icon"></i><span class="nav-text">Skills</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.testimonials')}}"  style="text-decoration:none;" aria-expanded="false"><i class="fa fa-quote-left"></i><span class="nav-text">Testimonials</span></a>
                    </li>

                    <li>
                        <a class="" href="{{route('admin.gallery')}}"  style="text-decoration:none;" aria-expanded="false"><i class="fa fa-picture-o"></i><span class="nav-text">Filter Gallery</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.faq')}}" aria-expanded="false" style="text-decoration:none;"><i class="fa fa-question-circle"></i><span class="nav-text">FAQ</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.favicon')}}" aria-expanded="false"  style="text-decoration:none;"><i class="fa fa-gratipay"></i><span class="nav-text">Favicon</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.services')}}" aria-expanded="false"  style="text-decoration:none;"><i class="fa fa-wrench"></i><span class="nav-text">Services</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.mvc')}}" aria-expanded="false"  style="text-decoration:none;"><i class="fa fa-bullseye"></i><span class="nav-text">MVC</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('client.query')}}"  style="text-decoration:none;" aria-expanded="false"><i class="fa fa-paper-plane"></i><span class="nav-text">Client Queries</span></a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.changepwd')}}"  style="text-decoration:none;" aria-expanded="false"><i class="fa fa-key"></i><span class="nav-text">Change Password</span></a>
                    </li>











                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

       @yield('content')


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="#">eCompany</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->





      <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{asset('admin/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('admin/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/js/settings.js')}}"></script>
    <script src="{{asset('admin/js/gleek.js')}}"></script>
    <script src="{{asset('admin/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{asset('admin/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{asset('admin/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{asset('admin/plugins/d3v3/index.js')}}"></script>
    <script src="{{asset('admin/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{asset('admin/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admin/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('admin/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{asset('admin/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>

    <script src="{{asset('admin/plugins/summernote/dist/summernote.min.js')}}"></script>
    <script src="{{asset('admin/plugins/summernote/dist/summernote-init.js')}}"></script>

    <script src="{{asset('admin/js/dashboard/dashboard-1.js')}}"></script>


 <script src="{{asset('admin/plugins/tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/tables/js/datatable-init/datatable-basic.min.js')}}"></script>
 </div>
</div>
    <script type="text/javascript">
        
        // if no Webkit browser
(function(){
  let isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
  let isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
  let scrollbarDiv = document.querySelector('.scrollbar');
    if (!isChrome && !isSafari) {
      scrollbarDiv.innerHTML = 'You need Webkit browser to run this code';
    }
})();
    </script>
    
</body>

</html>
