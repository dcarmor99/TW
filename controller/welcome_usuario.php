<?php 

if (session_status()==PHP_SESSION_NONE) 
    session_start();

include('../view/html.php');
include('../controller/validar_usuario.php');


htmlStart('Bienvenido a Villalimpio','');

$opc = $_GET['p'] ?? 'inicio';
switch($opc){
    
}



htmlEnd();



?>