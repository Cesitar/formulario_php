<?php include("includes/header.php"); ?>

		<div class="container">
			<form class="form-horizontal" method='post' action="procesarsaludo.php">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu Nombre">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Escribe tu Email">
					</div>
				</div>
				<div class="form-group">
					<label for="poblacion" class="col-sm-2 control-label">Población</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="poblacion" name="poblacion" placeholder="Escribe tu Población">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-warning">Enviar</button>
					</div>
				</div>
			</form>
		</div>
		
<?php include("includes/footer.php"); ?>		
		
