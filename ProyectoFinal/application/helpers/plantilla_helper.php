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

<link rel="shortcut icon" href="favicon.ico">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>ITLABIKE</title>
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
.me-one ul li a:hover{
	text-decoration:none;
	color:#000;
}
	body {
   overflow-x: hidden;
}

.rslides img {
    height: auto;
    display: block;
    float: left;
    width: 1082px;
    height: 445px;
    border: 0;
    margin-left: 119px;
}




</style>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8&appId=286532548436213";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
	base_url = '<?php base_url()?>';
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
            
        }, {scope: 'public_profile, email'});  
        
  		
     
    }

       function enter(event){
        

        if (event.keyCode ==13) {

            document.busqueda.submit;
        }
    }

function categoria(){
	

            document.formulario.submit;
       
}


        function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }




</script>

	<a href="http://www.google.com" target="_blank"><img id="bannersuperior" class="img-responsive" style="height: 200px; width: 100%;"  src="<?php echo base_url('fotos')?>/superior.jpg"></a>
</head>
<body> 
<h1></h1>

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
	/*$datos = json_decode(file_get_contents('datos.txt'),1);

	$mailtmp = $datos['mail'];
	$passtmp = $datos['pass'];
	$id = $datos['id'];
	$nombre = $datos['nombre'];
	$apellido = $datos['apellido'];*/


	 ?>
	<div class="logo">
		<a href="<?php echo base_url() ?>">
		<img src="<?php echo base_url('web') ?>/images/iconobici2.png" style="margin-left: -1810px;">
		</a>
		<h3 style="margin-left: 270px; margin-top: -62px; font-family: 'Gloria Hallelujah', cursive; font-size: 28px; color: #504545;">ITLABIKE</h3>
		<h4 style="position: relative;font-size: 16px; float: right; bottom: 26px; right: 815px;">El Mejor Portal de Bicicletas</h4>
	</div>
				<?php if (!isset($_SESSION['gale_user'])): ?>
					
				
	           <div>
				<a id="login" href="<?php echo base_url('principal/login') ?>"  style="margin-right: 50px;margin-top: -25px;float: right; font-size: 15px; color: black">Iniciar Sesión</a>	  
				 <a href="<?php echo base_url('principal/registrarse') ?>" style="float: right;margin-top: -25px;margin-right: -30px; font-size: 15px; color: black">Registrate</a>
					</div>
					
					<?php else: ?>

						<a href="<?php echo base_url('principal') ?>" style="margin-right: 32px;margin-top: -25px;float: right; font-size: 15px; color:black;"><?php echo $_SESSION['gale_user']->mail; ?></a>	

				 		<a href="<?php echo base_url('principal/salir') ?>" style="float: right;margin-top: -25px;margin-right: -30px; font-size: 15px; color: black;">Salir</a>
				 	
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
						<li class="grid"><a href="">Categorias</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">	
									<h4>Anuncios</h4>
									<ul>

											<li>
											<form id="formulario" method="post" action="<?php echo site_url("categoria/bicicleta") ?>">
											<input type="hidden" name="bicicleta" value="bicicleta">
											<a href="javascript:{}" onclick="document.getElementById('formulario').submit();" >Bicicletas</a>
											</form>
											</li>
											<li>
											
											<a href="<?php echo site_url('categoria/piezabicicleta')?>">Piezas de bicicletas</a>
											
											</li>


											<li>
											
											<a href="<?php echo site_url('categoria/herramientas') ?>">Herramientas</a>
											
											</li>

											<li>
											
											<a href="<?php echo site_url('categoria/ropa')?>">Ropa</a>
											
											</li>
									</ul>
								</div>
							</div>
							</div>
					
						</li>
						<?php if (isset($_SESSION['gale_user'])): ?>
							
						<li class="grid"><a href="<?php echo site_url('cuenta')?>">Mi Cuenta</a>
						
					
						</li>
							
						<?php endif ?>

						
						<li class="grid"><a href="<?php echo site_url('nosotros')?>">Nosotros</a>
							
						</li>

						<?php if (isset($_SESSION['gale_user'])): ?>
                          <!-- PUBLICAR ANUNCIO -->
						<li><a href="<?php echo site_url('principal/publicar') ?>"  style=" margin-top: -50px; width: 140px; height: 36px; margin-left: 672px; background-color: #B40404; color: #F2F2F2" class="btn btn-danger">Publicar Anuncio</a>
							<div>
								<div class="row">
									
								</div>
							</div>
						</li>
				
						<?php endif ?>
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


	<a href="http://www.google.com" target="_blank"><img style="height: 100px; width: 80%; position: relative; left: 120px;" id="bannersuperior" class="img-responsive" src="<?php echo base_url('fotos')?>/central.jpg"></a>

		<br><br>


		<?php
		
	}


	 function __destruct(){

		?>
		<br><br>
			<a href="https://www.orbea.com/do-es/bicicletas/" target="_blank"><img style=" height: 130px; width: 50%;" id="bannersuperior" class="img-responsive center-block"  src="<?php echo base_url('fotos')?>/inferior.jpg"></a>
<hr style="    border-top: 1px solid #e8e2e2;">

			<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Follow Us</h3>
					<ul>
						<li id="btnfb"><a  target="_blank" href="https://www.facebook.com/Itlabike-755471887953531/?fref=ts"><span class="fb"></span><h6>ITLABIKE</h6></a></li>
						<li id="btntw"><a  href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li id="btng"><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					
					
				</div>
				<div class="col-md-3 infor-left">
				 
					<h3>My Account</h3>
					<ul>
						<li><a><p style="    width: 432px; font-size: 17px; text-align: center;margin-left: -220px;margin-top: -45px;     color: rgba(236, 112, 104, 0.93);">ITLABIKE Copyright ©Todos los Derechos Reservados 2017</p></a></li>

						<li><a><p id="parrafo" style="margin-bottom: -12px;  margin-left: -123px;margin-top: -3px;padding: 18px;">Fermin Amador  -  2015-2774</p></a></li>
						<li><a><p id="parrafo" style="margin-bottom: -12px;  margin-left: -123px;margin-top: -3px;padding: 18px;">Diego Hernández  -  2015-2486</p></a></li>
						<li><a><p id="parrafo" style="margin-bottom: -12px;  margin-left: -123px;margin-top: -3px;padding: 18px;">Carolina Crusset  -  2015-2485</p></a></li>
						
					</ul>
				</div>
				
				<div class="clearfix">
					<h5 style="    margin-left: 855px;
                                   width: 250px;
   								   margin-top: 58px;
   								   position: absolute;
  								   color: rgba(0, 0, 0, 0.56);
   								   font-size: 14px;
  								   text-align: center;">
					Proyecto basado en idea del profesor Amadis Suarez del ITLA</h5>
				</div>
				<div>
					<h5 style="    margin-left: 855px;
                                   position: absolute;
                                   margin-top: -60px;
                                   text-align: center;
                                   color: rgba(0, 0, 0, 0.56);
                                   width: 250px;">
						Instituto Tecnológico de las Américas (ITLA)
					</h5>
				</div>

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