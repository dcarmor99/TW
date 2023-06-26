<?php 

function userValidate(){
 
    // Comprobamos si el usuario está autenticado o no y decidimos qué hay que hacer
    if (isset($_SESSION['email'])){
        // Usuario identificado
        $accion = "yaidentificado";
    } else if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password'])){
        $sql = "SELECT * FROM usuarios WHERE email='$username' && password = '$password'";
        if ()


    }



}



?>