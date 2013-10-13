<link rel="stylesheet" href="<?= base_url()?>css/css-locales/nuestros_locales.css">
<link rel="stylesheet" href="<?= base_url()?>css/css-locales/locales.css">


<!-- Main Area -->
<div class="main-area" id="contenido_pagina_locales">
	<div class="container">
		<div class="row" id="contenido_pagina">
			<div class="span12 center">
                <h1 class="big-heading"><font><font>Nuestros Locales</font></font></h1>
                <h4 class="sub-heading"><font><font>Te mostramos todos los locales delivery asociado a Foodland</font></font></h4>
           	</div>
           <div class="span5 center">
           	<h4 class="sub heading"><?= $titulo  ?></h4>
           </div>
			<div class="span12" id="todos_los_locales"> <!--- Inicio Bloque de la izquierda-->
				
				<!-- inicio carrousel -->
				<div class="span6 center" id="carousel_locales">
				<?php 
				if($locales_ramdom==""){
					?>
					<div class="span16 center">
						<div class="alert alert-error">
					 <h2>No se ha encontrado el resultado de la busqueda </h2>
					</div>
					</div>
				<?php
				}
				if($locales_ramdom!=""){ ?>
					<div class="post">
					<div id="myCarousel" class="carousel slide bloque_carrousel">
					  <!-- Carousel items -->
					  <div class="carousel-inner">
						  	<?php 
						  		
							  	$active="";
							  	$cont=0;
							  	foreach ($locales_ramdom as $lr ) { 
							  		if($cont==0){
							  			$cont++;
							  			$active="active";
							  		}else{
							  			$active="";
							  		}
						  	?>
						  	<div class=" <?= $active ?> item">
						    	<a href="<?= base_url()?>perfil_local?id=<?= $lr->id_local?>">
						    		<img src="<?=base_url();?>img/locales/<?= $lr->id_local?>_logo.png" alt="Placeholder">
						    		<span class="strapline"><?= $lr->nombre_local ?><br><span>Local ubicado en : <?= $lr->direccion_local  ?></span></span>
						    	</a>
						    </div>
						    <?php 
								}
							 ?>
					  </div>
					  <!-- Carousel nav -->
					  <a class="carousel-control left" href="locales.html#myCarousel" data-slide="prev">‹</a>
					  <a class="carousel-control right" href="locales.html#myCarousel" data-slide="next">›</a>
					</div>

				</div>
				<?php } ?>
				</div>
				
				<!-- Termino carrousel -->

			<!-- inicio bloque de la derecha -->
			<div class="span4 offset1">
				<!-- inicio buscador -->
				<!--
				<form class="form-inline well">
					<div class="input-append">
						<input class="span3" size="16" type="text" placeholder="Buscar Local"><button class="btn btn-warning" type="button">Ir</button>
					</div>
				</form>
			-->
				<!-- termino buscador -->
				
				
				<div class="row">
					<!-- inicio categorias -->
					<div class="span4 center"><h4>Busqueda por...</h4></div>

					<div class="span2" id="buscadorlocal">
						<form class="form-search" action="<?= base_url()?>nuestros_locales/buscarlocales" method="post">
							<div class="input-append" id="buscadorlocal">
								<input type="text" name="searchlocales" id="searchlocales" class="search-query" placeholder="¿Qué local estás buscando?" autocomplete="off" required>
								<button type="submit"  class="btn btn-warning"><i class="icon icon-search"></i></button>
							</div>

						</form>
					</div>
					<div class="span4 side-nav">
						<ul class="nav nav-tabs nav-stacked">
							<li class="title"><a href="<?= base_url() ?>nuestros_locales">Todo</a></li>
						</ul>
					</div>
					<div class="span2 side-nav">
						<ul class="nav nav-tabs nav-stacked">
							<li class="title"><a href="">Categoria</a></li>
							<?php  foreach ($tipo_productos as $tproducto ) { ?> <!-- el format 1 es categoria el 2 es ubicacion -->
							<li><a href="<?= base_url()?>/nuestros_locales/buscar?fomat=1&id=<?= $tproducto->id_tipo_producto?>&nombre=<?= $tproducto->nombre_tipo_producto?>"><?= $tproducto->nombre_tipo_producto;?></a></li>
							<?php } ?>
						</ul>
					</div>
					<!-- termino categorias -->
					<!-- inicio ubicacion -->
					<div class="span2 side-nav">
						<ul class="nav nav-tabs nav-stacked">
							<li class="title"><a href="">Ubicación</a></li>
							<?php foreach ($sector_entregas as $s) { ?>
								<li><a href="<?= base_url()?>/nuestros_locales/buscar?fomat=2&id=<?= $s->id_sector_entrega?>&nombre=<?= $s->nombre_sector_entrega ?>"><?= $s->nombre_sector_entrega ?></a></li>
							<?php } ?>
							
						</ul>
					</div>
					<!-- termino ubicacion -->
				</div>
			</div>
			<!-- termino bloque de la derecha -->

			
			</div>
			<div class="span12" style="margin-top:100px;">
				<!-- Inicio bloque chico -->
				<div class="row">
					<?php
					if($locales!=""){
					 foreach ($locales as $l ) { ?>
					<div class="span4" id="imagenes_locales">
						<div class="post bloque_chico">
							<a href="<?= base_url()?>perfil_local?id=<?= $l->id_local?>"><img src="<?= base_url();?>img/locales/<?= $l->id_local?>_logo.png" id="imagen_locales" alt="Placeholder"></a>
							<div class="summary">
								<h2><a href=""><?= $l->nombre_local  ?></a></h2>
								<p><?= $l->direccion_local ?></p>

							</div>
						</div>
					</div>
					<?php } }?>
					
				</div>

			</div>
				<!-- Termino bloque chico -->
			

		</div>
	</div>
<!-- End Main Area -->
</div>
    <script src="http://www.w3resource.com/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
<script src="http://www.w3resource.com/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-typeahead.js"></script>
<script>  
 var subjects = [<?php foreach ($locales as $b ) {

     echo "'$b->nombre_local',";
 } ?>];   
$('#searchlocales').typeahead({source: subjects})  
</script> 
<!-- Javascript -->
<script src="<?= base_url();?>js/js-locales/jquery.min.js"></script>
<script src="<?= base_url();?>js/js-locales/jquery.tweet.js"></script>
<script src="<?= base_url();?>js/js-locales/jflickrfeed.min.js"></script>
<script src="<?= base_url();?>js/js-locales/magazine.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 2000
            });
        });
    </script> 
