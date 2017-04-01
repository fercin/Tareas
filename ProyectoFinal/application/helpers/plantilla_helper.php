<?php 

   



class plantilla{

	
	static $instancia;

	static function inicio(){
	
		self::$instancia = new plantilla();
	}



	public function __construct()
	{
		?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>ITLABike</title>
<link href="<?php echo base_url('web') ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="<?php echo base_url('web') ?>/js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('web'); ?>/css/comentario.css">
<!--theme-style-->
<link href="<?php echo base_url('web'); ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="<?php echo base_url('web') ?>/js/simpleCart.min.js"> </script>
<link href="<?php echo base_url('web') ?>/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('web') ?>/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="<?php echo base_url('web') ?>/js/jquery.easydropdown.js"></script>	
<style >
	
	.skyblue>li:hover>a,.skyblue>li.active>a,.skyblue .dropdown li:hover>a{
	color:#B40404;
	font-weight: bold;
}
.memenu{
	width: 46%;
}

.me-one h4 {
    color: #a94442;
    font-size: 1.1em;
    text-align: center;
}



</style>

<script>

	var cookieDate = new Date(2020,05,15);
    window.fbAsyncInit = function() {
        FB.init({
        appId      : '286532548436213',
        xfbml      : false,
         version    : 'v2.6'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function validarUsuario() {  
        FB.getLoginStatus(function(response) {  
            if(response.status == 'connected') {  
                FB.api('/me?fields=id,name,email,permissions', function(response){  
                   // alert('Bienvenido ' + response.name);
                // document.cookie = "nombrefacebook="+response.name+";expires=15/06/2020 00:00:00";
             document.cookie = "nombrefacebook="+response.name+";expires="+cookieDate.toUTCString();
             document.cookie = "emailfacebook="+response.email+";expires="+cookieDate.toUTCString();
                });  

               
         } else if(response.status == 'not_authorized') {  
                    alert('Debes autorizar la app!');  
            } else {  
                alert('Debes ingresar a tu cuenta de Facebook!');  
            }  
        }); 

     
    }  

     function ingresar() {  
        FB.login(function(response){  
            validarUsuario(); 
            //document.location.href = document.location.href; //refresh 
        }, {scope: 'public_profile, email'});  
        
  		
         /* $.when(ingresar()).done(function() {
    	document.location.href = document.location.href; //refresh 
    });
		*/	
    }

       function enter(event){
        

        if (event.keyCode ==13) {

            document.busqueda.submit;
        }
    }



   
    




</script>

</head>
<body> 


	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					
				</div>
				
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->


	<?php 
	$datos = json_decode(file_get_contents('datos.txt'),1);

	$mailtmp = $datos['mail'];
	$passtmp = $datos['pass'];
	$id = $datos['id'];
	$nombre = $datos['nombre'];
	$apellido = $datos['apellido'];


	 ?>
	<div class="logo">
		<a href="<?php echo base_url() ?>">
		<img src="<?php echo base_url('web') ?>/images/iconobici.png" style="margin-left: -1810px;">
		</a>
		<h3 style="margin-left: 270px; margin-top: -62px; font-family: 'Gloria Hallelujah', cursive; font-size: 28px; color: #01DF74">ITLABIKE</h3>
	</div>
				<?php if (!isset($_SESSION['gale_user'])): ?>
					
				
	           <div>
				<a id="login" href="<?php echo base_url('principal/login') ?>"  style="margin-right: 158px;margin-top: -25px;float: right; font-size: 17px; color: black">Iniciar Sesión</a>	  
				 <a href="<?php echo base_url('principal/registrarse') ?>" style="float: right;margin-top: -25px;margin-right: 68px; font-size: 17px; color: black">Registrate</a>
					</div>
					
					<?php else: ?>

						<a href="<?php echo base_url('principal') ?>" style="margin-right: 130px;margin-top: -25px;float: right; font-size: 17px;"><?php echo $_SESSION['gale_user']->mail; ?></a>	

				 		<a href="<?php echo base_url('principal/salir') ?>" style="float: right;margin-top: -25px;margin-right: 68px; font-size: 17px;">Salir</a>
				 	
					</div>

					<?php endif ?>		

					
			</div>
	<!--start-logo-->
	<!--bottom-header-->


	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="<?php echo base_url() ?>">Inicio</a>
						<li class="grid"><a href="#">Categorias</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
								<h4>Productos</h4>
									<ul>
											<li><a href="products.html">New Arrivals</a></li>
											<li><a href="products.html">Blazers</a></li>
											<li><a href="products.html">Swem Wear</a></li>
											<li><a href="products.html">Accessories</a></li>
									</ul>
								</div>
							</div>
							</div>
					
						</li>

						<li class="grid"><a href="#">Mi Cuenta</a>
						
						</li>
						<li class="grid"><a href="#">Nosotros</a>
							
						</li>


                          <!-- PUBLICAR ANUNCIO -->
						<li><a href="<?php echo base_url('principal/publicar') ?>"  style=" margin-top: -50px; width: 140px; height: 36px; margin-left: 672px; background-color: #B40404; color: #F2F2F2" class="btn btn-danger">Publicar Anuncio</a>
							<div>
								<div class="row">
									
								</div>
							</div>
						</li>
				
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
				<form name="busqueda" method="post" action="<?php echo site_url("buscar") ?>">
					<input type="text"  name="buscar" id="busqueda" placeholder="Buscar" onkeydown="javascript:enter(event);">
					
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->
	<!--banner-starts-->
	<!--product-end-->
	<!--information-starts-->




		<?php
		
	}


	 function __destruct(){
		?>
			<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Information</h3>
					<ul>
						<li><a href="#"><p>Specials</p></a></li>
						<li><a href="#"><p>New Products</p></a></li>
						<li><a href="#"><p>Our Stores</p></a></li>
						<li><a href="contact.html"><p>Contact Us</p></a></li>
						<li><a href="#"><p>Top Sellers</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>My Account</h3>
					<ul>
						<li><a href="account.html"><p>My Account</p></a></li>
						<li><a href="#"><p>My Credit slips</p></a></li>
						<li><a href="#"><p>My Merchandise returns</p></a></li>
						<li><a href="#"><p>My Personal info</p></a></li>
						<li><a href="#"><p>My Addresses</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Store Information</h3>
					<h4>The company name,
						<span>Lorem ipsum dolor,</span>
						Glasglow Dr 40 Fe 72.</h4>
					<h5>+955 123 4567</h5>	
					<p><a href="mailto:example@email.com">contact@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
	<!--footer-starts-->
	
	<!--footer-end-->	
</body>
</html>	
		


		<?php
	}



}

	function cargar_anuncios(){

	$CI =& get_instance();
	$sql = "select * from anuncios";
	$rs = $CI->db->query($sql);

	return $rs->result();

}





 ?>