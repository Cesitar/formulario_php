<?php include("includes/header.php"); ?>
<div class='container'>  <!-- Dentro de HTML meto PHP -->
	<?php	
		//recojo las variables del formulario
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$poblacion = $_POST['poblacion'];
		
		//los pasamos como parámetros en la función
		/*function sobreMi($nombre,$email,$poblacion){
			$saludos = "Hola $nombre, tu email es $email y vives en $poblacion <br>";
			return $saludos;
		}*/
		
		//pasamos la función de arriba mediante un include y llamando a un archivo externo
		include('includes/functions.php');
		
		echo '<p>'.sobreMi($nombre,$email,$poblacion).'</p>';  //Dentro de PHP meto HTML
	?>
</div>
<?php include("includes/footer.php"); ?>	
		
		
	
		
