<?php //include("includes/header.php"); ?>

		<!--<div class="container">			
			Esta es la página de procesado<br>-->
			<?php 
				 $nombre = $_POST['nombre'];
				 $password = $_POST['pass'];
				 if($nombre == 'cesar' && $password == 'unitel'){
					//echo "$nombre eres una crack";
					header('Location: usuario1.php');
					exit;
				}else{
					header('Location: usuario2.php');
					exit;
				}
			?>
		<!--</div>-->
		
<?php //include("includes/footer.php"); ?>		
		
