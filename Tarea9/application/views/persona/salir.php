<?php 

session_start();
session_destroy();
redirect('principal/index');

