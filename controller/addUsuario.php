<?php
require('../view/html.php');
require_once('../view/usuarios.php');

// ************* Inicio de la página
htmlStart_Generico('Incidencias','');
// ************* Contenido
__gestionesUsuarios();
form_altaUsuario();
__htmlfin_c_izq_2();
__htmlContenido_Der();
// ************* Fin de la página
htmlEnd();
?>