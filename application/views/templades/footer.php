    <footer id="footer">
            <div class="container">
                <div class="row" style="color:white;">
<<<<<<< HEAD
                    <div class="span3 offset1">
                        <br><br>
                        <img src="<?= base_url();?>img/logo2.png" width="250" height="40"> <sup style="color:white;">2.0</sup>
                        <div class="span3" style="font-size:12px; margin-left:0px;">
                        <h5><font><font>Foodland es nuestra empresa emprendedora e innovadora, 
                            formada por un grupo de jóvenes universitarios el año 2012, cuya misión es 
                            mostrar, a través de esta plataforma, una gran gama de locales delivery de 
                            la quinta región (y próximamente en todo Chile) bajo nuestro catálogo, con 
                            el fin de conseguir que nuestros usuarios, de forma práctica y fácil, pidan 
                            los productos que ofrecen nuestros asociados, facilitando de esta forma, la 
                            conexión entre las personas y los locales.</font></font></h5>
                        <p class="copyright"><font><font>
                            FoodLand.cl © 2013 
                        </font></font></p>
=======
                    <div class="span4 offset1">
                        <div style="margin-left:30px">
                            <img src="<?= base_url();?>img/logo2.png" width="250" height="40"> <sup style="color:white;">BETA</sup>
                        </div>
                        <div class="">
                            <div class="span3">
                            <br>
                            <h5><font><font>Foodland es nuestra empresa emprendedora e innovadora, 
                                formada por un grupo de jóvenes universitarios el año 2012, cuya misión es 
                                mostrar, a través de esta plataforma, una gran gama de locales delivery de 
                                la quinta región (y próximamente en todo Chile) bajo nuestro catálogo, con 
                                el fin de conseguir que nuestros usuarios, de forma práctica y fácil, pidan 
                                los productos que ofrecen nuestros asociados, facilitando de esta forma, la 
                                conexión entre las personas y los locales.</font></font></h5>
                            <p class="copyright"><font><font>
                                FoodLand.cl © 2013 
                            </font></font></p>
                            </div>
>>>>>>> tester
                        </div>
                    </div>
                    <div class="span3">
                        <br><br><br>
                        <h2><font><font>Enlaces </font></font></h2>
                        <ul class="unstyled footer-links">
                            <h4>
                            <li><a href="<?= base_url();?>" class="flink">Inicio</a></li>
                            <li><a href="<?= base_url()?>terminos" class="flink"><font><font>Términos y condiciones</font></font></a></li>
                            <li><a href="<?= base_url()?>nosotros" class="flink"><font><font>Sobre nosotros</font></font></a></li>
                            <li><a href="<?= base_url();?>team" class="flink"><font><font>Foodland Team</font></font></a></li>
                            <li><a href="<?= base_url()?>admin" class="flink"><font><font>Foodland admin</font></font></a></li>                            
                            </h4>                            
                        </ul>
                    </div>
                    <div class="span3 contact ">
                        <br><br><br>
                        <h3 class="center"><font>Contacto</font></h3>
                        <form action="" method="post">
                            <input type="text" placeholder="Tu nombre">
                            <input type="text" placeholder="Tu Mail">
                            <textarea rows="3" placeholder="Mensaje"></textarea>
                            <input type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
                <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                            <a href="https://www.facebook.com/FoodLandValparaiso" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="https://twitter.com/FoodLand_Valpo" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                                             
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            © 2013 Foodland.cl Todos los derechos reservados.
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </footer>
    <script src="http://www.w3resource.com/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>  
<script src="http://www.w3resource.com/twitter-bootstrap/twitter-bootstrap-v2/docs/assets/js/bootstrap-typeahead.js"></script>
<script>  
 var subjects = [<?php foreach ($buscar as $b ) {
    $var= explode("/", $b);
     echo "'$var[1]/$var[2]',";
 } ?>];   
$('#search').typeahead({source: subjects})  
</script>  
        <script src="<?= base_url();?>js/jquery-latest.js"></script>
        <script src="<?= base_url();?>js/modernizr.js"></script>
        <script src="<?= base_url();?>js/bootstrap.js"></script>
        <script src="<?= base_url();?>js/stellar.js"></script>
        <script src="<?= base_url();?>js/jquery.isotope.min.js"></script>
        <script src="<?= base_url();?>js/retina.js"></script>
        <script src="<?= base_url();?>js/portfolio.js"></script>
        <script src="<?= base_url();?>js/contenido/supersized.3.2.7.min.js"></script>
        <script src="<?= base_url();?>js/contenido/supersized-init.js"></script>
<body>
<html>
