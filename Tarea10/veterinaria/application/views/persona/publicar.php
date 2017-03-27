<?php 
session_start();
date_default_timezone_set('America/Santo_Domingo');
$CI =& get_instance();
plantilla::inicio();

if ($_POST) {
$data = new stdClass();


$data->marca = $_POST['marca'];
$data->peso = $_POST['peso'];
$data->tipo = $_POST['tipo'];
$data->fecha =date("d/m/Y");
$data->color = $_POST['color'];
$data->comentario = $_POST['comentario'];

$CI->db->insert('anuncios',$data);

$cod = $this->db->insert_id();

	$foto = $_FILES['foto'];
	if ($foto['error']==0) {
		$tmp = "fotos/{$cod}.jpg";
		move_uploaded_file($foto['tmp_name'],$tmp);
		# code...
	}



	redirect('principal');

}



 ?>

 


<form class="form-horizontal" enctype="multipart/form-data" method="post" action="">

  <fieldset>

    <h2 id="titulo">Publicar Anuncio</h2>
    <br><br><br>
    <div class="form-group">
     <label class="col-lg-2 control-label">Marca</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" placeholder="marca"
         name="marca">
      </div>
    </div>
        <div class="form-group">
     <label class="col-lg-2 control-label">Peso</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" placeholder="Peso" 
        name="peso">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Color</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" id="inputEmail" placeholder="Color" name="color">
      </div>
    </div>
	
	<div class="form-group">
     <label class="col-lg-2 control-label">Subir Foto</label>
      <div class="col-lg-4">
        <input type="file" class="form-control" name="foto">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Comentario</label>
      <div class="col-lg-4">
        <textarea type="text-box" class="form-control"  placeholder="Comentario" name="comentario"></textarea> 
      
    </div>
    </div>
        
    <div class="form-group">
      <label class="col-lg-2 control-label">Tipo</label>
      <div class="col-lg-4">
        <div class="radio">
          <label>
            <input type="radio" name="tipo" id="optionsRadios1" value="tv" checked="">
            Tv
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="tipo" id="optionsRadios2" value="radio">
           Radio
          </label>
          <div class="radio">
          <label>
            <input type="radio" name="tipo" id="optionsRadios3" value="microhondas">
           Microhondas
          </label>
        </div>
      </div>
    </div>
   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Borrar Todo</button>
        <button type="submit" class="btn btn-primary">Publicar Ahora</button>
      </div>
    </div>
  </fieldset>
</form>

