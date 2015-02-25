@extends('app')

@section('content')

<table class="table table-striped">
    <caption>Lista de Proveedores</caption>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Dirección</th> 
        <th>Pais</th>
        <th>Telefono</th>
        <th>Descripción</th>
        <th>Editar</th>
        <th>Borrar</th>
    </tr>
    </thead>

	@foreach ($proveedores as $proveedor)
		<tr>
		<td><?php echo $proveedor["nombre"]; ?></td>
		<td><?php echo $proveedor["direccion"]; ?></td>
		<td><?php echo $proveedor["pais"]; ?></td>
		<td><?php echo $proveedor["telefono"]; ?></td>
		<td><?php echo $proveedor["descripcion"]; ?></td>
		<td>
		    <button class="btn btn-primary btn-xs" data-title="Editar" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button>
		</td>
		<td>
		    <button class="btn btn-danger btn-xs" data-title="Eliminar" data-whatever="<?php echo $proveedor['nombre']; ?>" data-borrarid="<?php echo $proveedor['id']; ?>" data-toggle="modal" data-target="#borrar"><span class="glyphicon glyphicon-trash"></span></button>        
		</td>
		</tr>
	@endforeach
</table>

<div class="modal fade" id="borrar" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Borrar este dato</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-warning-sign"></span> ¿Esta seguro de eliminar este dato?
                </div>
            </div>
            <div class="modal-footer ">
                <form method="get" action="proveedores/eliminar" name="eliminar" class="form-horizontal">    
                    <input class="proveedorid" id="proveedorid" type="hidden" name="proveedorid" value="" />
                    <input type="submit" name="borrarProveedor" class="btn btn-success" value="Si" />
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </form>
                
            </div>
        </div>
        <!-- /.modal-content --> 
    </div>
<!-- /.modal-dialog --> 
</div>



@stop

@section('footer_scripts')
<script type="text/javascript">
$(document).ready(function(){
    $('#borrar').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var recipient = button.data('whatever'); // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var numeroId = button.data('borrarid')
      var modal = $(this);
      modal.find('.modal-title').text('Borrar ' + recipient + ' id: '+ numeroId);
      modal.find('.proveedorid').val(numeroId)
    });    
});    
</script>
@stop
