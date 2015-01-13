<?php include("includes/header.php"); ?>

		<div class="container">
			<form class="form-horizontal" method="post" action="procesar.php">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
					</div>
				</div>
				<div class="form-group">
					<label for="pass" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
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
						<button type="submit" class="btn btn-default">Sign in</button>
					</div>
				</div>
			</form>
		</div>
		
<?php include("includes/footer.php"); ?>		
		
