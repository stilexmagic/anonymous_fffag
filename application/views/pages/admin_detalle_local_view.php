<div class="container">
	<?php if($title!=""){ ?>
	<div class="alert alert-success">
		<?= $title?>
	</div>
	<?php } ?>
	<div class="row">
		<div class="span12">
			<div class="span3">
				<a class="btn btn-info btn-large" href="javascript:history.back(1)">Volver al listado de  locales</a>
				<br>
				<br>
			</div>
		</div>
		<div class="span12">
      		<h1><?= $local->nombre_local?></h1>
			<div class="widget stacked">
					
				<div class="widget-header">
					<i class="icon-bookmark"></i>
					<h3>Proiedades del local</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<div class="shortcuts">
						<a href="<?= base_url()?>admin_detalle_local/detalle_producto?id=<?= $id?>" class="shortcut">
							<i class="shortcut-icon icon-list-alt"></i>
							<span class="shortcut-label">Productos del local</span>
						</a>
							<a href="<?= base_url()?>admin_detalle_local/editar_local?id=<?= $id?>" class="shortcut">
							<i class="shortcut-icon icon-th"></i>
							<span class="shortcut-label">Editar local</span>

							<a href="<?= base_url()?>admin_detalle_local/borrar_local?id=<?=$id?>" class="shortcut">
							<i class="shortcut-icon icon-remove"></i>
							<span class="shortcut-label">Borrar Local</span>
						</a>
					
					</div> <!-- /shortcuts -->	
					
				</div> <!-- /widget-content -->
				
			</div> <!-- /widget -->
      	</div>

      	<div class="span6">
      		
      		<div class="widget stacked">
					
				<div class="widget-header">
					<i class="icon-star"></i>
					<h3>Estadisticas del local</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<div class="stats">
						
						<div class="stat">
						<?php 			
						$visitas = 0;
						foreach ($visitas_totales as $visita) {
							foreach ($visita as $key) {
								# code...
							
							$visitas = $visitas + $key;
						} }
						?>
							<span class="stat-value"><?=$visitas?></span>									
							Cantidad totales de visita
						</div> <!-- /stat -->
						<?php 			
						$visitas = 0;
						foreach ($visitas_diarias as $visita) {
		
							$visitas = $visitas + $visita['visita'];
						}
						?>						
						<div class="stat">
							<span class="stat-value"><?=$visitas?></span>									
							Cantidad de visitas hoy
						</div> <!-- /stat -->
						<?php 			
						$visitashoy = 0;
						foreach ($visitas_diarias as $visita) {
		
							$visitashoy = $visitashoy + $visita['visita'];
						}
						?>	
						<?php 			
						$visitasayer = 0;
						foreach ($visitas_dia_anterior as $visita) {
		
							$visitasayer = $visitasayer + $visita['visita'];
						}
						$porcentajevisitas = (($visitashoy-$visitasayer)/$visitasayer)*100;

						?>							
						<div class="stat">
							<span class="stat-value"><?=$porcentajevisitas?>%</span>									
							Porcentaje de aumento de visitas con respecto a ayer
						</div> <!-- /stat -->
						
					</div> <!-- /stats -->
				</div> <!-- /widget -->	
		</div>
	</div>
	  	<div class="span6" align="justify">
      		
      		<div class="widget stacked">
					
				<div class="widget-header">
					<i class="icon-th"></i>
					<h3>Datos del local</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
							<div class="span4 offset1">
								<p>
						    		<strong>ID</strong>: <?= $local->id_local ?> <br><br>
						    		<strong>Nombre</strong>: <?= $local->nombre_local ?> <br><br>
									<strong>Dirección</strong>: <?= $local->direccion_local ?><br><br>
									<strong>Teléfono</strong>: <?= $local->telefono_local ?> <br><br>
									<strong>Email</strong>: <?= $local->email ?> <br><br>
									<strong>Horario semana</strong>: de <?= $local->horario_entrada ?> a <?= $local->horario_salida ?> hrs <br><br>
									<strong>Horario fin de semana</strong>: de <?= $local->horario_entrada_fds ?> a <?= $local->horario_salida_fds ?> hrs <br><br>
									<strong>Sectores de reparto</strong>: <?php foreach ($sectores as $s) { echo $s->nombre_subsector_entrega.", ";} ?> <br><br>
									<strong>Cond. adicionales reparto</strong>: <?= $local->descrip_adicional ?> <br><br>
									<strong>Sitio de referencia</strong>: <a href=""><?=$local->sitio_referencia  ?></a> <br><br>

						    	</p>
						    </div>
						    <div class="span3 offset2" ><a href="" class="btn btn-info btn-large">Editar</a></div>
									
				</div> <!-- /widget -->	
		</div>
	</div>


	
</div>
