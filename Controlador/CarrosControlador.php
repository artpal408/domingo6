<?php
/**
 * Created by PhpStorm.
 * User: Lab2Ies
 * Date: 17/09/2017
 * Time: 13:35
 */

require_once '../Modelo/CarroModelo.php';

$modelo = new CarroModelo();

if($_POST['agregar']){
    $cmarca = $_POST['marca'];
    $cmodelo = $_POST['modelo'];

    $agrego = $modelo->agregarCarro($cmarca,$cmodelo);

    if($agrego){
        echo "Exito al agregar dato";
    }else{
        echo "Fallo al agregar dato";
    }
}

$carros = $modelo->mostrarCarros();

include_once '../vista/CarroVista.php';
