<?php 
$CI =& get_instance();
$mensaje = "";
 
if (isset($_COOKIE['nombrefacebook'])) {
    session_start();
   $data = new stdClass();
   $data->mail = $_COOKIE['emailfacebook'];
   $data->nombre = $_COOKIE['nombrefacebook'];

   $_SESSION['gale_user'] = $data;
    redirect('principal');


}



if ($_POST) {
    


    
$sql = "select * from usuarios where mail=? and pass=?";

$mail = $_POST['mail'];
$pass = $_POST['pass'];
session_start();

$resultado = $CI->db->query($sql,array($mail,$pass));

$rs = $resultado->result();

if (count($rs)>0) {
	# code...

$estado = $rs[0]->estado;

$cod = $this->db->insert_id();

if (count($rs)>0 && $estado =="si") {
    $_SESSION['gale_user'] = $rs[0];
    
    redirect('principal');
}elseif ($estado =="no") {
  $mensaje = "Su cuenta ha sido Bloqueada";
}
else{
    $mensaje = "Las Credenciales son incorrectas";

}

}else{
	 $mensaje = "Las Credenciales son incorrectas";
}
}


plantilla::inicio();
  
 ?>


<style>
 .panel-info > .panel-heading {
    color: white;
    background-color: #B40404;
    border-color: #bce8f1;
   background-image: linear-gradient(to bottom,#8A0808 0,#B40404 100%);
   margin-bottom: 20px;
} 
    .panel-body {
    padding: 22px 18px 28px 95px;
}
   .form-control:focus{
         
            border:1px solid #F5A9A9;
            box-shadow: 0 0 10px #F5A9A9;
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

       .ini{
        text-decoration: none;
    width: 80px;
    margin-left: -55px;
    height: 32px;
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
<div class="panel-title" style="text-align:center; font-size: 18px;">Iniciar Session</div>
<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"></a></div>
</div>  
<div class="panel-body" >
<form id="signupform" class="form-horizontal" role="form" method="post" action="">

<div id="signupalert" style="display:none" class="alert alert-danger">
<p>Error:</p>
<span></span>
</div>





<div class="form-group">
<label for="firstname" class="col-md-3 control-label">Usuario</label>
<div class="col-md-9">
    <input type="text" class="form-control" name="mail" placeholder="Mail o Usuario">
</div>
</div>

<div class="form-group">
<label for="password" class="col-md-3 control-label">Contraseña</label>
<div class="col-md-9">
    <input type="password" class="form-control" name="pass" placeholder="Password">
</div>
</div>

<div class="form-group">
<!-- Button -->                                        
<div class="col-md-offset-3 col-md-9">
    <button id="btn-signup" type="submit" class="ini"><i class="icon-hand-right"></i> Entrar</button>
    <a  onclick="ingresar(); " id="btn-fbsignup" type="text"  style="height: 32px;"><i class="icon-facebook"></i>   Iniciar Sesion con Facebook</a>
    <div class="col-md-offset-3 col-md-9">
    
    
    </div>
    <br>
<h5 style="color: #B40404;"><?php echo "$mensaje"; ?></h5>

    </div>

    </div>
    </form>
    </div>
    </div>
    </div>

</div>
</div>



                                        
 
