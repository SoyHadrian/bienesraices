<?php
function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');
    if(!$db){
        echo "Error con la conección de la base de datos";
        exit;
    }

    return $db;
}