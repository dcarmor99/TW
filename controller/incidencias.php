<?php
require('../view/html.php');
require_once('../view/vincidencia.php');


// ************* Inicio de la página
htmlStart_Generico('Incidencias','');

/*vincidencia_form();*/
vincidencia_form2();
__htmlContenido_Der();

// ************* Fin de la pagina
htmlEnd();

?>