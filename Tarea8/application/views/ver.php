<?php 

plantilla::inicio();



$CI =& get_instance();

$sql = "select * from imagenes where id = ?";

$rs = $CI->db->query($sql,array($codigo));

$rs =$rs->result();

if (count($rs)==0) {
	redirect('web');
}

$imagen = $rs[0];



 ?>


<div class="text-center">

 <h1><?php echo $imagen->nombre ?></h1>
<?php if (file_exists("fotos/{$imagen->id}.jpg")): ?>
	<img  style="height: 350px;" src="<?php echo base_url("fotos/{$imagen->id}.jpg") ?>">

<?php else: ?>
	<img  style="height: 350px;" src="http://placehold.it/750x450/?text=No hay foto">

<?php endif ?>
 
 
<br><br>
<h3>Comentario</h3>
<br>
<h4> <?php echo $imagen->comentario ?></h3>
</div>
