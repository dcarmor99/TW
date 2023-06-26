<?php

/*
    Funciones para hacer el maquetado general de la página web.
*/

function htmlStart_Generico($titulo,$activo=''){
    __htmlInicio($titulo);
    __htmlEncabezado($activo);
    __htmlNavAlternativo($activo);
}

function htmlStart($titulo,$activo=''){
    __htmlInicio($titulo);
    __htmlEncabezado($activo);
    __htmlNavAlternativo($activo);
    __htmlContenidosIni();
}

function htmlStart_copy($titulo, $activo=''){
    __htmlInicio($titulo);
    __htmlEncabezado($activo);
    __htmlCopyright();
}

function htmlStart_manual($titulo, $activo=''){
    __htmlInicio($titulo);
    __htmlEncabezado($activo);
    __htmlManual();
}





/*Funciones privadas de este módulo*/ 

function __htmlInicio($titulo){
    echo <<< HTML
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../view/style.css" />
    <title>{$titulo}</title>
    </head>
    <body>
    HTML;
}

// Encabezado
function __htmlEncabezado($activo){
    echo <<< HTML
    <header>
        <div id="div1" class="d_general">
            <div id="div11">
                <img src="../view/img/pagina_principal.png"> 
            </div>
            <div id="div12">
                <h4> Página web para informar sobre incidencias en VillaLimpio </h4>
            </div>
        </div>
    </header>
    HTML;
}

function htmlNav($clase, $menu, $activo=''){
    echo "<nav id='div13'>";
    foreach ($menu as $elem)
        echo "<a ".($activo==$elem['texto']?"class='activo' ":'')."href='{$elem['url']}'>{$elem['texto']}</a>";
    echo '</nav>';
}


// Navegador Alternativo
function __htmlNavAlternativo($activo){
    htmlNav('menu',[['texto'=>'Ver Incidencias', 'url'=>'incidencias.php'],
    ['texto'=>'Inicio', 'url'=>'welcome.php'],
    ['texto'=> 'Gestión de Usuarios', 'url'=> 'gestusuarios.php'],
    ['texto'=> 'Ver log', 'url' => 'log.php']],$activo);
}

// Navegador Version Usuario Administrador



function __htmlContenido_Izq(){
    echo <<< HTML
    <div id="contenido">
        <main id = "c_izq">
                <h3>Bienvenido/a a este sitio</h3>
                <p>Aquí podrás consultar las quejas de los vecinos de VillaLimpio. Para incluir
                    sus propias quejas y que se tengan en cuenta, deberá darse de alta en este 
                    portal web.
                </p>
                
                <p>
                    Para darse de alta, envíe un correo a cualquiera de los administradores del 
                    sitio, por ejemplo a admin@admin.com y estos contactaran con usted en
                    cuanto les sea posible.
                </p>

        </main>
    HTML; 
}



function __htmlContenido_Der(){
    echo <<< HTML
        <div id = "c_der">
                <form action="session1.php" method="POST" class="login">
                    <label for="email">Email:</label><br>
                    <input type="text" id = "email" name="email"><br>
                    <label for="password">Clave:</label><br>
                    <input type="text" id = "password" name="password"><br>
                    <button type="button" onclick="">Login</button>                    
                </form>
                <div class="cont_extra">
                    <h4>Los que más añaden</h4>
                    <ol>
                        <li>Juan Perez Gomez</li>
                        <li>Miguel Ramon Martin</li>
                        <li>Joseja Diaz</li>
                    </ol>
                </div>
                <div class="cont_extra">
                    <h4>Los que más opinan</h4>
                    <ol>
                        <li>Juan Perez Gomez</li>
                        <li>Miguel Ramon Martin</li>
                        <li>Joseja Diaz</li>
                    </ol>
                </div>
        </div>
    HTML;

}

/*Muestra mensaje de Copyright*/ 
function __htmlContenidoCopyright(){
    echo <<< HTML
    <div id="contenido">
        <main id = "c_izq">
                <h3>Copyright</h3>
                <p>Daniel Carrasco Moreno & Jose Antonio Lopez</p>
                <p>Tecnologías Web. Grado en Ingeniería Informática</p>
                <p>Universidad de Granada</p>
                <br>
                <h3>Condiciones de uso</h3>
                <p>Aplicación de ejemplo para la asignatura de Tecnologías Web,
                    no se permite su uso en otro contexto.</p>
        </main>
    HTML; 

}

/*Muestra mensaje de Manual de Usuario*/
function __htmlContenidoManual(){
    echo <<< HTML
    <div id="contenido">
        <main id = "c_izq">
                <h3>Uso de la aplicación</h3>
                <p>Instrucciones de uso</p>
                <p>... en construccion </p>
        </main>
    HTML;  

}


function __htmlContenidosIni_2(){
    echo '<div class="contenido">';
}


function __htmlContenidosFin(){
    echo '</div>';
}

function __htmlfin_c_izq_2(){
    echo '</div>';
}



function __htmlFin(){
    echo '</body></html>';
}

function __htmlFooter(){
    echo <<< HTML
        <footer>
            <div class="l_footer">
                <a href="../controller/copyright.php">(C) Tecnologias Web</a>
            </div>
            <div class="l_footer">
                <a href="../controller/manual_user.php">Manual de Uso</a>
            </div>
            <div class="l_footer">
                <p>2023</p>
            </div>
        </footer>
    HTML;
}

// Contenidos FIN
function htmlEnd(){
    __htmlContenidosFin();
    __htmlFooter();
    __htmlFin();
}

function __htmlContenidosIni(){
    __htmlContenido_Izq();
    __htmlContenido_Der();
}

function __htmlContenidosIni_Incidencia(){
    __htmlContenido_Der_Incidencia();
    __htmlContenido_Izq();
}


function __htmlCopyright(){
    __htmlContenidoCopyright();
    __htmlContenido_Der();
}

function __htmlManual(){
    __htmlContenidoManual();
    __htmlContenido_Der();
}


?>