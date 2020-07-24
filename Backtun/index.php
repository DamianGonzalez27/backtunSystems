 <?php 

        $titulo = 'BacktunSystems';

        include_once 'php/config.inc.php';
        include_once 'plantillas/documento-apertura.inc.php';
        include_once 'plantillas/documento-nav.inc.php';
    
  ?>




<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!--Aqui esta el carrusel del slider-->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="imagenes/imagen1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Conoce nuestros servicios de infraestructura</h1>
              <p>Te ayudamos con la planeacion y el despliegue de tu proyecto.</p>
              <p>Siempre bajo la filosofia de calidad antes que cantidad.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php  echo RUTA_TIENDA ?>" role="button">Conoce m&aacute;s</a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="second-slide" src="imagenes/imagen2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Servicios de desarrollo y despliegue de software</h1>
              <p>Trabajamos siempre con la filosofia de OpenSource en donde creemos fielmente en que el despliegue y el uso del software no debe tener limitaciones sobre su uso.</p>
              <p>De la comunidad para la comunidad</p>
              <p><a class="btn btn-lg btn-primary" href="<?php  echo RUTA_TIENDA ?>" role="button">Leer m&aacute;s</a></p>
            </div>
          </div>
        </div>

        <div class="item">
          <img class="third-slide" src="imagenes/imagen3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Capacitacion y educacion de calidad</h1>
              <p>Creemos fielmente que la educacion es la clave para el desarrollo personal y comunitario, por lo cual siempre brindaremos la informacion necesaria para que nuestros clientes esten satisfechos con todos nuestros servicios</p>
              <p>No solo es trabajar por trabajar, es trabajar y enseñar para mejorar.</p>
            </div>
          </div>
        </div>
      </div>

      


      

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

     <div class="container marketing">


      <!--Aqui empieza el cuerpo del index -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Marketing digital. <span class="text-muted">Campañas y estrategias.</span></h2>
          <p class="lead">En el mundo actual es de vital importancia estar siempre conectados con nuestros clientes.</p>
          <p>Las redes sociales se estan convirtiendo en un medio importante para la captacion de mas clientes y mejorar siempre nuestras cifras.</p>
         

        </div>
        
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="imagenes/marketing.png">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Desarrollo de Software. <span class="text-muted">Proyectos a medida.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image " src="imagenes/software.png">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Redes. <span class="text-muted">Planeacion, mantenimiento e instalacion.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="imagenes/redes.jpg">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Help-Desk. <span class="text-muted">Soporte tecnico e infraestructura.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image " src="imagenes/help.jpg">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Capacitacion. <span class="text-muted">Cursos y capacitacion.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="imagenes/curso.jpg">
        </div>
      </div>


      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"></h2>
        </div>
        <div class="col-md-5">
          
        </div>
      </div>

      <!--Estas son las imagenes de los creadores del sitio -->
      <div class="container desarrollado">
      <div class="row">
        <div class="col-lg-4">
          <img>
          <h2></h2>
          <p></p>
         
        </div><!-- /.col-lg-4 -->

        <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="imagenes/damian.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Damian Gonzalez</h2>
          <p>Ingeniero en Sistemas Computacionales. Egresado de Tecnologico de Estudios Superiores de Huixquilucan. Desarrollador de software y joven emprendedor, Fundador y CEO de BacktunSystems</p>
        
        </div><!-- /.col-lg-4 -->

        </div>

        
      </div><!-- /.row -->

       <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
     <?php 

     include_once 'plantillas/documento-cierre.inc.php';
      ?>