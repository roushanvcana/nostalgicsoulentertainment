<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="description" content="" /> --}}
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    {{-- <meta http-equiv="refresh" content="900;url=logout.php" /> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <!--link rel="shortcut icon" href="{{ asset('dashboard_assets/images/favicon.ico')}}" /-->
      <link rel="icon" href="{{ asset('/assets/img/basic/pin.png') }}" type="image/x-icon"/>
      
    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('../assets/images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('../assets/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{ asset('../assets/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('../assets/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('../assets/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">
    <style>
        .item-purchase-banner {
          position: fixed;
          top: -50px;
          width: 100%;
          height: 0px;
          display: none;
          justify-content: center;
          align-items: center;
          padding: 10px 15px;
          z-index: 9990;
          background: #000;
          color: #ffffff;
}
        </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="/admin/home">
            {{-- <img src="{{ asset('assets/images/logo-white.png')}}" alt="logo" /> --}}
            <span style="color:#FF1744; font-size:.8em">Nostalgic Soul Entertainment</span>
          </a>
          <a class="navbar-brand brand-logo-mini" href="/admin/home">
            <img src="{{ asset('dashboard_assets/images/logo-mini.svg')}}" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          {{-- <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-fr"></i>
                  </div>French
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ae"></i>
                  </div>Arabic
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ru"></i>
                  </div>Russian
                </a>
              </div>
            </li>
          </ul> --}}
          {{-- <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form> --}}
          {{-- <ul class="navbar-nav ml-auto"> --}}
            {{-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('dashboard_assets/images/faces/face10.jpg')}}" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('dashboard_assets/images/faces/face12.jpg')}}" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{ asset('dashboard_assets/images/faces/face1.jpg')}}" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li> --}}
            {{-- <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{ asset('dashboard_assets/images/faces/face8.jpg')}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{ asset('dashboard_assets/images/faces/face8.jpg')}}" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name }}</p>
                  <p class="font-weight-light text-muted mb-0">{{ Auth::user()->email }}</p>
                </div>
                {{-- <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a> --}}
                {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}<i class="dropdown-item-icon ti-power-off"></i>
                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </div>
            </li> --}}
          {{-- </ul> --}}
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{ asset('dashboard_assets/images/faces/face8.jpg')}}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->name }}</p>
                  <p class="designation">{{ (Auth::user()->is_admin ==1) ? 'Admin' : 'User'}}</p>
                 
                </div>
              </a>
            </li>
            
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="/nostalgicSoulEntertainment/admin/home">
              <!-- <i class="bi bi-house-fill"></i> -->
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            @if(Auth::user()->is_admin ==1)
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/artist') }}">
                  <!-- <i class="menu-icon typcn typcn-document-text"></i> -->
                  <span class="menu-title">Artists</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/genre') }}">
                  <!-- <i class="menu-icon typcn typcn-document-text"></i> -->
                  <span class="menu-title">Genre</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/albums') }}">
                  <!-- <i class="menu-icon typcn typcn-document-text"></i> -->
                  <span class="menu-title">Albums</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/vedios') }}">
                  <!-- <i class="menu-icon typcn typcn-document-text"></i> -->
                  <span class="menu-title">Videos</span>
                </a>
              </li>
            @else
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/history') }}">
                  <!-- <i class="menu-icon typcn typcn-document-text"></i> -->
                  <span class="menu-title">History</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="{{ url('/savedlist') }}">
                  <!-- <i class="menu-icon typcn typcn-document-text"></i> -->
                  <span class="menu-title">Saved List</span>
                </a>
              </li>
                
            @endif
            
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          @yield('content')
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © vcanaglobal.com 2021</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('dashboard_assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('dashboard_assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('dashboard_assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{ asset('dashboard_assets/js/shared/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('dashboard_assets/js/demo_1/dashboard.js')}}"></script>
    <!-- End custom js for this page-->
    {{-- <script src="{{ asset('dashboard_assets/js/shared/jquery.cookie.js')}}" type="text/javascript"></script> --}}
  </body>
</html>