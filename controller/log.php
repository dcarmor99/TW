<?php
require('../view/html.php'); // Maquetado general de la página web
require('../view/vista_log.php'); 

// *************** Inicio de la página
htmlStart_Generico('Log','');



// *************** Contenido
__generarlogHTML();
__htmlfin_c_izq_2();
__htmlContenido_Der();

// *************** Final de la página
htmlEnd();
?>