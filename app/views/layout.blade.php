<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'iSysmed')</title>    


    <!-- Bootstrap core CSS -->
 
    
    {{ HTML::style('vendor/gentellela/css/bootstrap.min.css') }}
    {{-- HTML::style('vendor/gentellela/css/shCoreDefault.css', array('media' => 'screen')) --}}    
    {{ HTML::style('vendor/gentellela/fonts/css/font-awesome.min.css') }}
    {{ HTML::style('vendor/gentellela/css/animate.min.css') }}
    
    


     
    <!-- Theme styling -->
     {{ HTML::style('vendor/gentellela/css/custom.css') }}    

     
    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->
     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Admin lTE -->    
       {{-- HTML::style('vendor/AdminLTE2/plugins/iCheck/flat/blue.css', array('media' => 'screen')) --}}
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

       <!-- GENTELLELA CSS-->
    {{ HTML::style('vendor/gentellela/css/icheck/flat/green.css') }}
    {{ HTML::style('vendor/gentellela/css/custom.css') }}
    <!-- GENTELLELA JS -->
    
    {{ HTML::script('vendor/gentellela/js/wizard/jquery.smartWizard.js') }} 
    {{ HTML::script('vendor/gentellela/js/icheck/icheck.min.js') }}
    {{ HTML::script('vendor/gentellela/js/nicescroll/jquery.nicescroll.min.js') }}
    {{ HTML::script('vendor/gentellela/js/validator/validator.js') }}
    {{ HTML::script('vendor/gentellela/js/custom.js') }}



    <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/x-icon">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    @yield('head')
  </head>
  <body style="background:#F7F7F7;">      
        @yield('body')
  </body>
</html>