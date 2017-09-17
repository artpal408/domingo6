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
}

$carros = $modelo->mostrarCarros();

include_once '../vista/CarroVista.php';
