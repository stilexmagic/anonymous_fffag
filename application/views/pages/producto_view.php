<<<<<<< HEAD
  <div id="projectwrap" style="background: url(<?= base_url().'img/tipo_producto/'.$id_tipo_producto.'.png'?>); background-size:100% 100%;">
=======
        <link rel="stylesheet" href="http://responsivewebinc.com/premium/metroman/style/font-awesome.css">
        <link href="<?= base_url();?>css/css_productos/productos_global.css" rel="stylesheet" media="screen">
        <link href="<?= base_url();?>css/css_productos/productos2.css" rel="stylesheet" media="screen">
        <link href="<?= base_url();?>css/css_productos/main.css" rel="stylesheet">
        <link href="<?= base_url();?>css/css_productos/main.css" rel="stylesheet">
        <link href="<?= base_url();?>css/social-buttons.css" rel="stylesheet">
        <link href="<?= base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
<!-- Imagen de inicio-->
<div id="projectwrap" style="background: url(<?= base_url().'img/tipo_producto/'.$id_tipo_producto.'.png'?>); background-size:100% 100%;">
>>>>>>> tester
            <header class="clearfix">
                <div class="container">
                    <div class="span5 offset3">
                        <div class="boxcolor">
                        <h1><font><font><?=$productos->titulo_producto;?></font></font></h1>
                        </div>
                    </div><!-- span12 -->
                </div><!-- container -->
            </header>
</div><!-- projectwrap -->



  <div id="caja"class="container" style="position:relative; top:30px;">
    
    
    <div class="row">
        <div class="span12 white-panel no-padding">
            <ul class="nav nav-tabs" style="height:25px;">
                <li class="active"><a href="#home" data-toggle="tab"> <img src="<?= base_url();?>img/producto/pizza.png" width="40" ><font><font>Producto</font></font></a></li>
                <li><a href="#profile" data-toggle="tab"> <img src="<?= base_url();?>img/producto/local.png" ><font><font>Detalles del Local</font></font></a></li>
                            </ul> <!-- End tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <div class="span5">
                        <div class="span5 offset1">
                          <h2><font><font><font><?= $productos->titulo_producto; ?></font></font></font></h2>
                        </div>
                        <ul class="green-checks">
                            <li><font><font>Descripci&oacuten: <?= $productos->descrip_producto?></font></font></li>
                            <li><font><font>Precio: $<?= $productos->precio ?></font></font></li>
                             <li><font><font>Sectores de entrega: <?php 
                                foreach ($sector_entregas_particular as $s) {
                                 echo   $s->nombre_sector_entrega." " ; 
                                }
                              
                              ?></font></font></li>
                           
                        </ul>

                        <a href="#test_modal" data-toggle="modal" class="btn btn-warning btn-large offset1"><font><font>Ver Telefono</font></font></a>

                    
                    </div>
                    <div class="span5  pull-right">
                        <img src="<?= base_url();?>img/locales/<?= $productos->id_producto?>.jpeg" class="img-tilt">
                        <p class="small-text pull-right"><font><font>Imagen Real del local</font></font></p>
                    </div>
                </div>

                <div class="tab-pane" id="profile">
                    <div class="span5">
                         <img src="<?= base_url();?>img/locales/<?= $detalle_locales->id_local ?>_logo.png" class="img-tilt">

                    </div>
                    <div class="span5 pull-right">
                        <h2><font><font><?= $detalle_locales->nombre_local;?></font></font></h2>

                        <ul class="green-checks">
                        
                            <li><font><font>Direccion: <?= $detalle_locales->direccion_local;?></font></font></li>
                            <li><font><font>E-mail: <?= $detalle_locales->email  ?></font></font></li>
                            <li><font><font>Sectores de Entrega: <?php foreach ($sector_entregas_particular as $s) {
                                 echo   $s->nombre_sector_entrega." " ; 
                                } ?></font></font></li>
                            
                        </ul>

                        <a href="#test_modal"  data-toggle="modal" class="btn btn-warning btn-large offset1"><font><font>Ver Telefono</font></font></a>

                     </div>
                </div>

            </div> <!-- End .tab-content -->
        </div>
<<<<<<< HEAD
=======
    <div class="span12" style="margin-bottom:50px" >
  <div id="map-canvas" style="width:100%; height:450px; frameborder:0; scrolling:no; marginheight:0; marginwidth:0;"></div>
</div>
    </div>
</div>
<!--Termino del contenido-->
>>>>>>> tester




<<<<<<< HEAD
    </div>


</div>


<div class="modal fade" id="test_modal">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Muchas gracias por visitar Foodland</h3>
  </div>
  <br><br>
  <div class="modal-body">
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
    <a class="btn btn-facebook"href="https://www.facebook.com/sharer/sharer.php?u=<?= base_url().'Producto?id='.$productos->id_producto ?>" target="_blank">
  <i class="icon-facebook"></i> Compartir en Facebook 
</a>
   <!-- <a href="#" class="btn btn-warning" data-dismiss="modal"> Ce</a> -->
  </div>
=======
<!-- El mapa del sitio -->


<!-- Inicio del pup-pop -->
<div class="modal fade" id="test_modal">
    <div class="modal-header">
      <a class="close" data-dismiss="modal">&times;</a>
      <h3>Muchas gracias por visitar Foodland</h3>
    </div>
    
    <div class="modal-body">
        <br><br>º
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
>>>>>>> tester
</div>



 <!-- Scripts producto Pop - -->
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

<script type="text/javascript" src='../js/scriptsproductos.js'> </script>
