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


$cod = $this->db->insert_id();

if (count($rs)>0) {
    $_SESSION['gale_user'] = $rs[0];
    
    redirect('principal');
}else{
    $mensaje = "Las Credenciales son incorrectas";

}


}


plantilla::inicio();
 ?>


<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
<div class="panel panel-info">
<div class="panel-heading">
<div class="panel-title">Iniciar Session</div>
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
    <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right" "></i> Entrar</button>
    <button  onclick="ingresar(); " id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Iniciar Session con Facebook</button>
    <div class="col-md-offset-3 col-md-9">
    
    

    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>

</div>
</div>



                                        
 
