	<link rel="stylesheet" href="<?= base_url();?>css/css_productos2/bootstrap.css"> 
     <link rel="stylesheet" href="<?= base_url();?>css/css_productos2/style.css"> 
       <link href="<?= base_url();?>css/css_productos/productos_global.css" rel="stylesheet" media="screen">
       <link href="<?= base_url();?>css/css_productos/main.css" rel="stylesheet">
    	<script src="<?= base_url()?>js/ajax.js"></script>
       <link href="<?= base_url();?>css/social-buttons.css" rel="stylesheet">
		<link rel="stylesheet" href="<?= base_url()?>css/css-locales/nuestros_locales.css">

<script type="text/javascript">
    // using JQUERY's ready method to know when all dom elements are rendered
    $(document).ready(function(){
      // set an on click on the button
      $("#button").click(function(){
        // get the time if clicked via an ajax get queury
        // see the code in the controller time.php
        $.get("<?= base_url();?>producto/agregar_visita?id=<?= $_GET['id']; ?>&idd=<?=$productos->id_local?>");                
        });
    });
</script>	    
	<section class="portfolio2 center" style="margin-top:65px">
	    <h1><img src="<?= base_url()?>/img/tres.png">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Pincha en <em>Ver Teléfono</em> y llama </h1>
	</section>

	<div class="page-content">
		<div class="container" id="pagina_producto">
			<div class="row-fluid" >
				<div class="span10 single-item">
					<div class="row-fluid">
						<div class="span6" id="foto_producto">
							<div id="itemsingle" class="carousel slide clearfix">							
								<div class="carousel-inner">
								  <div class="item active">
									<img src="<?= base_url();?>img/locales/<?= $productos->id_producto?>.jpeg" alt="slider detail dodolan manuk" style="background-size: 200px 200px;">
								  </div>
								  <div class="item">
									<img src="<?= base_url();?>img/locales/<?= $detalle_locales->id_local ?>_logo.png" alt="slider detail dodolan manuk">
								  </div>
								  
								</div>
								
								<ol class="carousel-indicators" id="imagenes_carousel">
								  <li data-target="#itemsingle" data-slide-to="0" class="active"><img src="<?= base_url();?>img/locales/<?= $productos->id_producto?>.jpeg" alt="slider detail dodolan manuk"></li>
								  <li data-target="#itemsingle" data-slide-to="1" class=""><img src="<?= base_url();?>img/locales/<?= $detalle_locales->id_local ?>_logo.png" alt="slider detail dodolan manuk"></li>
								</ol>							
							</div>														
						</div>
						<div class="span6 post bloque_chico" id="detalle_producto">
							<h3><?=$productos->titulo_producto;?></h3>
							<h7>Ingredientes: </h7> 
							<p><?= $productos->descrip_producto?></p>													
							<h7>Condiciones Adicionales del Reparto: </h7> 
							<p> <?=$detalle_locales->descrip_adicional?></p>
							<p>HashTag : <span class="label label-warning">#<?= $id_tipo_producto_nombre->nombre_tipo_producto ?></span></p>
							<h4>$<?= $productos->precio ?></h4>													
							<br><br><br>
							<a href="#test_modal" id="button" name="button" data-toggle="modal" style="margin-top:-20px" class="offset3 span7 btn btn-danger btn-large"><i class="icon-shopping-cart"></i> Ver Telefono</a>																			
						</div>									
					</div>
					<br><br><br><br>
					
					<div class="row-fluid" id="mapa-local">
						<div class="span12">
							<div class="tabbable">
							  <ul class="nav nav-tabs">
								<li class="active"><a href="detail.html#tab1" data-toggle="tab">Mapa local</a></li>
								<li class=""><a href="detail.html#tab2" data-toggle="tab">Sobre el local</a></li>
								<li class="" id="table3"><a href="detail.html#tab3" data-toggle="tab">Comidas relacionadas</a></li>
							  </ul>
							  <div class="tab-content">
								<div class="tab-pane active" id="tab1">
									<div id="map-canvas" style="width:100%; height:450px; frameborder:0; scrolling:no; marginheight:0; marginwidth:0;"></div>

								</div>
								<div class="tab-pane" id="tab2">
								 
								 	<table class="table table-hover">
									
									  <tbody>
									    <tr>
									      <td>Nombre del local:</td>
									      <td><?= $detalle_locales->nombre_local;?></td>
									    </tr>
									    <tr>
									      <td>Dirección:</td>
									      <td><?= $detalle_locales->direccion_local;?></td>
									    </tr>
									    <?php if($detalle_locales->horario_entrada!="" && $detalle_locales->horario_salida!="" ){ ?>
									    
									    <tr>
									      <td>Horario de atención:</td>
									      <td>
                                <li><font><font>Lunes a Viernes: de <?= $detalle_locales->horario_entrada?> hasta <?= $detalle_locales->horario_salida?></font></font></li>
                                <li><font><font>S&aacutebado y Domingo: de <?= $detalle_locales->horario_entrada_fds?> hasta <?= $detalle_locales->horario_salida_fds?></font></font></li>
                            </td>
									    </tr>
									    <?php } ?>
									    <tr>
									    <?php if($detalle_locales->sitio_referencia!=""){ ?>
									      <td>Sitio Web:</td>
									      <td><?= $detalle_locales->sitio_referencia?></td>
									    </tr>
										<?php } ?>
									  </tbody>
									</table>

								</div>
								<div class="tab-pane" id="tab3">
									<div class="row-fluid">
										<ul class="thumbnails">
										  <div class="span4 project bloque_producto " >
				                            <!-- Imagen de fondo-->
				                            <img src="<?= base_url();?>img/locales/<?=$productos_random[0]->id_producto?>.jpeg"   class="img-rounded"> 
				                            <!-- Logo del local-->
				                            <span class="overlay"> 
				                            </span>
				                            <div class="cnt">
				                                <!-- Titulo Del producto-->
				                                <h5><font><font><?= $productos_random[0]->titulo_producto?></font></font></h5>
				                                 <!-- Precio Del producto-->
				                                 <h5><font><font> $<?= $productos_random[0]->precio?></font></font></h5>
				                                <br><br>
				                                <a href="<?= base_url() ?>producto?id=<?= $productos_random[0]->id_producto ?>" class="btn btn-warning btn-large"><font><font>Ver detalles</font></font></a>
				                            </div>
				                        </div> 
										 <div class="span4 project bloque_producto " >
				                            <!-- Imagen de fondo-->
				                            <img src="<?= base_url();?>img/locales/<?=$productos_random[1]->id_producto?>.jpeg"  class="img-rounded"> 
				                            <!-- Logo del local-->
				                            <span class="overlay"> 
				                            </span>
				                            <div class="cnt">
				                                <!-- Titulo Del producto-->
				                                <h5><font><font><?= $productos_random[1]->titulo_producto?></font></font></h5>
				                                 <!-- Precio Del producto-->
				                                 <h5><font><font> $<?= $productos_random[1]->precio?></font></font></h5>
				                                <br><br>
				                                <a href="<?= base_url() ?>producto?id=<?= $productos_random[1]->id_producto ?>" class="btn btn-warning btn-large"><font><font>Ver detalles</font></font></a>
				                            </div>
				                        </div> 
										  <div class="span4 project bloque_producto " >
				                            <!-- Imagen de fondo-->
				                            <img src="<?= base_url();?>img/locales/<?=$productos_random[2]->id_producto?>.jpeg"  class="img-rounded"> 
				                            <!-- Logo del local-->
				                            <span class="overlay"> 
				                            </span>
				                            <div class="cnt">
				                                <!-- Titulo Del producto-->
				                                <h5><font><font><?= $productos_random[2]->titulo_producto?></font></font></h5>
				                                 <!-- Precio Del producto-->
				                                 <h5><font><font> $<?= $productos_random[2]->precio?></font></font></h5>
				                                <br><br>
				                                <a href="<?= base_url() ?>producto?id=<?= $productos_random[2]->id_producto ?>" class="btn btn-warning btn-large"><font><font>Ver detalles</font></font></a>
				                            </div>
				                        </div> 
										</ul>
									</div>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
				
				<!--break-->	
				<div class="span2" id="categoria_producto">
					<div class="row-fluid sidebar">
						<div class="span12">
							<h3>Sectores</h3>
							<ul class="nav nav-tabs nav-stacked">
							  <li><a>Viña del Mar</a></li>
							  <li><a>Valparaíso</a></li>
							  <li><a>Limache</a></li>
							  <li><a>Quillota</a></li>
							  <li><a>Quilpué</a></li>
							</ul>
						</div>
					</div>
				</div>
	
			</div>
		</div>
	</div>
	
	<!-- Inicio del pup-pop -->
<!-- Inicio del pup-pop -->
<div class="modal2 fade" id="test_modal">
    <div class="modal-header">
      <a class="close" data-dismiss="modal">&times;</a>
      <h3>Muchas gracias por visitar Foodland</h3>
    </div>
    
    <div class="modal-body">
        <br><br>
         <div class="span3 " style="font-size: 15px;">
          Puedes decirle al local que vienes de parte de FOODLAND, así nos ayudarás a difundir mejor este servicio
          <br>
          <br>
          Comparte este producto con tus amigos para que sepan lo que estas pidiendo
        </div>
        <div class="span2 offset1">
          <h4>El teléfono es:  </h4> 
          <h3><?= $detalle_locales->telefono_local;  ?></h3>
        </div>
    </div>
    <br><br>
    <div class="modal-footer">
      <?php if($this->session->userdata('user_profile')){ ?>
      <form action="<?= base_url()?>home/publicar_muro" method="post">
        <input type="hidden"  name="id" value="<?= $productos->id_producto ?>">
        <input type="hidden" name="nombre" value="<?= $productos->titulo_producto ?>">
        <input type="hidden" name="descripcion" value="<?= $productos->descrip_producto?>">
        <input type="hidden" name="id_local" value="<?= $detalle_locales->id_local?>">
        <input type="hidden" name="nombre_local" value="<?= $detalle_locales->nombre_local?>">
        <input type="submit" class="btn btn-facebook" value="Compartir en Facebook" target="_blank">
      </form>

      <?php }else{ ?>
          <a class="btn btn-facebook"href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url().'Producto?id='.$productos->id_producto ?>" target="_blank">
           <i class="icon-facebook"></i> Compartir en Facebook 
          </a>
      <?php } ?>
     <!-- <a href="#" class="btn btn-warning" data-dismiss="modal"> Ce</a> -->
    </div>
</div>
<!-- Termino pup-pop -->
<script type="text/javascript"
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaxkGlTnG8sZ2BHZ4Wf63959--Yfy1b-0&sensor=false">
</script>
<script type="text/javascript">
  function initialize() {
    var latlng = new google.maps.LatLng(<?= $detalle_locales->lat_local;?>, <?= $detalle_locales->long_local;?>);
    var mapOptions = {
      center: new google.maps.LatLng(<?= $detalle_locales->lat_local;?>, <?= $detalle_locales->long_local;?>),
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map-canvas"),
        mapOptions);
    var marker = new google.maps.Marker({
            position: latlng, 
            map: map, 
            title:'<?= $detalle_locales->nombre_local;?>'
            });
  }
  google.maps.event.addDomListener(window, 'load', initialize);

</script>
<script>
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 5000
            });
        });
    </script> 
<!-- Termino pup-pop -->
<script type="text/javascript" src='../js/scriptsproductos.js'> </script>








