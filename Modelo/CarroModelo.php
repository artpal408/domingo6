<?php
/**
 * Created by PhpStorm.
 * User: Lab2Ies
 * Date: 17/09/2017
 * Time: 13:39
 */

require_once '../driver.php';

class CarroModelo {

    private $enlace;

    public function __construct()
    {
        $this->enlace = DMysqli();
    }

    public function mostrarCarros(){

        $consulta =" SELECT * FROM carro";

       return $this->enlace->multiples_datos($consulta);
    }



}