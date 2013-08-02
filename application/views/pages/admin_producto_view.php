<div class="main">
    <div class="container">	
		<div class="span12">
			<?php if($info!=""){ ?>
			<div class="alert alert-success">
			  <h2><?= $info?></h2>
			</div>
			<?php } ?>
		</div>
		 <div class="span9 offset1">     <!-- lista tipo  productos -->		
			<h1>Tipo producto</h1>
      		<a class="btn btn-success" href="<?= base_url();?>admin_producto/nuevo_tipo_producto">Agregar nuevo Tipo Producto</a> 
			<div class="widget stacked widget-table action-table">				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Tipo productos</h3>
				</div>				
				<div class="widget-content">					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Borrar</th>
								<th>Editar</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($tipo_producto as $l) {
						?>
							<tr>
								<td><?= $l->id_tipo_producto?></td>
								<td><?= $l->nombre_tipo_producto  ?></td>
								<td> <a href="<?= base_url();?>admin_producto/borrar_tipo_producto?id= <?=$l->id_tipo_producto; ?>" class="btn btn-danger">Borrar</a></td>
								<td><a href="" class="btn btn-info">Editar</a></td>
							</tr>
						<?php	
						} ?>
						
							</tbody>
						</table>					
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->	
	    </div> <!-- Termino lista  tipo productos -->	

	

	   
	</div> <!-- /container -->   
</div> <!-- /main -->