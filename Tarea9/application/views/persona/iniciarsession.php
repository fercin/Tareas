<?php 

$CI =& get_instance();
$mensaje = "";
if ($_POST) {
	


	
$sql = "select * from usuarios where mail=? and pass=?";

$mail = $_POST['mail'];
$pass = $_POST['pass'];
session_start();

$resultado = $CI->db->query($sql,array($mail,$pass));

$rs = $resultado->result();

foreach ($rs as $gente) {
	file_put_contents('datos.txt', json_encode($gente));
}
$cod = $this->db->insert_id();

if (count($rs)>0) {
	$_SESSION['gale_user'] = $rs[0];
	
	redirect('registro/entrar');
}else{
	$mensaje = "Las Credenciales son incorrectas";

}


}

plantilla::inicio();
 ?>

<div class="row">
 	<div class="col col-sm-4 col-sm-offset-4">
		<form name="formulario" method="post" action="">
			<h3 class="text-center">Iniciar Session</h3>
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
				<button class="btn btn-primary" type="submit">Entrar</button>
				
			</div>
		</form>
 		
 	</div>
 </div>
