<?php 
$CI =& get_instance();
if ($_POST) {
	
	$data = new stdClass(); 

	$data->nombre = $_POST['nombre'];
	$data->apellido = $_POST['apellido'];
	$data->mail = $_POST['mail'];
	$data->pass = $_POST['pass'];
	$data->sexo = $_POST['sexo'];

	$CI->db->insert('usuarios',$data);

	$cod = $this->db->insert_id();

	$foto = $_FILES['foto'];
	if ($foto['error']==0) {
		$tmp = "fotos/{$cod}.jpg";
		move_uploaded_file($foto['tmp_name'],$tmp);
		# code...
	}



	header("Location: exito");

}





plantilla::inicio();

 ?>

 <br><br>
<style> 

form{
	position: relative;
	left: 200px;
}
legend{
	position: relative;
	left: 250px;
}

</style>



<form class="form-horizontal" enctype="multipart/form-data" method="post" action="">

  <fieldset>

    <h2 id="titulo">Registrarse</h2>
    <br><br><br>
    <div class="form-group">
     <label class="col-lg-2 control-label">Nombre</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" placeholder="Nombre"
         name="nombre">
      </div>
    </div>
        <div class="form-group">
     <label class="col-lg-2 control-label">Apellido</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" placeholder="Apellido" 
        name="apellido">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="mail">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Contraseña</label>
      <div class="col-lg-4">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass">
      
    </div>
    </div>
        <div class="form-group">
     <label class="col-lg-2 control-label">Subir Foto</label>
      <div class="col-lg-4">
        <input type="file" class="form-control" name="foto">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Sexo</label>
      <div class="col-lg-4">
        <div class="radio">
          <label>
            <input type="radio" name="sexo" id="optionsRadios1" value="hombre" checked="">
            Hombre
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="sexo" id="optionsRadios2" value="mujer">
           mujer
          </label>
        </div>
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Crear cuenta</button>
      </div>
    </div>
  </fieldset>
</form>

