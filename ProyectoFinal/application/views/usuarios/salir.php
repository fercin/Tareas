<?php 


session_start();
setcookie("nombrefacebook", $_COOKIE['nombrefacebook'], time() - 60);
setcookie("emailfacebook", $_COOKIE['emailfacebook'], time() - 60);
session_destroy();



redirect('principal');


