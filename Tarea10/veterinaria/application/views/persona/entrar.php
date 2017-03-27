<?php 

session_start();
plantilla::inicio();
$person = array(
    'logeado' => 'si',
    
    
);

file_put_contents('logeado.txt',json_encode($person));



 ?>

 <h2>Bienvenido :D</h2>