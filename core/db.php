<?php

require_once('credenciales.php');

/*Conexión a la BBDD*/ 
function DB_conexion(){
    $db = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE,DB_PORT);

    if (!$db){
        echo "<p>Error de conexión </p>";
        echo "<p>Código: ".mysqli_connect_errno()."</p>";
        echo "<p>Mensaje: ".mysqli_connect_error()."</p>";   
        return false;     
    }
    // Establecer la codificación de los datos almacenados ("collation")
    mysqli_set_charset($db,"utf8");
    return $db;
}

// Desconexión de la BBDD
function DB_desconexion($db){
    mysqli_close($db);
}

// Funcion para añadir nuevo usuario a la Base de Datos
function DB_addUsuario($db,$datos){
    // Comprobamos si hay usuario existente con el mismo nombre
    $res = mysqli_query($db, "SELECT COUNT(*) FROM usuarios
        WHERE nombre='{$datos['nombre']}'");
        $num = mysqli_fetch_row($res)[0];
        mysqli_free_result($res);
        if($num>0)
            $info[] = 'Ya existe un usuario con ese nombre';
        else{
            $email = trim($datos['email']);
            $email = strip_tags($email);
            $email = htmlspecialchars($email);

            $nombre = trim($datos['nombre']);
            $nombre = strip_tags($nombre);
            $nombre = htmlspecialchars($nombre);


            $apellidos = trim($datos['apellidos']);
            $apellidos = strip_tags($apellidos);
            $apellidos = htmlspecialchars($apellidos);

            $pass = trim($datos['password']);
            $pass = strip_tags($pass);
            $pass = htmlspecialchars($pass);


            $tfno = trim($datos['tfno']);
            $tfno = strip_tags($tfno);
            $tfno = htmlspecialchars($tfno);

            $direccion = trim($datos['direccion']);
            $direccion = strip_tags($direccion);
            $direccion = htmlspecialchars($direccion);


            $estado = trim($datos['estado']);
            $estado = strip_tags($estado);
            $estado = htmlspecialchars($estado);

            $rol = trim($datos['rol']);;
            $rol = strip_tags($rol);;
            $rol = htmlspecialchars($rol);;

            $res = mysqli_query($db, "INSERT INTO usuarios (email,nombre,apellidos,password,telefono,direccion,estado,rol) VALUES
            ('$email','$nombre','$apellidos','$pass',)");
        }
}




?>