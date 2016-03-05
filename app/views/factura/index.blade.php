@extends('header')
@section('title')Gestión de Facturas @stop
  @section('head') @stop
@section('encabezado')  FACTURAS @stop
@section('encabezado_descripcion') Gestión de Facturas  @stop
@section('nivel') <li><a href="#"><i class="fa fa-files-o"></i> Facturas</a></li> @stop

@section('content')

<div class="x_panel panel-default">
  <div class="box-header with-border">
     <h3 class="box-title"><a href="{{ url(Session::get('invoice_link')) }}" class="btn btn-success" role="button">Nueva Factura&nbsp<span class="glyphicon glyphicon-plus-sign"></span></a></h3>
    <div class="box-tools pull-right">
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="x_content">
    <table id="example" class="table table-striped responsive-utilities jambo_table">
        <thead>
            <tr class="headings">                              
                <th> Nº </th>
                <th>Razón </th>
                <th>Fecha </th>
                <th>Total </th>
                <th>Usuario </th>                                
                <th class=" no-link last"><span class="nobr">Acciones</span>
                </th>
            </tr>
        </thead>

        <tbody>
            <?php $even=true; ?>
            @foreach($invoices as $invoice)              
            <tr class="pointer">
              <td class="a-right a-right">{{$invoice->invoice_number}} </td>
              <td class="a-center ">{{$invoice->client_name}} </td>
              <td class="a-center ">{{$invoice->invoice_date}} </td>
              <td class="a-right a-right">{{$invoice->importe_neto}} </td>
              <td class="a-center ">{{$invoice->user_id}} </td>
              <td class="last"><a href="#">View</a></td>
              </tr>
            @endforeach 
        </tbody>

    </table>
  </div>
</div>

<div class="modal fade" id="formConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="frm_title">Borrar Producto</h4>
      </div>
      {{ Form::open(array('url' => 'productos/bulk','id' => 'formDelete')) }}
      <div style="display:none">
        {{ Former::text('public_id') }}
      </div>
      <div class="modal-body" id="frm_body"></div>
      <div class="modal-footer">
        {{ Form::submit('Si',array('class' => 'btn btn-primary col-sm-2 pull-right','style' => 'margin-left:10px;'))}}
        <button type="button" class="btn btn-danger col-sm-2 pull-right" data-dismiss="modal" id="frm_cancel">No</button>
      </div>
      {{ Form::close()}}
    </div>
  </div>
</div>

<script type="text/javascript">

  $(document).ready(function() {

	$('#formConfirm').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var public_id = button.data('id');
      var name = button.data('name');
      var modal = $(this);
      modal.find('.modal-body').text('¿ Está seguro de borrar ' + name + ' ?');
      document.getElementById("public_id").value = public_id;
  });

  $('input.tableflat').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
      });
  });

  var asInitVals = new Array();
  $(document).ready(function () {
    var oTable = $('#example').dataTable({
          "oLanguage": {
              "sSearch": "Buscar:"
          },
          "aoColumnDefs": [
              {
                  'bSortable': false,
                  'aTargets': [0]
              } //disables sorting for column one
            ],
          'iDisplayLength': 12,
          "sPaginationType": "full_numbers",
          "dom": 'T<"clear">lfrtip',
          "tableTools": {
              "sSwfPath": "{{URL::to('vendor/gentellela/js/Datatables/tools/swf/copy_csv_xls_pdf.swf')}}"
          }
      });

      $("tfoot input").keyup(function () {
          /* Filter on the column based on the index of this element's parent <th> */
          oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
      });
      $("tfoot input").each(function (i) {
          asInitVals[i] = this.value;
      });
      $("tfoot input").focus(function () {
          if (this.className == "search_init") {
              this.className = "";
              this.value = "";
          }
      });
      $("tfoot input").blur(function (i) {
          if (this.value == "") {
              this.className = "search_init";
              this.value = asInitVals[$("tfoot input").index(this)];
          }
      });
  } );




</script>

@stop
