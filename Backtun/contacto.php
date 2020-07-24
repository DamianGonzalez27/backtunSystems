 <?php

        $titulo = 'BacktunSystems Contacto';

        include_once 'php/config.inc.php';
        include_once 'plantillas/documento-apertura.inc.php';
        include_once 'plantillas/documento-nav.inc.php';
      


  ?>

  <div class="jumbotron cabecera" id="somos">
      <div class="container text-center">
        <h1>Comunicate con nosotros</h1>
      </div>
    </div>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Redes sociales</h3>
				</div>
				<div class="panel-body">
					<br>
					<p><a href="#"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Facebook</a></p>
          <p><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Twitter</a></p>
          <p><a href="#"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Google+</a></p>
          <p><a href="#"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Youtube</a></p>
          <p>Telefono: 45939845</p>

				</div>
			</div>
		</div>

		<div class="col-md-6 text-center">

  <?php include_once 'plantillas/correo.inc.php'; ?>

		</div>

	</div>
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

  <?php

     include_once 'plantillas/documento-cierre.inc.php';
      ?>
