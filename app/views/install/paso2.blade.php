@extends('layout')


@section('title') Asignación de Servicios @stop
@section('head') 
 
@stop

@section('body')
  
      {{ Form::open(array('url' => 'paso/1', 'method' => 'post' ,'files'=>true ))}} {{-- files importante para el envio de imagenes--}}

      <p></p>
  <div class="col-md-2">
  </div>
    <div class="col-md-8">
      <div class="panel panel-default">
       
        <div class="panel-heading"> 
          <h3>Complete la siguiente información básica para configurar su cuenta.</h3>
        </div>

        <div class="panel-body" > 
           @if (Session::has('message'))
              <div class="box box-success box-solid">
                <div class="box-header with-border">
                  {{ Session::get('message') }}
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
              </div>    
            @endif

            @if (Session::has('error'))
              <div class="box box-danger box-solid">
                <div class="box-header with-border">
                  {{ Session::get('error') }}
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
              </div>
            @endif
          <div class="row">
            <div id="wizard_verticle" class="form_wizard wizard_verticle">            
              <ul class="list-unstyled wizard_steps">
                  <li>
                      <a href="#step-11">
                          <span class="step_no">1</span>
                      </a>
                  </li>
                  <li>
                      <a href="#step-22" class="disabled">
                          <span class="step_no">2</span>
                      </a>
                  </li>
                  <li>
                      <a href="#step-33" class="disabled">
                          <span class="step_no">3</span>
                      </a>
                  </li>
                  <li>
                      <a href="#step-44" class="disabled">
                          <span class="step_no">4</span>
                      </a>
                  </li>
                </ul>
            </div>


            <div class="col-md-8">{{--panel formulario--}}
                <div class="panel panel-default">
                  <div class="panel-body">
                  <legend>Servicios</legend>
                    <div class="x_content">
                      <div class="">
                          <ul class="to_do">
                              <li>
                                  <p>                                  
                                      <input type="checkbox" class="flat"> Agenda de citas </p>

                              </li>
                              <li>
                                  <p>
                                      <input type="checkbox" class="flat"> Facturación y Recetas</p>
                              </li>
                              <li>
                                  <p>
                                      <input type="checkbox" class="flat"> Pagos y Cobros</p>
                              </li>
                              <li>
                                  <p>
                                      <input type="checkbox" class="flat"> otro</p>
                              </li>                              
                          </ul>
                      </div>
                  </div>

                    <legend>Logo</legend>
                    {{-- <img id="logo" src="#" alt="imagen" class="img-rounded"> --}}
                    <div class="col-md-1"></div>
                    <img id="logo" name="logo" class="img-rounded" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE0MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzE0MHgxNDAKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNGY0NzM1MjM5MyB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE0ZjQ3MzUyMzkzIj48cmVjdCB3aWR0aD0iMTQwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjQ1LjUiIHk9Ijc0LjUiPjE0MHgxNDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=">
                    <p></p>
                    <input type='file' id="imgInp" name="imgInp" accept=".jpg, .jpeg" />
                      {{-- {{ Form::file('file','',array('id'=>'imgInp')) }} --}}
                  
                    <p>
                      <center>
                        <button type="submit" class="btn btn-info ">
                           Guardar
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </button>
                                   
                       </center>
                    </p>
                    {{ Form::close() }}
                  </div>
                 
                </div>
         
             </div>
           </div>


         </div>
          <div class="panel-footer"><b>iSysmed - Crea Tu Mundo 2016</b></div>
        </div>
      </div>
     
    </div>    
  
  
  <script type="text/javascript">
  //$('.to_do').iCheck();
$('input.flat').iCheck({
               checkboxClass: 'icheckbox_flat-green',
               radioClass: 'iradio_flat-green'
           });

    function readURL(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#logo').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });
   /* 
        $(document).ready(function () {
            // Smart Wizard   
            $('#wizard').smartWizard();

            function onFinishCallback() {
                $('#wizard').smartWizard('showMessage', 'Finish Clicked');
                //alert('Finish Clicked');
            }
        });

        $(document).ready(function () {
            // Smart Wizard 
            $('#wizard_verticle').smartWizard({
                transitionEffect: 'slide'
            });

        });*/
    
  </script>

    
@stop 
