<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'iSysmed')</title>

    <!-- GENTELLELA -->
    {{ HTML::style('vendor/gentellela/css/bootstrap.min.css', array('media' => 'screen')) }}
    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

   {{ HTML::style('vendor/gentellela/fonts/css/font-awesome.min.css', array('media' => 'screen')) }}
   {{ HTML::style('vendor/gentellela/css/animate.min.css', array('media' => 'screen')) }}
   {{ HTML::style('vendor/gentellela/css/custom.css', array('media' => 'screen')) }}
   {{ HTML::style('vendor/gentellela/css/maps/jquery-jvectormap-2.0.1.css', array('media' => 'screen')) }}
   {{ HTML::style('vendor/gentellela/css/icheck/flat/green.css', array('media' => 'screen')) }}
   {{ HTML::style('vendor/gentellela/css/floatexamples.css', array('media' => 'screen')) }}

   {{ HTML::script('vendor/gentellela/js/jquery.min.js') }}
   {{ HTML::script('vendor/gentellela/js/bootstrap.min.js') }}
   {{ HTML::script('vendor/gentellela/js/nicescroll/jquery.nicescroll.min.js') }}
   {{ HTML::script('vendor/gentellela/js/chartjs/chart.min.js') }}
   {{ HTML::script('vendor/gentellela/js/progressbar/bootstrap-progressbar.min.js') }}
   {{ HTML::script('vendor/gentellela/js/icheck/icheck.min.js') }}
   {{ HTML::script('vendor/gentellela/js/moment.min2.js') }}
   {{ HTML::script('vendor/gentellela/js/datepicker/daterangepicker.js') }}
   {{ HTML::script('vendor/gentellela/js/sparkline/jquery.sparkline.min.js') }}
   {{ HTML::script('vendor/gentellela/js/custom.js') }}
   {{-- HTML::script('vendor/gentellela/js/flot/jqeury.flot.js') --}}


   

      <!--<link rel="stylesheet" href="{{ asset('vendor/DataTables-1.10.7/media/css/jquery.dataTables.min.css')}}">      -->
<!--
      <script src="{{ asset('vendor/DataTables-1.10.7/media/js/jquery.dataTables.js')}}" type="text/javascript"></script>
      <script src="{{ asset('vendor/DataTables-1.10.7/media/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('vendor/Plugins-master/integration/bootstrap/3/dataTables.bootstrap.js')}}" type="text/javascript"></script>


       <script src="{{ asset('vendor/knockout.js/knockout.js') }}" type="text/javascript"></script>

      <script src="{{ asset('js/Chart.js') }}" type="text/javascript"></script>



      <link rel="stylesheet" href="{{ asset('vendor/AdminLTE2/dist/css/skins/skin-blue.min.css')}}">
      <script src="{{ asset('vendor/AdminLTE2/plugins/jQueryUI/jquery-ui.js')}}" type="text/javascript"></script>
      <script src="{{ asset('customs/datepicker.custom.js')}}" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('customs/datepicker.custom.css')}}">
      <script src="{{ asset('customs/bootstrap-switch.js')}}" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('customs/bootstrap-switch.css')}}">
-->

      {{
          HTML::macro('nav_link', function($url, $text, $url2 = '', $extra = '') {
            $class = ( Request::is($url) || Request::is($url.'/*') || Request::is($url2) ) ? ' class="active"' : '';
            $title = ucwords($text);
            return '<li'.$class.'><a href="'.URL::to($url).'" '.$extra.'>';
        });

      }}


       @yield('head')
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-stethoscope"></i> <span>iSysmed</span></a>
          </div>
          <div class="clearfix"></div>

            <!-- menu prile quick info -->
            <div class="profile">
                <div class="profile_pic">
                    <img src="{{URL::to('vendor/gentellela/images/img.jpg')}}" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Admin,</span>
                    <h2>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h2>
                </div>
            </div>
            <!-- /menu prile quick info -->
            <br/>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                    <li>
                      <a href="{{URL::to('inicio')}}">
                        <i class="fa fa-home"></i> Resumen
                      </a>      
                    </li>
                    <li>
                      <a href="{{URL::to('clientes')}}">
                        <i class="fa fa-users"></i> Clientes
                      </a>      
                    </li>
                    <li><a><i class="fa fa-medkit"></i> Actividad <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                            <li><a href="{{URL::to('servicios')}}">Servicios</a>
                            </li>
                            <li><a href="{{URL::to('categorias')}}">Categorías</a>
                            </li>
                            <!-- <li><a href="form_validation.html">Form Validation</a>
                            </li> -->
                            
                        </ul>
                    </li>
                    <li>
                      <a href="{{URL::to('citas')}}">
                        <i class="fa fa-calendar"></i> Citas
                      </a>      
                    </li>
                    <li>
                      <a href="{{URL::to('factura')}}">
                        <i class="fa fa-files-o"></i> Facturas
                      </a>      
                    </li>
                    <li>
                      <a href="{{URL::to('indexNota')}}">
                        <i class="fa fa-file-text-o"></i> Recetas
                      </a>      
                    </li>
                    <li>
                      <a href="{{URL::to('pagos')}}">
                        <i class="fa fa-money"></i> Pagos y Cobros
                      </a>      
                    </li>                    
                </ul>
              </div>
              <div class="menu_section">
                  <h3>Configuración</h3>
                  <ul class="nav side-menu">
                    <li>
                      <a href="{{URL::to('usuarios')}}">
                        <i class="fa fa-user-md"></i> Usuarios
                      </a>      
                    </li>
                    <li>
                      <a href="{{URL::to('sucursales')}}">
                        <i class="fa fa-hospital-o"></i> Dosificaciones
                      </a>      
                    </li>
                    <li>
                      <a href="{{URL::to('editarcuenta')}}">
                        <i class="fa fa-h-square"></i> Cuenta
                      </a>      
                    </li>    
                    <li>
                      <a href="{{URL::to('libroVentas')}}">
                        <i class="fa fa-file-text"></i> Libro de Ventas
                      </a>      
                    </li>
                      <li><a><i class="fa fa-stethoscope"></i> Diagnósticos<span class="label label-success pull-right">Proximamente</span></a>
                      </li>
                  </ul>
              </div>
          </div>
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
            </div>
        </div>
        </div>
                    <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{URL::to('vendor/gentellela/images/img.jpg')}}" alt="">John Doe
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;">  Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                                    <li>
                                        <a>
                                            <span class="image">
                                        <img src="{{URL::to('vendor/gentellela/images/img.jpg')}}" alt="Profile Image" />
                                    </span>
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
                                            <span class="image">
                                        <img src="{{URL::to('vendor/gentellela/images/img.jpg')}}" alt="Profile Image" />
                                    </span>
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
                                            <span class="image">
                                        <img src="{{URL::to('vendor/gentellela/images/img.jpg')}}" alt="Profile Image" />
                                    </span>
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
                                            <span class="image">
                                        <img src="{{URL::to('vendor/gentellela/images/img.jpg')}}" alt="Profile Image" />
                                    </span>
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
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
            <br>
              <div>                                 
                  <div class="row">
                  <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <div class="content-header">
                  <h1>
                    @yield('encabezado')
                    <small>@yield('encabezado_descripcion')</small>
                  </h1> 
                  </div>
                    </div>
                  <!--EN ESTA PARTE COLOCAR LOS MENSAJES DE ALERTA-->
                  <div class="x_content">
                    @yield('content')
                  </div>
                    </div>
                    </div>
                    </div>
            
              </div>
            </div>
            <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Integrated System Medical <a>iSysmed</a>. |
                            <span class="lead"> <i class="fa fa-paw"></i> Crea Tu Mundo</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
      </div>
    </div>
        <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
  
  <script type="text/javascript">
  </script>
</body>   
</html>
