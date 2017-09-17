<?php
/**
 * Created by PhpStorm.
 * User: Lab2Ies
 * Date: 17/09/2017
 * Time: 13:35
 */

require_once '../Modelo/CarroModelo.php';

$modelo = new CarroModelo();

if(!empty ($_POST['agregar'])){
    $cmarca = $_POST['marca'];
    $cmodelo = $_POST['modelo'];

    $agrego = $modelo->agregarCarro($cmarca,$cmodelo);

    if($agrego == true){
        echo "Exito al agregar dato";
    }else{
        echo "Fallo al agregar dato";
    }
}

if(!empty ($_POST['guardar'])){
    $cmarca = $_POST['marca'];
    $cmodelo = $_POST['modelo'];

    $agrego = $modelo->actualizarCarro($cmarca,$cmodelo);

    if($agrego == true){
        echo "Exito al guardando dato";
    }else{
        echo "Fallo al guardando dato";
    }
}


if($_GET['opcion']){

    if($_GET['opcion'] == 'eliminar'){
        $id = $_GET['id'];
        $elimino = $modelo->desactivarCarro($id);

        if($elimino){
            echo 'Exito al eliminar carro';
        }else{
            echo 'Fallo al eliminar carro';
        }
    }

    if($_GET['opcion']== "editar"){
        $id=$_GET['id'];
        $datos = $modelo->obtenerDatosPorId($id);
        $marcaEditable = $datos ['marca'];
        $modeloEditable = $datos ['modelo'];
        //var_dump($datos);


    }
}





$carros = $modelo->mostrarCarros();

include_once '../vista/CarroVista.php';
