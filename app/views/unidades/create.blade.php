@extends('header')
@section('title')Nueva Unidad @stop
  @section('head') @stop
@section('encabezado')  Unidades @stop
@section('encabezado_descripcion') Nueva Unidad  @stop
@section('nivel') <li><a href="{{URL::to('productos')}}"><i class="fa fa-cube"></i> Productos y Servicios</a></li><li>Unidades</li>
        <li class="active"> Nuevo </li> @stop

@section('content')

{{Former::framework('TwitterBootstrap3')}}

<div class="x_panel box-success">
   <div class="box-header with-border">
      <h3 class="box-title">Datos de la Unidad</h3>
      <div class="box-tools pull-right">
        <!-- Buttons, labels, and many other things can be placed here! -->
        <!-- Here is a label for example -->

      </div><!-- /.box-tools -->
    </div><!-- /.box-header -->

  <div class="box-body">
      {{ Former::open("unidades")->method('post')->addClass('col-md-8 col-md-offset-2 warn-on-exit')->rules(array(
        'name' => 'required|match:/[a-zA-Z. ]+/',
    )); }}

        <div class="row">
            <div class="col-md-8">
                <div class="col-md-10">
                     <p>
                        <label>Nombre *</label><br>
                        <input type="text" name="name" class="form-control" placeholder="Nombre de la Unidad" aria-describedby="sizing-addon2" title="Ingrese el nombre de la Unidad" pattern=".{1,}" required>
                    </p>
                </div>
            </div>

        </div>
        <br>
        <div class="row">
            {{-- <div class="col-md-1"></div> --}}
                <div class="col-md-3">
                     <a href="{{ url('unidades/') }}" class="btn btn-default btn-sm btn-block">Cancelar&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-remove">  </span></a>
                </div>
            <div class="col-md-1"></div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-success dropdown-toggle btn-sm btn-block"> Guardar &nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-floppy-disk"></span></button>
                </div>
        </div>





        {{ Former::close() }}
  </div><!-- /.box-body -->
  <div class="box-footer">

  </div><!-- box-footer -->
</div><!-- /.box -->


@stop
