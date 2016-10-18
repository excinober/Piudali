<?php include "header.php"; ?>

<div class="container">		
	<?php include "usuario/menu.php"; ?>			
	<div class="col-xs-12">
		<h1>Detalle Orden <small><small></small></small></h1>
	<hr>
	</div>		
	<div class="col-xs-12 col-md-6">
		<div class="well well-sm"><b>Subtotal Antes de Iva:</b> $<?=number_format($orden["detalle"]["subtotal"])?></div>
		<div class="well well-sm"><b>Descuentos Cupón:</b> $<?=number_format($orden["detalle"]["descuentos"])?></div>
		<div class="well well-sm"><b>Descuento Escala %:</b> <?=$orden["detalle"]["porc_escala"]?>%</div>
		<div class="well well-sm"><b>Descuento Escala $:</b> $<?=number_format($orden["detalle"]["desc_escala"])?></div>
		<div class="well well-sm"><b>Total Neto Antes de Iva:</b> $<?=number_format($orden["detalle"]["neto_sin_iva"])?></div>
		<div class="well well-sm"><b>Iva:</b> $<?=number_format($orden["detalle"]["impuestos"])?></div>
		<div class="well well-sm"><b>Flete:</b> $<?=number_format($orden["detalle"]["costo_envio"])?></div>			
		<div class="well well-sm"><b>Total:</b> $<?=number_format($orden["detalle"]["total"])?></div>			
	</div>
	<div class="col-xs-12 col-md-6">
		<div class="well well-sm"><b>Número de Orden:</b> <?=$orden["detalle"]["num_orden"]?></div>
		<div class="well well-sm"><b>Fecha:</b> <?=$orden["detalle"]["fecha_pedido"]?></div>
		<div class="well well-sm"><b>Estado:</b> <?=$orden["detalle"]["estado"]?></div>
	</div>
	<div class="col-xs-12">
		<h2>Productos</h2>
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="text-center">DESCRIPCIÓN</th>
					<th class="text-center">CANTIDAD</th>
					<th class="text-center">PRECIO</th>					
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($orden["productos"] as $key => $producto) {
				?>
					<tr>
						<td><?=$producto["cod_producto"]." - ".$producto["nombre_producto"]?></td>
						<td class="text-center"><?=$producto["cantidad"]?></td>
						<td class="text-center"><?=$producto["precio"]?></td>						
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>	
</div>
<br>
<br>
<?php include "footer.php"; ?>