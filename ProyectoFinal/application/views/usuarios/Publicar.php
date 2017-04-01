<?php 
date_default_timezone_set('America/Santo_Domingo');
$CI =& get_instance();

session_start();
plantilla::inicio();


if ($_POST) {
$data = new stdClass();

$data->id_usuario = $_POST['id_usuario'];
$data->nombre = $_POST['nombre'];
$data->marca = $_POST['marca'];
$data->peso = $_POST['peso'];
$data->categoria = $_POST['categoria'];
$data->fecha =date("d/m/Y");
$data->color = $_POST['color'];
$data->comentario = $_POST['comentario'];

$CI->db->insert('anuncios',$data);

$cod = $this->db->insert_id();

foreach ($_FILES["foto"]["error"] as $clave => $error) {
		for ($i=0; $i <5 ; $i++) { 
			
			
		
    if ($error == UPLOAD_ERR_OK) {
        $nombre_tmp = $_FILES["foto"]["tmp_name"][$clave];
        // basename() puede evitar ataques de denegació del sistema de ficheros;
        // podría ser apropiado más validación/saneamiento del nombre de fichero
        $_FILES["foto"]["name"][$i] = "{$cod}{$i}.jpg";
        $nombre =basename( $_FILES["foto"]["name"][$clave]);
        
        move_uploaded_file($nombre_tmp, "fotos/$nombre");
    	}
	}
}
	
	
echo "<script>location.href='index'</script>";

}
 ?>



	
<form class="form-horizontal" name="formulario" enctype="multipart/form-data" method="post" action="">

  <fieldset>
	<input type="hidden" name="id_usuario" value="<?php echo $_SESSION['gale_user']->id ?>">
    <h2 id="titulo">Publicar Anuncio</h2>
    <br><br><br>
    <div class="form-group">
     <label class="col-lg-2 control-label">Nombre</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" placeholder="Nombre del Anuncio"
         name="nombre">
      </div>
    </div>
      <div class="form-group">
     <label class="col-lg-2 control-label">Marca</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" placeholder="Marca del Articulo"
         name="marca">
      </div>
    </div>
        <div class="form-group">
     <label class="col-lg-2 control-label">Peso</label>
      <div class="col-lg-4">
        <input type="text" class="form-control" placeholder="Peso del Articulo" 
        name="peso">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Color</label>
      <div class="col-lg-4">
        <input type="text" class="form-control"  placeholder="Color del Articulo" name="color">
      </div>
    </div>
	
	

    <div class="form-group">
      <label class="col-lg-2 control-label">Categoria</label>
      <div class="col-lg-4">
        <div class="radio">

          <label>
            <input type="radio" name="categoria" id="optionsRadios1" value="bicicleta" checked="">
            Bicicleta
          </label>

           <label>
            <input type="radio" name="categoria" id="optionsRadios2" value="piezabicicleta">
           Piezas de Bicicletas
          </label>

           <label>
            <input type="radio" name="categoria" id="optionsRadios3" value="herramientas">
           Herramientas
          </label>

          <label>
            <input type="radio" name="categoria" id="optionsRadios4" value="ropa">
           Ropa
          </label>
        </div>
        
    </div>
    </div>

    <div class="form-group">
     <label class="col-lg-2 control-label">Subir Foto</label>
      <div class="col-lg-4">
        <input type="file" class="form-control" id="imagen" accept="image/*" name="foto[]" multiple="multiple" >
      </div>
    </div>
   

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Descripcion</label>
      <div class="col-lg-4">
        <textarea type="text-box" class="form-control"  placeholder="Describir Articulo" name="comentario"></textarea> 
      
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

