<?php 
$CI =& get_instance();
plantilla::inicio();



if ($_POST) {
	
$data = new stdClass(); 

	$data->nombre = $_POST['nombre'];
	$data->apellido = $_POST['apellido'];
	$data->mail = $_POST['mail'];
	$data->pass = $_POST['pass'];
	$data->sexo = $_POST['sexo'];

	$CI->db->insert('usuarios',$data);

	$cod = $this->db->insert_id();

	$foto = $_FILES['foto'];
	if ($foto['error']==0) {
		$tmp = "fotos/{$cod}.jpg";
		move_uploaded_file($foto['tmp_name'],$tmp);
		# code...
	}

}



 ?>



<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Registrarse</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a></div>
        </div>  
        <div class="panel-body" >


            <form id="signupform" class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="">
                
                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>
                    
                
                  
                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Nombre</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                </div>
                    
                <div class="form-group">
                    <label for="firstname" class="col-md-3 control-label">Apellido</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-md-3 control-label">Email</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="mail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Contraseña</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="pass" placeholder="Contraseña">
                    </div>
                </div>

                                <div class="form-group">
      <label class="col-md-3 control-label">Sexo</label>
      <div class="col-lg-4">
        <div class="radio">
          <label>
            <input type="radio" name="sexo" id="optionsRadios1" value="hombre" checked="">
            Hombre
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="sexo" id="optionsRadios2" value="mujer">
           mujer
          </label>
        </div>
      </div>
    </div>



			<div class="form-group">
		     <label class="col-md-3 control-label">Subir Foto</label>
		      <div class="col-lg-4">
		        <input type="file" class="form-control" name="foto">
		      </div>
		    </div>
            
        
        <div class="form-group">
            <!-- Button -->                                        
            <div class="col-md-offset-3 col-md-9">
                <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> Crear Cuenta</button>
                
            </div>
        </div>
        
        
            <!--
            <div class="col-md-offset-3 col-md-9">
                <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
            </div>                                           
              -->  
      
        
        
        
    </form>
 </div>
</div>




</div> 
</div>
