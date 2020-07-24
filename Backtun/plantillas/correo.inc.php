
<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Envianos un correo</h3>
				</div>
				<div class="panel-body">
					<br>
					<form role="form" method="POST" action="php/enviarcorreo.inc.php">
						<div class="form-group">
    <label>Nombre completo</label>
    <input type="text" class="form-control" name="nombre" placeholder="Juan Perez" required>
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="correo" placeholder="ejemplo@mail.com" required>
    </div>
    <div class="form-group">
    <label>Asunto</label>
    <input type="text" class="form-control" name="asunto" placeholder="Asunto" required>
    </div>
		<div class="form-group">
    <label>Telefono</label>
    <input type="tel" class="form-control" name="telefono" placeholder="Telefono" required>
    </div>
    <div class="form-group">
    <label>Mensaje</label>
    <textarea class="form-control" name="mensaje" placeholder="Introduce tu mensaje aqui" required></textarea>
    </div>

     <br>
    <button type="submit" class="btn bt-default btn-primary" name="enviar">Enviar</button>

  </form>
				</div>
			</div>
