<?php

/*
    Funciones para crear el formulario de busqueda de incidencias
*/
/*
function vincidencia_form(){
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
*/
/*
function vincidencia_form(){
    echo <<< HTML
    <div class="contenido_2">
        <div class = "c_izq_2">
                <h3>Listado de incidencias</h3>
                <div class="crit_busq">
                    <h5>Criterios de búsqueda</h5>
                    <div class="form_ordena">
                        <form action='{$_SERVER["SCRIPT_NAME"]}' method='POST'>
                            <div class="form_ordena_orden">
                                <h4>Ordenar por:</h4>
                                <input type="radio" id="ord1" name="order" value="antiguedad">
                                <label for="ord1">antiguedad</label><br>
                                <input type="radio" id="ord2" name="order" value="positivos">
                                <label for="ord2">positivos</label><br>  
                                <input type="radio" id="ord3" name="order" value="netos">
                                <label for="ord3">netos</label><br><br>                                
                            </div>
                        </form>                    
                    </div>
                    <div class="form_busq_contienen">
                        <h4>Incidencias que contengan: </h4>
                        <form action='{$_SERVER["SCRIPT_NAME"]}' method='POST'>
                            <div class="buscar">
                                <label for="texto_busq">Texto de busqueda</label>
                                <input type="text" id="texto_busq" name="texto_busq">
                            </div>
                            <div class="buscar">
                                <label for="texto_lugar">Lugar</label>
                                <input type="text" id="lugar_busq" name="lugar_busq">
                            </div>
                        </form>
                    </div>

                    <div class="form_estado">
                        <h4>Estado:</h4>
                        <form action='{$_SERVER["SCRIPT_NAME"]}' method='POST'>
                            <div class="estado_check">
                                <input type="checkbox" id="estado1" name="estado1" value="Pendiente">
                                <label for="estado1"> Pendiente </label>
                            </div>
                            <div class="estado_check">
                                <input type="checkbox" id="estado2" name="estado2" value="Comprobada">
                                <label for="estado2"> Comprobada </label>
                            </div>
                            <div class="estado_check">
                                <input type="checkbox" id="estado3" name="estado3" value="Tramitada">
                                <label for="estado3"> Tramitada </label>
                            </div>
                            <div class="estado_check">
                                <input type="checkbox" id="estado4" name="estado4" value="Irresoluble">
                                <label for="estado4"> Irresoluble </label>
                            </div>
                            <div class="estado_check">
                                <input type="checkbox" id="estado5" name="estado5" value="Resuelta">
                                <label for="estado5"> Resuelta </label>
                            </div>
                        
                        </form>
                    </div>
                </div>
        </div>
    HTML; 
}
*/
function vincidencia_form2(){
    echo <<< HTML
    <div class="contenido_2">
        <div class = "c_izq_2">
                <h3>Listado de incidencias</h3>
                <div class="crit_busq">
                    <h5>Criterios de búsqueda</h5>
                    <div class="form_criterios_busqueda">
                        <form action='{$_SERVER["SCRIPT_NAME"]}' method='POST' id = "incidencias_form">
                                <div class="form_orden">
                                    <h4>Ordenar por:</h4>
                                    <input type="radio" id="ord1" name="order" value="antiguedad">
                                    <label for="ord1">antiguedad</label><br>
                                    <input type="radio" id="ord2" name="order" value="positivos">
                                    <label for="ord2">positivos</label><br>  
                                    <input type="radio" id="ord3" name="order" value="netos">
                                    <label for="ord3">netos</label><br><br>                                
                                </div>
                                            
                                <div class="form_contiene">
                                    <h4>Incidencias que contengan: </h4>

                                    <div class="buscar">
                                        <label for="texto_busq">Texto de busqueda</label>
                                        <input type="text" id="texto_busq" name="texto_busq">
                                    </div>
                                    <div class="buscar">
                                        <label for="texto_lugar">Lugar</label>
                                        <input type="text" id="lugar_busq" name="lugar_busq">
                                    </div>
                                </div>

                                <div class="form_estado">
                                    <h4>Estado:</h4>
                                    <div class="estado_check">
                                        <input type="checkbox" id="estado1" name="estado1" value="Pendiente">
                                        <label for="estado1"> Pendiente </label>
                                    </div>
                                    <div class="estado_check">
                                        <input type="checkbox" id="estado2" name="estado2" value="Comprobada">
                                        <label for="estado2"> Comprobada </label>
                                    </div>
                                    <div class="estado_check">
                                        <input type="checkbox" id="estado3" name="estado3" value="Tramitada">
                                        <label for="estado3"> Tramitada </label>
                                    </div>
                                    <div class="estado_check">
                                        <input type="checkbox" id="estado4" name="estado4" value="Irresoluble">
                                        <label for="estado4"> Irresoluble </label>
                                    </div>
                                    <div class="estado_check">
                                        <input type="checkbox" id="estado5" name="estado5" value="Resuelta">
                                        <label for="estado5"> Resuelta </label>
                                    </div>
                                </div>

                                <div class="form_incidencias">
                                    <label for="num_incidencias"> Incidencias por pagina: </label>
                                    <select id="num_incidencias" name="num_list" form="incidencias_form">
                                        <option value="3">3 items</option>
                                        <option value="5">5 items</option>
                                        <option value="10">10 items</option>
                                    </select>
                                    
                                </div>
                                <div class="boton_enviar">
                                    <input type="submit" value="Aplicar criterios/busqueda">
                                </div>
                        </form>
                    </div>
                    
                </div>
        </div>ec
    HTML;    
}












?>