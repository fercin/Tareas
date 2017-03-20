<?php

class plantilla{

	static $instancia;

	static function inicio(){
		self::$instancia = new plantilla();
	}



	function __construct(){
	?>

	<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Muro de Twitter</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('base') ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('base') ?>/css/4-col-portfolio.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap.min.css')?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style >
    #mover{
        position: relative;
        right: 30px;
    }
    #primero{
        position: relative;
        right: 30px;
    }
    #segundo{
        position: relative;
        right: 20px;
    }
</style>
</head>
<script >
    function enter(event){
        

        if (event.keyCode ==13) {

            document.coments.submit;
        }
    }

</script>
<body>
  
      
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">

    
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('principal') ?>">Red Twitter</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        
                    </li>
                  
                  
                </ul>
            </div>
           
            <!-- /.navbar-collapse -->
        </div>

        <!-- /.container -->
    </nav>
    <?php 
    if (file_exists('datos.txt')) {
        $datos = json_decode(file_get_contents('datos.txt'),1);
    }
    
    $datos2 = json_decode(file_get_contents('logeado.txt'),1);

$estado = $datos2['logeado'];
 $num = 0;
$mailtmp = $datos["mail"];


   


     ?>

        <?php if (!isset($_SESSION['gale_user'])): ?>
            <div id="mover" class="text-right">
               <a id="primero" href="<?php echo  base_url('registro/iniciarsession') ?>">Iniciar Session </a>
                <a id="segundo" href="<?php echo  base_url('registro/crearcuenta') ?>">Registrarse </a>
    </div>

    <?php else: ?> 
        <div class="text-right">
            <a id="primero" href="#"><?php echo "$mailtmp"; ?> </a>
            <a id="segundo"  href="<?php echo  base_url('registro/salir') ?>"> Salir </a>
            </div>
    <?php endif ?>


           
        

        
 
    <!-- PagContent -->
    <div class="container">


	<?php
	}


	function __destruct(){
	?>


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; RedTwitter 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url('base') ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('base') ?>/js/bootstrap.min.js"></script>




</body>

</html>

	<?php
	}

}


function cargar_imagen(){

	$CI =& get_instance();

	$sql = "select * from imagenes";

	$rs = $CI->db->query($sql);

	return $rs->result();


}

function cargar_datos(){
    $CI =& get_instance();
    $sql = "select * from usuarios";
    $rs = $CI->db->query($sql);

    return $rs->result();


}

 function cargar_comentario(){
 $CI =& get_instance();
 $sql = "select * from comentarios";
$rs = $CI->db->query($sql);
    return $rs->result();


 }

 function cargar_respuesta(){
    $CI =& get_instance();
    
 }