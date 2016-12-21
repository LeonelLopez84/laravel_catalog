
<table><thead>
	<tr><th>ID</th><th>Razon Social</th><th>Ejecutivo</th></tr>
</thead>
<tbody>
<?php
foreach($clientes as $val){ ?>
<tr>
	<td><?php echo $val->ID; ?></td>
	<td><?php echo $val->RazonSocial; ?></td>
	<td><?php echo $val->Ejecutivo->Nombre; ?></td>
	</tr>
<?php
}
?>
	</tbody>
	</table>