<?php 

session_start();

plantilla::inicio();
$CI =& get_instance();








/*
$persona = cargar_datos();

$datos = json_decode(file_get_contents('datos.txt'),1);

$mailtmp = $datos['mail'];
$passtmp = $datos['pass'];
$id = $datos['id'];
$nombre = $datos['nombre'];
$apellido = $datos['apellido'];

if (isset($_POST['comentario'])) {

$data = new stdClass();


$data->nombre = $_POST['nombre'];
$data->apellido = $_POST['apellido'];
$data->comentario = $_POST['comentario'];
$data->id_usuarios = $_POST['id_usuarios'];

$CI->db->insert('comentarios',$data);

}

if (isset($_POST['respuesta'])) {
	
$data = new stdClass();


$data->nombre = $_POST['nombreresp'];
$data->apellido = $_POST['apellidoresp'];
$data->respuesta = $_POST['respuesta'];
$data->id_comentario = $_POST['id_respuesta'];

$CI->db->insert('respuestas',$data);

}


$comentario = cargar_comentario();
$usuarios = cargar_usuarios();

*/

 ?>

 <style type="text/css">
 	#comentario{
 		width: 400px;
 		position: relative;
 		left: 30px;
 		
 	

 	}
 	input{
 		width: 600px;
 		height: 50px;
 	}
	#contenedor{
		width: 600px;
		position: relative;
	
	}
	#respuesta{
		width: 300px;
		float: right;

	}
  #local{
    position: relative;
    right: 50px;
  }

 </style>
 


        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Anuncios
                   
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
       
        <?php 


        $imagenes = cargar_anuncios();
        $url = base_url('');
        foreach ($imagenes as $imagen) {

            $foto ="fotos/{$imagen->id}.jpg";

            if (!is_file($foto)) {
                $foto = "http://placehold.it/750x450/?text=No hay Anuncio";
            }else{
                $foto = "{$url}/{$foto}";
            }

            echo <<<FOTO

               <div class="col-md-3 portfolio-item">
                <a href="{$url}/publicar/ver/{$imagen->id}">
                    <img class="img-responsive" src="{$foto}" alt="">
                </a>
            </div>

FOTO;
        }


         ?>




        </div>
        <!-- /.row -->

    
