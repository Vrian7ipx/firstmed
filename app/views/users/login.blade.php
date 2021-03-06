<!DOCTYPE html>
@extends('layout')

@section('title') Autentificación @stop

@section('head')

<!-- 
<style type="text/css">

body {
  padding-top: 40px;
  padding-bottom: 40px;
}
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 20px 20px 20px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    max-width: 75%;
    display:block;
    margin:0 auto 0 auto;
    background-color: #f7f7f7;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}

  </style> -->

@stop

@section('body')

<div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        <div id="login" class="animate form">
            <section class="login_content">
                <form action="{{URL::to('login')}}" method="POST">
                    <h1>iSysmed</h1>
                    <div>
                        <input type="text" name="username" class="form-control" placeholder="Nombre de Usuario" <?php if(Session::has('b_user')){ echo "value='".Session::get('b_user')."'";}?> required />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" <?php if(Session::has('b_pass')){ echo "value='".Session::get('b_pass')."'";}?> required />
                    </div>
                    <div>
                        <!-- <a class="btn btn-default submit" type="submit" value="Submit" >Ingresar</a> -->
                        <input class="btn btn-default submit" type="submit" value="Ingresar">
                        <a class="reset_pass" href="#">Olvidaste tu contraseña?</a>                        
                    </div>
                    <div class="clearfix"></div>
                                                    <p>
                    @if (Session::has('error_login'))
                    <!-- <span class="alert alert-dange">{{Session::get('error_login')}}</span> -->

                        <div role="alert" class="alert alert-danger alert-dismissible fade in">
                           <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span>
                               </button>
                                    <strong>Error!</strong> Los datos ingresados no son correctos.
                                </div>

                    @endif
                </p>
                    <div class="separator">

                        <p class="change_link">Eres nuevo?
                            <a href="#toregister" class="to_register"> Regístrate</a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Crea Tu Mundo!</h1>

                            <p>©2016 Todos los derechos resevados. www.creatumundo.com.bo</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
        <div id="register" class="animate form">
            <section class="login_content">
                <form>
                    <h1>Crear Cuenta</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                    </div>
                    <div>
                        <a class="btn btn-default submit" href="index.html">Enviar</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">

                        <p class="change_link">Ya eres un miembro?
                            <a href="#tologin" class="to_register"> Ingresar </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Crea Tu Mundo</h1>

                            <p>©2016 Todos los derechos resevados. www.creatumundo.com.bo</p>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>
    </div>
</div>



@stop