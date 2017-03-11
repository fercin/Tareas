<?php 

if ($_POST){

file_put_contents('config.txt',json_encode($_POST));




} else{
	$datos = json_decode(file_get_contents('config.txt'),1);

}





	?>
	


<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title></title>
	<style type="text/css">
		#contenedor{
			position: relative;
			left: 250px;
		}
	</style>
</head>
<body>
<br><br><br>
<form method="post">
	<div id="contenedor">
	<div class="row">
		<div class="col col-sm-6">
			<div class="form-group input-group">
				<span class="input-group-addon">rojo</span>
				<input type="number" class="form-control" name="rojo" value="<?php echo $datos['rojo']; ?>" >	
			</div>

			<div class="form-group input-group">
				<span class="input-group-addon">verde</span>
				<input type="number" class="form-control" name="verde" value="<?php echo $datos['verde']; ?>">	
			</div>

			<br>	
			<div class="text-center">
				<button class="btn btn-primary" type="submit">Enviar</button>
				<a class="btn btn-danger" href="index.php">regresar</a>
			</div>
			
		</div>
		
	</div>
	</div>
	</form>
<script>


</script>

</body>
</html>