<?php 
session_start();


plantilla::inicio();

$todosanuncios = cargar_anuncios();


$url = base_url('');
 ?>

<style>


</style>

<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4"  style="width: 1350px; height: 410px">
			    <li>
					<img src="<?php echo base_url('web')?>/images/slide1.jpg" alt=""/>
				</li>
				<li>
					<img src="<?php echo base_url('web')?>/images/slide2.jpg" alt=""/>
				</li>
				<li>
					<img src="<?php echo base_url('web')?>/images/slide3.jpg" alt=""/>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
				<script src="<?php echo base_url('web')?>/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->

			<br>
		


 <div class="product"> 
		<div class="container">
			<div class="product-top">
				<div class="product-one">

<?php foreach ($todosanuncios as $anuncio): ?>
	
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="<?php echo "{$url}publicar/ver/{$anuncio->id}";?>" class="mask"><img style="height: 150px;" class="img-responsive zoom-img" src="<?php echo "{$url}fotos/{$anuncio->id}0.jpg"; ?>" alt="" /></a>
							<div class="product-bottom">
								<h3><?php echo "$anuncio->nombre"; ?></h3>
								
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ <?php echo "$anuncio->peso"; ?></span></h4>
							</div>
							<div class="srch">
								<span>-<?php echo "$anuncio->id"; ?></span>
							</div>
						</div>
					</div>


<?php endforeach ?>

	</div>
	</div>
	</div>
	</div>