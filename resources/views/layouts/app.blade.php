<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FirePhish &raquo; Dashboard </title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">

    <link href="{{ asset('vendor/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    
    <link href="{{ asset('vendor/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables-select/css/select.bootstrap.scss') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables-select/css/select.dataTables.scss') }}" rel="stylesheet">
    <link href="{{ asset('vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/firephish.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-envelope-o"></i> <span><span style="color: #BB2125">Fire</span>Phish</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info --><!--
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>-->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/">Dashboard</a></li>
                      <li><a href="#">Statistics</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-bullseye"></i> Targets <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ action('TargetsController@index') }}">All Targets</a></li>
                      <li><a href="{{ action('TargetsController@targetlists_index') }}">All Lists</a></li>
                      <li><a href="{{ action('TargetsController@assign_index') }}">Manage Target Lists</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-play"></i> Campaigns <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">View all campaigns</a></li>
                      <li><a href="#">Create new campaign</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-envelope-o"></i> Emails <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">View Emails</a></li>
                      <li><a href="#">Email Templates</a></li>
                      <li><a href="#">Inbox</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i>Sites <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">View all sites</a></li>
                      <li><a href="#">Site cloner</a></li>
                      <li><a href="#">Site customizer</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ action('SettingsController@index') }}">User Management</a></li>
                      <li><a href="#">Configuration</a></li>
                      <li><a href="#">Import / Export</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Active Campaigns</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bullhorn"></i>Microsoft #1 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Status</a></li>
                      <li><a href="#">Complete</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bullhorn"></i>Google #1 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Status</a></li>
                      <li><a href="#">Complete</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bullhorn"></i>Yahoo #1 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Status</a></li>
                      <li><a href="#">Complete</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!--
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>-->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle" style="color: #171819"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{ title_case(auth()->user()->name) }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ action('SettingsController@get_editprofile') }}"> Profile</a></li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="{{ action('Auth\AuthController@logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <!--<li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-red">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>-->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            @include('common.notifications')
            @yield('content')
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendor/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendor/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('vendor/datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/media/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.inputmask/dist/jquery.inputmask.bundle.js') }}"></script>
    <script src="{{ asset('vendor/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-select/js/dataTables.select.js') }}"></script>
    <script src="{{ asset('vendor/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/custom.js') }}"></script>
    @yield('footer')
    <script type="text/javascript">
    /* global $ */
      $(document).ready(function() {
        $(".alert").slideDown(1000).delay(10000).slideUp(1000);
        $(":input").inputmask();
      });
    </script>
  </body>
</html>