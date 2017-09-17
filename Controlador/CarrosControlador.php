<?php
/**
 * Created by PhpStorm.
 * User: Lab2Ies
 * Date: 17/09/2017
 * Time: 13:35
 */

require_once '../Modelo/CarroModelo.php';

$modelo = new CarroModelo();

$carros = $modelo->mostrarCarros();

include_once '../vista/CarroVista.php';