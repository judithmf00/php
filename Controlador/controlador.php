<?php
    require_once('./Modelo/DBPlantas.php') ;

    try {
        $dbplantas = new DBPlantas();
    }catch(Exception $e) {
        die("Imposible conectar con la base de datos");
        exit(0);
    }


    //COMPROBAMOS QUE EXISTE ACCION
    $vista="inicio.html";
    if(isset($_REQUEST["accion"])){
        $accion = $_REQUEST["accion"];
        var_dump($accion);
        switch ($accion) {
            case 'tienda':
                $plantas=$dbplantas->getPlantas();
                $vista = "tienda.php";
                break;
            case 'iniciarsesion':
                $vista = "formInicioSesion.php";
                break;
                
            default:
                # code...
                break;
        }
    }


    // Incluir la vista
    // require_once('./Vista/plantasView.php');
?>