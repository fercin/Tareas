<?php 
$CI =& get_instance();
session_start();

plantilla::inicio();

$anuncios = "select * from anuncios";
$usuarios = "select * from usuarios";
$registrados = "select count(*)as 'nombre' from usuarios";
$publicados = "select count(*)as 'anuncios' from anuncios";

$rs1= $CI->db->query($registrados);
$rs2 = $CI->db->query($publicados);
$rs3 = $CI->db->query($usuarios);
$rs4 = $CI->db->query($anuncios);

$res1 = $rs1->result();
$res2 = $rs2->result();
$res3 = $rs3->result();
$res4 = $rs4->result();
$url = base_url('');
 ?>

 <style >
 	h3{
 		position: relative;
 		left: 35px;
 	}

	#tabla{
		position: relative;
		left: 150px;
	}

 </style>

<h1 style="text-align: center;">Interfaz Administrativa</h1>
<br><br>
<?php foreach ($res1 as $cantidad): ?>
	
	<h3>Cantidad de usuarios registrados: <?php echo "$cantidad->nombre"; ?></h3>
<?php endforeach ?>

<?php foreach ($res2 as $cantidad): ?>
	<h3>Cantidad de anuncios publicados: <?php echo "$cantidad->anuncios"; ?></h3>
<?php endforeach ?>



<br><br>

	
<h3 style="text-align: center;">Lista de usuarios</h3>

<table id="tabla" style="table-layout:fixed; width: 1100px;" class="table">
	
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Usuario</th>
			<th></th>
			

		</tr>
	</thead>
	<tbody>
		

 	
 			<?php foreach ($res3 as $datos): ?>
 				<tr>
 					<td> <?php echo "{$datos->id}" ?> </td>
 					<td> <?php echo "{$datos->nombre}" ?> </td>
 					<td> <?php echo "{$datos->apellido} " ?></td>
 					<td><?php echo "{$datos->mail}"; ?>  </td>
 					
 					<td><a href="<?php echo "{$url}cuenta/bloquear/{$datos->id}"?>">Bloquear </a> </td>
 					
 					

 					</tr>
 			<?php endforeach ?>
 			
 					
 				

 				
						
 				 
 		
	</tbody>
</table>
<br><br>


<h3 style="text-align: center;">Lista de anuncios</h3>

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
		

 	
 			<?php foreach ($res4 as $anu): ?>
 				<tr>
 					<td> <?php echo "{$anu->nombre}" ?> </td>
 					<td> <?php echo "{$anu->marca} " ?></td>
 					<td><?php echo "{$anu->peso}"; ?>  </td>
 					<td><?php echo "{$anu->color}"; ?>  </td>
 					<td><?php echo "{$anu->categoria}"; ?>  </td>
 					<td><?php echo "{$anu->comentario}"; ?>  </td>
 					
 					
 					<td id="borrar"><a href="<?php echo "{$url}cuenta/delete/{$anu->id}"?>"><span class="glyphicon glyphicon-trash"></span></a> </td>

 					</tr>
 			<?php endforeach ?>
 			
 					
 				

 				
						
 				 
 		
	</tbody>
</table>

