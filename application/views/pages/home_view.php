        
        <div id="myCarousel" class="carousel slide" style="top:-100px; height:600px; ">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item">
                <img src="<?= base_url();?>img/slider/1.jpg" width="100%">
                
            </div>
            <div class="item">
                <img src="<?= base_url();?>img/slider/2.jpg" width="100%" >


            </div>
            <div class="item"><img src="<?= base_url();?>img/slider/3.jpg" width="100%"></div>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
        

       
        <!--################ WRAP START ################-->


            <!--################ HEADER START ################-->
            
         

            <section class="portfolio" style="position:relative; top:-120px;">

                <div class="container">

                    <div class="row">
                        <div class="span12 center">
                            <h1 class="big-heading"><font><font>Productos por llamado Telefonico</font></font></h1>
                            <h4 class="sub-heading"><font><font>Te mostramos lo mejor de nuestra linea telefonica...</font></font></h4>
                 </div>

                     

                        <div class="span12  project" style="height:400px;">

                            <img src="<?= base_url();?>img/slider/1.jpg"  class="project-img">
                            <span class="overlay"> 
                                <img src="<?= base_url();?>img/locales/logo.png" alt="" style="width:120px; height:120px; position:relative; left:790px; top:20px;">
                            </span>
                            <div class="cnt">
                                
                                <h1><font><font>Sushi Tempura
                                        <?php 
                                            foreach ($productos as $producto){
                                                echo "<pre>$producto->titulo_producto</pre>";
                                                echo "<pre>$producto->precio</pre>";
                                            }   
                                         ?>
                                 </font></font></h1>
                                <strong><font><font>10 piezas de Sake roll : salmon tempurizado, queso crema cubierto con palta</font></font></strong>
                                <a href="productos.php" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                            </div>





                        </div>
                    </div>

                    <div class="row">
                        <br>
                        <div class="span6 project">

                            <img src="<?= base_url();?>img/slider/1.jpg" alt="" class="project-img">
                            <span class="overlay">
                                <img src="<?= base_url();?>img/locales/logo.png" alt="" style="width:70px; height:70px; position:relative; left:350px; top:20px;">
                            </span>
                            <div class="cnt">
                                <h5><font><font>Suhi Premiun</font></font></h5>
                               <div class="span4 offset1"><strong><font><font>10 piezas de camarón acevichado relleno con lechuga, palta camarón marinado con limón.</font></font></strong>
                                </div> 
                                <a href="producto.php" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                                
                            </div>





                        </div>

                        <div class="span6 project">

                            <img src="<?= base_url();?>img/slider/2.jpg" alt="" class="project-img">
                            <span class="overlay">
                                <img src="<?= base_url();?>img/locales/logo.png" alt="" style="width:70px; height:70px; position:relative; left:350px; top:20px;">
                            </span>
                            <div class="cnt">
                                <h5><font><font>Sushi de pene</font></font></h5>
                                <strong><font><font>10 piezas de camarón acevichado relleno con lechuga, palta camarón marinado con limón.</font></font></strong>
                                <a href="producto.php" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                            </div>





                        </div>
                       
                        
                </div>
                <div class="row">
                        <br>
                        <div class="span4 project">

                            <img src="<?= base_url();?>img/slider/1.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Pizza Napolitana</font></font></h5>
                                <strong><font><font>Queso, jamon. </font></font></strong>
                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                            </div>





                        </div>

                        <div class="span4 project">

                            <img src="<?= base_url();?>img/slider/2.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Pizza Española</font></font></h5>
                                <strong><font><font>pizza mas bebida</font></font></strong>
                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                            </div>





                        </div>
                        <div class="span4 project">

                            <img src="<?= base_url();?>img/slider/3.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Pizza Italiana</font></font></h5>
                                <strong><font><font>Esta es la descripción de su proyecto ... </font></font></strong>
                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                            </div>

                        </div>
                        




                    </div>
                </div>


                <div class="container">
                    <br><br>
                    <div class="row">
                        <div class="span12 center">
                            <h1 class="big-heading"><font><font>Productos por en Valparaiso </font></font></h1>
                            <h4 class="sub-heading"><font><font></font></font></h4>
                            <br> <br>
                 </div>

                     

                        <div class="span12  project" style="height:400px;">

                            <img src="<?= base_url();?>img/slider/1.jpg"  class="project-img">
                            <span class="overlay"> 
                                <img src="<?= base_url();?>img/locales/logo.png" alt="" style="width:120px; height:120px; position:relative; left:790px; top:20px;">
                            </span>
                            <div class="cnt">
                                
                                <h1><font><font>Sushi Tempura </font></font></h1>
                                <strong><font><font>10 piezas de Sake roll : salmon tempurizado, queso crema cubierto con palta</font></font></strong>
                                <a href="productos.php" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                            </div>





                        </div>
                    </div>

                    <div class="row">
                        <br>
                        <div class="span6 project">

                            <img src="<?= base_url();?>img/slider/1.jpg" alt="" class="project-img">
                            <span class="overlay">
                                <img src="<?= base_url();?>img/locales/logo.png" alt="" style="width:70px; height:70px; position:relative; left:350px; top:20px;">
                            </span>
                            <div class="cnt">
                                <h5><font><font>Suhi Premiun</font></font></h5>
                               <div class="span4 offset1"><strong><font><font>10 piezas de camarón acevichado relleno con lechuga, palta camarón marinado con limón.</font></font></strong>
                                </div> 
                                <a href="producto.php" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                                
                            </div>





                        </div>

                        <div class="span6 project">

                            <img src="<?= base_url();?>img/slider/2.jpg" alt="" class="project-img">
                            <span class="overlay">
                                <img src="<?= base_url();?>img/locales/logo.png" alt="" style="width:70px; height:70px; position:relative; left:350px; top:20px;">
                            </span>
                            <div class="cnt">
                                <h5><font><font>Sushi de pene</font></font></h5>
                                <strong><font><font>10 piezas de camarón acevichado relleno con lechuga, palta camarón marinado con limón.</font></font></strong>
                                <a href="producto.php" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                            </div>





                        </div>
                       
                        
                </div>
                <div class="row">
                        <br>
                        <div class="span4 project">

                            <img src="<?= base_url();?>img/slider/1.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Pizza Napolitana</font></font></h5>
                                <strong><font><font>Queso, jamon. </font></font></strong>
                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                            </div>





                        </div>

                        <div class="span4 project">

                            <img src="<?= base_url();?>img/slider/2.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Pizza Española</font></font></h5>
                                <strong><font><font>pizza mas bebida</font></font></strong>
                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                            </div>





                        </div>
                        <div class="span4 project">

                            <img src="<?= base_url();?>img/slider/3.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Pizza Italiana</font></font></h5>
                                <strong><font><font>Esta es la descripción de su proyecto ... </font></font></strong>
                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver detalles</font></font></a>
                            </div>

                        </div>
                        




                    </div>
                </div>


            </section>
            <section class="portfolio rev" style=" position:relative; top:-120px;">
                
                
                <div class="container" id="portfolio">
                    
                    <div class="row">

                        <div class="span12 center" style=" position:relative; top:-50px;">
                            <h1 class="big-heading"><font><font>Productos por Categoria</font></font></h1>
                        </div>

                       <div class="span12">
                            <div id="filters_container">
                                <ul id="filters">
                                    <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter="*" class="active"><font><font>Sushi</font></font></a></li>
                                    <li class="separator"><font><font>/</font></font></li>
                                    <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter=".art"><font><font>Pizzas</font></font></a></li>
                                    <li class="separator"><font><font>/</font></font></li>
                                    <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter=".illustration"><font><font>Comida Rapida</font></font></a></li>
                                    <li class="separator"><font><font>/</font></font></li>
                                    <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter=".print"><font><font>Comida China</font></font></a></li>
                                    <li class="separator"><font><font>/</font></font></li>
                                    <li><a href="http://uexel.us/themes/purity/multipage/wide/portfolio.html#" data-filter=".web"><font><font>Otros</font></font></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>        

                    <div class="row isotope" id="portfolio-container" style="position: relative; overflow: hidden; height: 704px;">
                        <div class="span3 project art isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px);">

                            <img src="<?= base_url();?>img/slider/1.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>



                        <div class="span3 project web isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(300px, 0px, 0px);">

                            <img src="<?= base_url();?>img/slider/2.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>

                        <div class="span3 project illustration isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(600px, 0px, 0px);">

                            <img src="<?= base_url();?>img/slider/3.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>

                        <div class="span3 project web print isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(900px, 0px, 0px);">

                            <img src="<?= base_url();?>img/slider/5.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>
                        <div class="span3 project art print isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 286px, 0px);">

                            <img src="<?= base_url();?>img/slider/3.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>
                        <div class="span3 project art web illustration isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(600px, 286px, 0px);">

                            <img src="<?= base_url();?>img/slider/1.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>
                        <div class="span3 project print web isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(300px, 418px, 0px);">

                            <img src="<?= base_url();?>img/slider/2.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>
                        <div class="span3 project  web isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(900px, 418px, 0px);">

                            <img src="<?= base_url();?>img/slider/4.jpg" alt="" class="project-img">
                            <span class="overlay"></span>
                            <div class="cnt">
                                <h5><font><font>Proyecto</font></font></h5>

                                <a href="http://uexel.us/themes/purity/multipage/wide/single-portfolio.html" class="btn btn-normal"><font><font>Ver más detalles</font></font></a>
                            </div>





                        </div>






                    </div>
                </div>


            </section>

        

        <!--################ PUSH WILL KEEP THE FOOTER AT BOTTOM IF YOU WANT TO CREATE OTHER PAGES ################-->

        <div id="push"></div>