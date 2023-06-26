<?php

require('../view/html.php');
require_once('../view/usuarios.php');

// ************* Inicio de la página

htmlStart_Generico('Gestion Usuarios','');
__gestionesUsuarios();
__htmlfin_c_izq_2();
__htmlContenido_Der();

// ************* Fin de la pagina
htmlEnd();

?>