<?php 
$CI =& get_instance();
session_start();

plantilla::inicio();

if ($_POST) {
	

$foto = $_FILES["foto"];





	if ($foto['error']==0) {
		$imagen = $_POST['valor'];
		$tmp = "fotos/superior.jpg";
		$_FILES["foto"]["name"] = "$imagen.jpg";
		$nombre =basename( $_FILES["foto"]["name"]);
		move_uploaded_file($foto["tmp_name"],"fotos/$nombre");
		
		}
	
	

}

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
 	#registro{
 		
 		text-align: center

 	}

	#tabla{
		position: relative;
		left: 150px;
	}

	#subir1{
		float: right;
		position: relative;
		right: 150px;
	}

	#subir2{
		clear: right;
		float: right;
		position: relative;
		right: 150px;
	}

	#subir3{
		clear: right;
		float: right;
		position: relative;
		right: 150px;
	}

	#btn{
		position: relative;
		right: 180px;
	}
#btn1{
	position: relative;
	right: 120px;
}



 </style>



<h1 style="text-align: center; color: #B40404">Interfaz Administrativa</h1>
	

<br>

<br>


<br>
<br>
<div id="registro" style="margin-top: -35px">
<?php foreach ($res1 as $cantidad): ?>
	
	<h3>Cantidad de usuarios registrados: <?php echo "$cantidad->nombre"; ?></h3>
<?php endforeach ?>

<?php foreach ($res2 as $cantidad): ?>
	<h3>Cantidad de anuncios publicados: <?php echo "$cantidad->anuncios"; ?></h3>
<?php endforeach ?>
</div>


<br><br><br><br>

<div style="clear: both;">	
<h3 style="text-align: center; color: #B40404">Lista de usuarios</h3>

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
 					
 					<td><a href="<?php echo "{$url}cuenta/bloquear/{$datos->id}"?>"><span class="glyphicon glyphicon-remove"> </span>
 					</a> </td>
 					<td id="btn"><a href="<?php echo "{$url}cuenta/desbloquear/{$datos->id}"?>"><span class="glyphicon glyphicon-ok"> </span> </a></td>
 					<td id="btn1"> <a href="<?php echo "{$url}cuenta/eliminara/{$datos->id}" ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
 					
 					

 					</tr>
 			<?php endforeach ?>
 			
 					
 				

 				
						
 				 
 		
	</tbody>
</table>
</div>
<br><br>


<h3 style="text-align: center; color: #B40404">Lista de anuncios</h3>

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

<br>
	<div>
	<div >
	<h3 style=" margin-left: 231px; color: #B40404;"> Anuncio Superior </h3>


	<form id="form1" enctype="multipart/form-data" method="post" action="">
	<input type="hidden" name="valor" value="superior">
	<input style="margin-left: 231px;
" type="file" name="foto" accept="image/*" onchange="javascript:document.getElementById('form1').submit();">

	</form>
	</div>
	<div style="    margin-left: 547px;
    margin-top: -75px;">
		<h3 style="color: #B40404;"> Anuncio Central </h3>
	<form id="form2" enctype="multipart/form-data" method="post" action="">
	<input type="hidden" name="valor" value="central">
	<input type="file" name="foto" accept="image/*" onchange="javascript:document.getElementById('form2').submit();">
	</form>
	</div>
   <div  style="margin-left: 860px;
    margin-top: -75px;"   >
	<div>	
		<h3 style="margin-bottom: -20px; color: #B40404;"> Anuncio Inferior </h3>
		</div>
		<div>
	<form id="form3" enctype="multipart/form-data" method="post" action="">
	<input  type="hidden" name="valor" value="inferior">
	<input style="margin-top: 30px;" type="file" name="foto" accept="image/*" onchange="javascript:document.getElementById('form3').submit();">
	</form>

	</div>
	</div>
</div>




