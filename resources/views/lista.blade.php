@extends('master')

@section('title', 'Page Title')


@section('content')
  <table class="table table-striped" id="myTable">
    <thead>
	<tr>
		<th>ID</th>
		<th>RFC</th>
		<th>Razon Social</th>
		<th>Status</th>
		<th>Contribuyente</th>
		<th>Estado</th>
		<th>País</th>
	
	</tr>
</thead>
<tbody>

<?php
foreach($clientes as $val){ 

	?>
<tr>
	<td><?php echo $val->ID; ?></td>
	<td><?php echo $val->Rfc; ?></td>
	<td><?php echo $val->RazonSocial; ?></td>
	<td><?php echo $val->Status ? 'Activo' : 'Inactivo'; ?></td>
	<td><?php echo $val->Contribuyente ? 'Si' : 'No'; ?></td>
	<td><?php echo $val->getEstado->Nombre; ?></td>
	<td><?php echo $val->getPais->Nombre; ?></td>
	</tr>
<?php
}
?>
	</tbody>
	</table>
@endsection