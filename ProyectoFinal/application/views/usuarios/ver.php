<?php 
session_start();
$CI =& get_instance();
date_default_timezone_set('America/Santo_Domingo');

if (isset($_POST['comentario'])) {

$data = new stdClass();


$data->nombre = $_POST['nombre'];
$data->apellido = $_POST['apellido'];
$data->comentario = $_POST['comentario'];
$data->id_anuncio = $_POST['id_anuncio'];
$data->fecha = date("d/m/Y");
$CI->db->insert('comentarios',$data);

}






$sql = "select * from anuncios where id = ?";

$rs = $CI->db->query($sql,array($cod));

$rs =$rs->result();

if (count($rs)==0) {
	redirect('principal');
}

$anuncio = $rs[0];
plantilla::inicio();
$url = base_url('');

 ?>

 <style >
 	body{
 		background: white;
 	}

 	#local{
 		position: relative;
 		right: 200px;
 	}
 </style>
	<!--top-header-->
	<!--start-logo-->

	<!--bottom-header-->

	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							  <ul class="slides">
								<li data-thumb="<?php echo "{$url}fotos/{$anuncio->id}0.jpg"; ?>">
									<div class="thumb-image"> <img src="<?php echo "{$url}fotos/{$anuncio->id}0.jpg"; ?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="<?php echo "{$url}fotos/{$anuncio->id}0.jpg"; ?>">
									 <div class="thumb-image"> <img src="<?php echo "{$url}fotos/{$anuncio->id}0.jpg"; ?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="<?php echo "{$url}fotos/{$anuncio->id}0.jpg"; ?>">
								   <div class="thumb-image"> <img src="<?php echo "{$url}fotos/{$anuncio->id}0.jpg"; ?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li> 
							  </ul>
						</div>
						<!-- FlexSlider -->
						<script src="<?php echo base_url('web'); ?>/js/imagezoom.js"></script>
						<script defer src="<?php echo base_url('web'); ?>/js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="<?php echo base_url('web'); ?>/css/flexslider.css" type="text/css" media="screen" />

						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					</div>	
					<div class="col-md-7 single-top-right">
						<div class="single-para simpleCart_shelfItem">
						<h2><?php echo "$anuncio->nombre"; ?></h2>
							<div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
								<div class="review">
									<a href="#"> 1 customer review </a>
									
								</div>
							<div class="clearfix"> </div>
							</div>
							
							<h5 class="item_price">$ <?php echo "$anuncio->peso"; ?>.00</h5>
							<p><?php echo "$anuncio->comentario"; ?></p>
							<div class="available">
								<ul>
									<li>Color
										<select>
										<option><?php echo "$anuncio->color"; ?></option>
										
									</select></li>
								
								<div class="clearfix"> </div>
							</ul>
						</div>
							<ul class="tag-men">
								<li><span>Marca</span>
								<span class="women1">: <?php echo "$anuncio->marca"; ?></span></li>
								<li><span>Fecha</span>
								<span class="women1">: <?php echo "$anuncio->fecha"; ?></span></li>
							</ul>
								
							
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
				</div>


	
<hr>
<br>
<br>

<?php if ($_SESSION['gale_user']): ?>
	
<?php else: ?>
	
<?php endif ?>
<form class="form-horizontal" action="" method="post">

  
   	
   
    <div class="form-group">
    
      <div class="col-lg-10">
      <br><br>

       <h2>Dejar un Comentario</h2>
        <textarea  name="comentario" required class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">Describe tu duda aqui.</span>
         <button  type="submit" class="btn btn-primary">Comentar</button>
      </div>

      <input type="hidden" name="nombre" value="<?php echo $_SESSION['gale_user']->nombre ?>">
      <input type="hidden" name="id_anuncio" value="<?php echo $anuncio->id ?>">
      <input type="hidden" name="apellido" value="<?php echo $_SESSION['gale_user']->apellido ?>">
      
    </div>
   


</form>

<?php 
$CI =& get_instance();
$sqlcomentario = "select * from comentarios where id_anuncio='$anuncio->id'";
$resul=$CI->db->query($sqlcomentario);
$comentario = $resul->result(); 
 ?>

<?php foreach ($comentario as $coment): ?>
	<!-- Contenedor Principal -->
	<div id="local" class="comments-container">
		<h1>Comentarios <a href="http://creaticode.com"></a></h1>

		<ul id="comments-list" class="comments-list">
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><?php echo "$coment->nombre"; echo " "; echo "$coment->apellido"; ?><a href="http://creaticode.com/blog"></a></h6>
							<span><?php echo "$coment->fecha"; ?></span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							<?php echo "$coment->comentario"; ?>
						</div>
					</div>
				</div>
				

			
		</ul>
	</div>
<?php endforeach ?>
	



</div>
</div>



