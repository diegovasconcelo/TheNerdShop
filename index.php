<?php
 require_once 'autoload.php';
 require_once 'views/layout/header.php';
 require_once 'views/layout/sidebar.php';   


/*
Al hacer un autoload, no se requiere hacer un include por cada controlador.
require_once 'controllers/UsuarioController.php';
require_once 'controllers/NotaController.php';
*/

#Esta practica que esta a continuacion se la conoce como: Controlador frontal

if (isset($_GET['controller'])){
    $nombre_controlador=$_GET['controller'].'Controller';
}else{
    echo '<h2> La pagina y el controlador que buscas no existe</h2>';
    exit();
}

if (class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'] )){
        $action=$_GET['action'];
    
        $controlador->$action();
    }else{
        echo '<h2> La pagina que buscas no existe</h2>';
    }
    
}else{
    echo '<h2> El controlador que buscas no existe</h2>';
}

require_once 'views/layout/footer.php';