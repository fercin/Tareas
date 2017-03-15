<?php 

$mensaje = "";
if ($_POST) {
	
	$sql = "select * from usuarios where mail= ? and pass = ?";

	$CI =& get_instance(); 
	$mail = $_POST['mail'];
	$clave = md5($_POST['pass']);
	$rs = $CI->db->query($sql,array($mail,$clave));

	$rs = $rs->result();
	if (count($rs)>0) {
		$_SESSION['gale_user'] = $rs[0];
		redirect('Admin');
 	}else{
 		$mensaje = "Las Credenciales son incorrectas";
 	}
}



	plantilla::inicio();

 ?>


 <div class="row">
 	<div class="col col-sm-4 col-sm-offset-4">
		<form method="post" action="">
			<h3 class="text-center">Inicia Sesion</h3>
			<div class="form-group input-group">
				<label class="input-group-addon">Email: </label>
				<input type="text" name="mail"  class="form-control">
			</div>
			<div class="form-group input-group">
				<label class="input-group-addon">Contraseña: </label>
				<input type="password" name="pass"  class="form-control">
			</div>
			<div style="color: red">
				<?php echo $mensaje ?>;
			</div>
			<div class="text-center">
				<button class="btn btn-primary">Entrar</button>
			</div>
		</form>
 		
 	</div>
 </div>
 	

