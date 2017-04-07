<?php 
$CI =& get_instance();
plantilla::inicio();

$mensaje = "";

if ($_POST) {


$mail = $_POST['mail'];
$sql = "select * from usuarios where mail='$mail'";
$rs = $CI->db->query($sql);
$user = $rs->result();


if (count($user)==0) {
    # code...


	
$data = new stdClass(); 

	$data->nombre = $_POST['nombre'];
	$data->apellido = $_POST['apellido'];
	$data->mail = $_POST['mail'];
	$data->pass = $_POST['pass'];
    $data->sexo = $_POST['sexo'];
	$data->estado = $_POST['estado'];

	$CI->db->insert('usuarios',$data);

	

}

}



 ?>
 <style>
 .panel-info > .panel-heading {
    color: white;
    background-color: #B40404;
    border-color: #bce8f1;
   background-image: linear-gradient(to bottom,#8A0808 0,#B40404 100%);
   margin-bottom: 20px;
} 
 .form-horizontal .control-label {
  margin-left: -55px;
}
.panel-info {
  border-color: rgba(0, 0, 0, 0.20);
}

    .form-control{
          
         
            width: 340px;
            height: 39px;
            border: 1px solid #F6CECE;

       }
       .form-control:focus{
         
            border:1px solid #F5A9A9;
            box-shadow: 0 0 10px #F5A9A9;
       }
      .panel-body {
    padding: 22px 18px 28px 95px;
}
 button{
    text-decoration: none;
    width: 152px;
    height: 38px;
    font-size: 15px;
    color: white;
    background-color: #2E2E2E;
    border-radius: 6px;
    border: 1px solid #424242;
    background-image: linear-gradient(to bottom,#2E2E2E 0,#2E2E2E 100%);
   }

 
</style>


<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title" style="text-align: center; font-size: 18px">Registrarse</div>
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


                    <input type="hidden" name="estado" value="si">

                    
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
            <!-- Button -->                                        
            <div class="col-md-offset-3 col-md-9">
                <button id="btn-signup" type="submit"><i class="icon-hand-right"></i> Crear Cuenta</button>
                
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
