<?php 

$CI =& get_instance();

$sql = "select * from anuncios where id = ?";

$rs = $CI->db->query($sql,array($codigo));

$rs =$rs->result();

if (count($rs)==0) {
	redirect('principal');
}

$imagen = $rs[0];


plantilla::inicio();




 ?>




<div class="text-center">


<?php if (file_exists("fotos/{$imagen->id}.jpg")): ?>
	<img  style="height: 350px;" src="<?php echo base_url("fotos/{$imagen->id}.jpg") ?>">


<?php else: ?>
	<img  style="height: 350px;" src="http://placehold.it/750x450/?text=No hay Anuncio">


<?php endif ?>

 
<br><br>
 <h4><strong>Marca: </strong> <?php echo $imagen->marca ?></h4>
 <h4><strong>Fecha: </strong> <?php echo $imagen->fecha ?></h4>
 <h4><strong>Tipo: </strong> <?php echo $imagen->tipo ?></h4>
 <h4><strong>Peso: </strong> <?php echo $imagen->peso ?> libras</h4>
 <h4><strong>Color: </strong> <?php echo $imagen->color ?></h4>
 <h4><strong>Comentario: </strong> <?php echo $imagen->comentario ?></h4>




</div>
