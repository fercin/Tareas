<?php 

session_start();

plantilla::inicio();
$CI =& get_instance();
$persona = cargar_datos();

$datos = json_decode(file_get_contents('datos.txt'),1);

$mailtmp = $datos['mail'];
$passtmp = $datos['pass'];
$id = $datos['id'];
$nombre = $datos['nombre'];
$apellido = $datos['apellido'];

if (isset($_POST['comentario'])) {

$data = new stdClass();


$data->nombre = $_POST['nombre'];
$data->apellido = $_POST['apellido'];
$data->comentario = $_POST['comentario'];
$data->id_usuarios = $_POST['id_usuarios'];

$CI->db->insert('comentarios',$data);

}

if (isset($_POST['respuesta'])) {
	
$data = new stdClass();


$data->nombre = $_POST['nombreresp'];
$data->apellido = $_POST['apellidoresp'];
$data->respuesta = $_POST['respuesta'];
$data->id_comentario = $_POST['id_respuesta'];

$CI->db->insert('respuestas',$data);

}


$comentario = cargar_comentario();




 ?>

 <style type="text/css">
 	#comentario{
 		width: 400px;
 		position: relative;
 		left: 30px;
 		
 	

 	}
 	input{
 		width: 600px;
 		height: 50px;
 	}
	#contenedor{
		width: 600px;
		position: relative;
	
	}
	#respuesta{
		width: 300px;
		float: right;

	}

 </style>
 <div id="contenedor" class="container">

 <?php if (isset($_SESSION['gale_user'])): ?>
 	<form class="form-horizontal" action="" method="post">

   <h2>Muro de Red Twitter</h2>
   <br>
   
    <div class="form-group">
    
      <div class="col-lg-10">
        <textarea  name="comentario" required class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">Comparte con tus amigos tu mejor momento</span>
         
      </div>

      <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
      <input type="hidden" name="id_usuarios" value="<?php echo $id; ?>">
      <input type="hidden" name="apellido" value="<?php echo $apellido; ?>">
      <button  type="submit" class="btn btn-primary">Publicar</button>
    </div>
   


</form>

<?php else: ?>
 	<legend>
	<h1>Bienvenido a Red Twitter </h1>
	<h3 class="help-block">Para poder comentar necesitas Iniciar Session</h3>
</legend>
 <?php endif ?>
 


<?php foreach ($comentario as $gente): ?>
	<?php 
	$sql = "select * from respuestas where id_comentario='$gente->id'";
	$respuesta = $CI->db->query($sql);
	$rs = $respuesta->result();

	 ?>

	<div id="comentario" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo ucwords($gente->nombre); echo " "; echo ucwords($gente->apellido);  ?></h3>
  </div>
  	<div class="panel-body">
    <?php echo $gente->comentario ?>
  	</div>

<?php foreach ($rs as $respuesta): ?>
	<div style="width: 300px; float: right;" class="panel-heading">
    <h3 class="panel-title"><?php echo ucwords($respuesta->nombre); echo " "; echo ucwords($respuesta->apellido);  ?></h3>
  </div>
<div  style="width: 300px; float: right;" class="panel-body">
    <?php echo $respuesta->respuesta ?>
  	</div>
<?php endforeach ?>

<?php if (isset($_SESSION['gale_user'])): ?>
	<form name="coments" method="post" action="">
		<input type="hidden" name="id_respuesta" value="<?php echo $gente->id ?>" >
		<input type="hidden" name="nombreresp" value="<?php echo $nombre ?>" >
		<input type="hidden" name="apellidoresp" value="<?php echo $apellido ?>" >
  		<input type="text" required name="respuesta" placeholder="Comentar Aqui" class="form-control" rows="1" id="textArea" onkeydown="javascript:enter(event);">
  		
  		
  	</form>
  <?php else: ?>
<form name="coments" method="post" action="">
		<input type="hidden" name="id_respuesta" value="<?php echo $gente->id ?>" >
		<input type="hidden" name="nombreresp" value="<?php echo $nombre ?>" >
		<input type="hidden" name="apellidoresp" value="<?php echo $apellido ?>" >
  		<input type="text" disabled name="respuesta" placeholder="Necesita Iniciar Session para comentar" class="form-control" rows="1" id="textArea" onkeydown="javascript:enter(event);">
  		
  		
  	</form>

<?php endif ?>


</div>


<?php endforeach ?>


	


</div>