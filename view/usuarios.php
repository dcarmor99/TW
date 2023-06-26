<?php

function __gestionesUsuarios(){

    echo <<< HTML
    <div class="contenido_2">

        <div class = "c_izq_2">
            <div class="opciones_gestion">
                <h4>Gestionar Usuarios</h4>
                <p>Indicar accion a realizar:</p>
                <div class="accion_user">
                    <nav>
                        <a href="../controller/gestusuarios.php">Listado</a>
                        <a href="../controller/addUsuario.php">Añadir nuevo</a>
                    </nav>
                </div>
            </div>
        
    HTML;
}

/*Formulario Alta Usuario*/ 
function form_altaUsuario(){
    echo <<< HTML
    <div class="form_alta_usuario">
        <div class="encabezado_form">
            <h2>Nuevo Usuario</h2>
        </div>
        <div class="formulario_alta">
            <form action='{$_SERVER["SCRIPT_NAME"]}' method='POST'>
                <div class="upload_fichero">
                    <label for="file">Foto: </label>
                    <input type="file" id="file" name="file">
                </div>
                <div class="nombre">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"><br>
                </div>
                <div class="apellidos">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos">
                </div>
                <div class="email">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                </div>            
                <div class="password">
                    <label for="password">Clave:</label>
                    <input type="password" id="password_1" name="password_1">
                    <input type="password" id="password_2" name="password_2">
                </div>   
                <div class="direccion">
                    <label for="direccion">Direccion:</label>
                    <input type="text" id="direccion" name="direccion">
                </div>   
                <div class="tfno">
                    <label for="tfno">Telefono:</label>
                    <input type="text" id="tfno" name="tfno">
                </div>   
                <div class="colab">
                    <label for="rol">Rol:</label>
                    <select name="rols" id="rols">
                        <option value="colab">Colaborador</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>

                <div class="estado_user">
                    <label for="estado_user">Estado:</label>
                    <select name="estados" id="estados">
                        <option value="activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>
                <input type="submit" id= "submit_crear_user" value="Crear Usuario">
            </form>
        </div>        
    </div>
    HTML;
}



?>