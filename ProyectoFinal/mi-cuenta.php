<?php 
session_start();
plantilla::inicio();
$id = $_SESSION['gale_user']->id;
$CI =& get_instance();

$sql = "select * from anuncios where id_usuario='$id'";
$rs = $CI->db->query($sql);
$anuncio = $rs->result();
$url = base_url('');
 ?>



<style >
	
	#tabla{
		position: relative;
		left: 150px;
	}
	#borrar{
		position: relative;
		right: 100px;
	}
</style>
	

<br>
<h3 style="text-align: center; color: #B40404">Mis Anuncios</h3>
<br>

<table id="tabla" style="table-layout:fixed; width: 1100px;" class="table">
	
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Marca</th>
			<th>Precio</th>
			<th>Color</th>
			<th>Categoria</th>
			<th>Descripcion</th>
			<th></th>
			

		</tr>
	</thead>
	<tbody>
		

 	
 			<?php foreach ($anuncio as $anu): ?>
 				<tr>
 					<td> <?php echo "{$anu->nombre}" ?> </td>
 					<td> <?php echo "{$anu->marca} " ?></td>
 					<td><?php echo "{$anu->peso}"; ?>  </td>
 					<td><?php echo "{$anu->color}"; ?>  </td>
 					<td><?php echo "{$anu->categoria}"; ?>  </td>
 					<td><?php echo "{$anu->comentario}"; ?>  </td>
 					<td><a href="<?php echo "{$url}cuenta/modificar/{$anu->id}"?>"><span class="glyphicon glyphicon-pencil"> </span></a> </td>
 					
 					<td id="borrar"><a href="<?php echo "{$url}cuenta/eliminar/{$anu->id}"?>"><span class="glyphicon glyphicon-trash"></span></a> </td>

 					</tr>
 			<?php endforeach ?>
 			
 					
 				

 				
						
 				 
 		
	</tbody>
</table>

