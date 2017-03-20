<?php 
	$CI =& get_instance();
if ($_POST) {


	$data = new stdClass();
	$data->nombre = $_POST['nombre'];
	$data->comentario = $_POST['comentario'];
	$data->fecha = time();
	

	$CI->db->insert('imagenes',$data);
	$cod = $this->db->insert_id();

	$foto = $_FILES['foto'];
	if ($foto['error']==0) {
		$tmp = "fotos/{$cod}.jpg";
		move_uploaded_file($foto['tmp_name'],$tmp);
		# code...
	}
}

plantilla::inicio();

 ?>
<div class="text-right">
	<a href="<?php echo base_url('admin/salir'); ?>">Salir</a>
</div>

<fieldset>
	<legend>
		Agregar imagen
	</legend>
	<form enctype="multipart/form-data" method="post" action="">
	<div class="col col-sm-4">
		<div class="form-group input-group">
				<label class="input-group-addon">Nombre: </label>
				<input type="text" name="nombre"  class="form-control">
		</div>
		<div class="form-group input-group">
				<label class="input-group-addon">Comentario: </label>
				<textarea class="form-control" name="comentario"></textarea>
		</div>
		<div class="form-group input-group">
				<label class="input-group-addon">Imagen: </label>
				<input type="file" name="foto" class="form-control">
		</div>
	</form>
	<button type="submit" class="btn btn-primary">Guardar</button>
	</div>
</fieldset>


 <fieldset>
 	<legend>
 	<h3>Imagenes agregadas</h3>
 	</legend>
 		<table class="table">
 			<thead>
 				<tr>
 					<th>imagen</th>
 					<th>codigo</th>
 					<th>nombre</th>
 					<th>comentario</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 

 				$imagenes = cargar_imagen();

 				foreach ($imagenes as $imagen) {
 					echo "<tr>
 					<td> <img src='fotos/{$imagen->id}.jpg' height='50'/> </td>
 					<td>{$imagen->id} </td>
 					<td>{$imagen->nombre}  </td>
 					<td>{$imagen->comentario}  </td>
 					</tr>";
 					# code...
 				}

 				 ?>
 			</tbody>
 		</table>
 	
 </fieldset>