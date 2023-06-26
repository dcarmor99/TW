<?php 

    require_once "../core/db.php";
    
    $db = DB_conexion();

    if(!$db)
        echo "La conexión falló";

    $usuario = $_POST["email"];
    $password = $_POST["password"];

    // Filtrado entradas (por rellenar)
    

    $sql = "SELECT * FROM usuarios WHERE email='$usuario' && password = '$password'";
    $result = $db->query($sql);

    if(!$row = mysqli_fetch_assoc($result)){
        echo '<p><h1>Username o Password incorrectos/h1></p><br>';
        echo '<a href="welcome.php"';
    }


?>