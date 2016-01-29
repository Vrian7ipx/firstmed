<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'iSysmed')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Admin lTE -->
    {{-- HTML::style('vendor/AdminLTE2/bootstrap/css/bootstrap.min.css', array('media' => 'screen')) --}}
    {{ HTML::style('vendor/devoops/plugins/bootstrap/bootstrap.css') }}    
    {{ HTML::style('vendor/devoops/css/style.min.css', array('media' => 'screen')) }}    
    {{-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> --}}
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  -->
       {{-- HTML::style('vendor/AdminLTE2/dist/css/AdminLTE.min.css', array('media' => 'screen')) --}}
       {{-- HTML::style('vendor/AdminLTE2/dist/css/skins/_all-skins.min.css', array('media' => 'screen')) --}}
       {{ HTML::style('vendor/AdminLTE2/plugins/iCheck/flat/blue.css', array('media' => 'screen')) }}
       {{ HTML::style('vendor/AdminLTE2/plugins/morris/morris.css', array('media' => 'screen')) }}
       {{ HTML::style('vendor/AdminLTE2/plugins/jvectormap/jquery-jvectormap-1.2.2.css', array('media' => 'screen')) }}
       {{ HTML::style('vendor/AdminLTE2/plugins/datepicker/datepicker3.css', array('media' => 'screen')) }}
       {{ HTML::style('vendor/AdminLTE2/plugins/daterangepicker/daterangepicker-bs3.css', array('media' => 'screen')) }}
       {{ HTML::style('vendor/AdminLTE2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', array('media' => 'screen')) }}
       {{ HTML::script('vendor/AdminLTE2/plugins/jQuery/jQuery-2.1.4.min.js') }}
       {{ HTML::script('vendor/AdminLTE2/bootstrap/js/bootstrap.min.js') }}
       {{ HTML::script('vendor/AdminLTE2/plugins/fastclick/fastclick.min.js') }}
       {{ HTML::script('vendor/AdminLTE2/dist/js/app.js') }}
       {{ HTML::script('vendor/AdminLTE2/dist/js/demo.js') }}
       {{ HTML::script('vendor/AdminLTE2/plugins/datepicker/bootstrap-datepicker.js') }}
    <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/x-icon">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    @yield('head')
  </head>
  <body>      
        @yield('body')
  </body>
</html>