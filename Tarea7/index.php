<?php

		if ($_POST['usuario']) {

			$validacion = $_POST;

			if ($validacion['usuario'] == 'root' && $validacion['pass'] == '1234') {

				
				header("Location:configuracion.php");
			
			}else{
				echo '<script>alert("Las credenciales son incorrectas :P");</script>';
			}
		}


	 ?>


<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta charset="utf-8">
	<title>Semaforo</title>
	<style>

	h2{
		text-align: center;
	}
	#contenedor{
		position: relative;
		left: 350px;
	}
</style>

</head>

<body>
<h2><strong>Elige la calle</strong></h2>
<br><br>
<div class="text-center">
	<div>
		<a href="javascript:finestraSecundaria('semaforo.php?calle=A')" class="btn btn-primary" >Calle A</a>
		<a href="javascript:calleB('semaforo.php?calle=B')" class="btn btn-danger">Calle B</a>
	</div>
	</div>
<br><br><br>
	<h2><strong>Iniciar sension para configurar semaforo</strong></h2>
	<form method="post">
	<div id="contenedor">
	<div class="row">
		<div class="col col-sm-6">
			<div class="form-group input-group">
				<span class="input-group-addon">Usuario</span>
				<input type="text" class="form-control" name="usuario" >	
			</div>

			<div class="form-group input-group">
				<span class="input-group-addon">contraseña</span>
				<input type="password" class="form-control" name="pass" >	
			</div>

			<br>
			<div class="text-center">
				<button class="btn btn-success" type="submit">Ingresar</button>
				
			</div>
			
		</div>
		
	</div>
	</div>
	</form>


</div>



<script language=javascript>
function finestraSecundaria (url){
window.open(url, "Calle A", "width=300, height=200")
}

function calleB(url){
window.open(url, "Calle B", "width=300, height=200")
}


</script>

</body>
</html>