<?php 
date_default_timezone_set('America/Santo_Domingo');

session_start();

plantilla::inicio();
$CI =& get_instance();
if ($_POST) {

$data->id_usuario = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$peso = $_POST['peso'];
$categoria = $_POST['categoria'];
$estado = $_POST['estado'];
$fecha =date("d/m/Y");
$color = $_POST['color'];
$comentario = $_POST['comentario'];

	
$sqlupdate = "update anuncios set nombre='$nombre', marca='$marca', peso='$peso', categoria='$categoria', fecha='$fecha', color='$color', comentario='$comentario', estado='$estado'  where id='$cod'";

$CI->db->query($sqlupdate);

	redirect('cuenta');
}


$sql = "select * from anuncios where id='$cod'";
$rs = $CI->db->query($sql);

$algo = $rs->result();


 ?>
<?php foreach ($algo as $anuncio): ?>

<?php 	
$cate = $anuncio->categoria;

?>



<style>
  
  .btn-primary{
    background-color: #B40404;
  }
  .btn-primary:hover{
    background-color: #B40404;
  }

.form-control:focus{
         
            border:1px solid #F5A9A9;
            box-shadow: 0 0 10px #F5A9A9;
       }

</style>



<form class="form-horizontal" name="formulario" method="post" action="">

  <fieldset>

    <h2 id="titulo" style="color: #B40404;text-align: center;">Modificar Anuncio</h2>
    <br><br><br>
        <div style=" margin-left: 340px;
    width: 1074px;">
    <div class="form-group">
     <label class="col-lg-2 control-label">Nombre</label>
      <div class="col-lg-4">
        <input required type="text" value="<?php echo $anuncio->nombre; ?>" class="form-control" placeholder="Nombre del Anuncio"
         name="nombre">
      </div>
    </div>
      <div class="form-group">
     <label class="col-lg-2 control-label">Marca</label>
      <div class="col-lg-4">
        <input required type="text" value="<?php echo "$anuncio->marca"; ?>" class="form-control" placeholder="Marca del Articulo"
         name="marca">
      </div>
    </div>
        <div class="form-group">
     <label class="col-lg-2 control-label">Precio</label>
      <div class="col-lg-4">
        <input required type="text" onkeypress="return justNumbers(event);" value="<?php echo "$anuncio->peso"; ?>" class="form-control" placeholder="Peso del Articulo" 
        name="peso">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Color</label>
      <div class="col-lg-4">
        <input required type="text" value="<?php echo "$anuncio->color"; ?>" class="form-control"  placeholder="Color del Articulo" name="color">
      </div>
    </div>
  

   <div class="form-group">
      <label class="col-lg-2 control-label">Estado</label>
      <div class="col-lg-4">
        <div class="radio">

          <label>
            <input type="radio" name="estado" id="optionsRadios1" value="Nuevo" <?php if($anuncio->estado=='Nuevo')echo 'checked'; ?>>
            Nuevo
          </label>

           <label>
            <input type="radio" name="estado" id="optionsRadios2" value="Usado" <?php if($anuncio->estado=='Usado') echo 'checked'; ?>>
           Usado
          </label>
        </div>
        </div>
        </div>

  

    <div class="form-group">
      <label class="col-lg-2 control-label">Categoria</label>
      <div class="col-lg-4">
        <div class="radio">

          <label>
            <input type="radio" name="categoria" id="optionsRadios1" value="bicicleta" <?php if($anuncio->categoria=='bicicleta')echo 'checked'; ?>>
            Bicicleta
          </label>

           <label>
            <input type="radio" name="categoria" id="optionsRadios2" value="piezabicicleta" <?php if($cate=='piezabicicleta') echo 'checked'; ?>>
           Piezas de Bicicletas
          </label>

           <label>
            <input type="radio" name="categoria" id="optionsRadios3" value="  herramientas" <?php if($cate=='herramientas') echo 'checked'; ?>>
           Herramientas
          </label>

          <label>
            <input   type="radio" name="categoria" id="optionsRadios4" value="ropa" <?php if($cate=='ropa') echo 'checked'; ?>>
           Ropa
          </label>
        </div>
        
    </div>
    </div>
   

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Descripcion</label>
      <div class="col-lg-4">
        <textarea required type="text-box" class="form-control"  placeholder="Describir Articulo" name="comentario"><?php echo "$anuncio->comentario"; ?></textarea> 
      
    </div>
    </div>
       
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Borrar Todo</button>
        <button type="submit" class="btn btn-primary">Modificar Ahora</button>
      </div>
    </div>
    </div>
  </fieldset>
</form>


<?php endforeach ?>
  