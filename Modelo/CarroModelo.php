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
        $this->enlace = new DMysqli();
    }

    public function mostrarCarros(){

        $consulta =" SELECT * FROM carro";

       return $this->enlace->multiples_datos($consulta);
    }

    public function agregarCarro($marca, $modelo){
        $consulta = sprintf("INSERT INTO carro VALUES (DEFAULT, '%s', '%s', DEFAULT )", $marca,$modelo);
        return $this->enlace->query($consulta);
    }

    public function desactivarCarro($id){
        $consulta = "UPDATE carro set activo = 0 WHERE id = " . $id;
        return $this->enlace->query($consulta);
    }

    function eliminarCarro($id){
        $consulta = "DELETE FROM carro WHERE id = " . $id;
        return $this->enlace->query($consulta);
    }





}