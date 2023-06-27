<?php 

function userValidate(){
 
    // Comprobamos si el usuario está autenticado o no y decidimos qué hay que hacer
    if (isset($_SESSION['email'])){
        // Usuario identificado
        $accion = "yaidentificado";
    } else if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password'])){
        //$contra = "SELECT password FROM usuarios WHERE email='$username' && password = '$password'";
        $sql = "SELECT * FROM usuarios WHERE email='$email' && password='$password'";
        if(!$row = mysqli_fetch_assoc($sql)){
            echo '<p><h1>Username o Password incorrectos.</h1></p>';
            echo '<a href="index.php"><h1>Ir a la página principal</h1></a>';
        }
        else{
            // Autenticación: Creamos variables de sesion
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $rol_consulta = "SELECT rol FROM usuarios WHERE email='$email' && password='$password'";
            $_SESION['rol'] = $rol_consulta;
            $accion = "bienvenida";
        }
    } else 
        $accion = "welcome"; // Acceso directo a la pagina de login
    return $accion;
}

function userLogout(){
    unset($_SESSION['email']);
}



?>