<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="{{Request::root()}}/adminassets/assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="{{Request::root()}}/adminassets/assets/images/favicon.png" type="image/x-icon">
  <title>Case</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('adminassets/bpg/css/bpg-banner-quadrosquare-caps.min.css') }}">
  <link rel="stylesheet" href="{{Request::root()}}/adminassets/assets/css/css/bpg-mrgvlovani-caps.min.css">
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/chartist.css">
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/owlcarousel.css">
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/prism.css">
  <!-- Plugins css Ends-->
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/datatables.css">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/style.css">
  <link id="color" rel="stylesheet" href="{{Request::root()}}/adminassets/assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="{{Request::root()}}/adminassets/assets/css/responsive.css">
</head>

<body onload="startTime()">
  <div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
      <defs></defs>
      <filter id="goo">
        <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
        <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
      </filter>
    </svg>
  </div>  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
          <div class="form-group w-100">
            <div class="Typeahead Typeahead--twitterUsers">
              <div class="u-posRelative">
                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                  placeholder="Search Cuba .." name="q" title="" autofocus>
                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span>
                </div><i class="close-search" data-feather="x"></i>
              </div>
              <div class="Typeahead-menu"></div>
            </div>
          </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid" src="{{Request::root()}}/adminassets/assets/images/logo/logo.png"
                alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
          </div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
       
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
          <ul class="nav-menus">
            

            <li class="profile-nav onhover-dropdown p-0 me-0">
              <div class="media profile-media"><img class="b-r-10" src="{{Request::root()}}/adminassets/assets/images/dashboard/profile.jpg" alt="">
                <div class="media-body"><span>{{ Auth::user()->name }}</span>
                  <p class="mb-0 font-roboto">მომხმარებელი <i class="middle fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div" style="width: 240px;">
                <li><a href="{{ route('settings') }}"><i data-feather="settings"></i><span>პარამეტრები</span></a></li>
                <li><a href="{{ route('logout') }}"><i data-feather="log-in"> </i><span>გასვლა</span></a></li>
              </ul>

            </li>
          </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
          <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
        <script class="empty-template" type="text/x-handlebars-template">
          <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
        </script>
      </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper">
        <div>
          <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid for-light"
                src="{{Request::root()}}/adminassets/assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark"
                src="{{Request::root()}}/adminassets/assets/images/logo/logo_dark.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
          </div>
          <div class="logo-icon-wrapper"><a href="{{ route('index') }}"><img class="img-fluid"
                src="{{Request::root()}}/adminassets/assets/images/logo/logo-icon.png" alt=""></a></div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="{{ route('index') }}"><img class="img-fluid"
                      src="{{Request::root()}}/adminassets/assets/images/logo/logo-icon.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                      aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('index') }}"><i
                  data-feather="home"> </i><span>მთვარი</span></a></li>




                  <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('add_player') }}"><i
                    data-feather="check-square"></i><span class="lan-7">მოთამაშის დამატება</span></a></li>


                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('player_search') }}"><i
                      data-feather="list"></i><span class="lan-7">მოთამაშის ძებნა</span></a>                   
                    </li>

              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav>
        </div>
      </div>

      @yield('content')

      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 footer-copyright text-center">
              <p class="mb-0">საავტორო უფლებები დაცულია 595 78 34 34 </p>
            </div>
          </div>
        </div>
      </footer>
    
    </div>
  </div>



  <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>






  <!-- latest jquery-->
  <script src="{{Request::root()}}/adminassets/assets/js/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap js-->
  <script src="{{Request::root()}}/adminassets/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="{{Request::root()}}/adminassets/assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="{{Request::root()}}/adminassets/assets/js/scrollbar/simplebar.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="{{Request::root()}}/adminassets/assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="{{Request::root()}}/adminassets/assets/js/sidebar-menu.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/chart/chartist/chartist.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/chart/apex-chart/apex-chart.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/chart/apex-chart/stock-prices.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/prism/prism.min.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/clipboard/clipboard.min.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/counter/jquery.waypoints.min.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/counter/jquery.counterup.min.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/counter/counter-custom.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/custom-card/custom-card.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/dashboard/dashboard_2.js"></script>


  <script src="{{Request::root()}}/adminassets/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/datatable/datatables/datatable.custom.js"></script>


  <script src="{{Request::root()}}/adminassets/assets/js/tooltip-init.js"></script>
  <script src="{{Request::root()}}/adminassets/assets/js/form-validation-custom.js"></script>


  <!-- Plugins JS Ends-->
  <script src="{{Request::root()}}/adminassets/assets/js/script.js"></script>



  @stack('js')

  <!-- Theme js-->
  <!-- login js-->
  <!-- Plugin used-->
</body>

</html>

