<?php
/**
 * Created by PhpStorm.
 * User: shadow021
 * Date: 13/10/2015
 * Time: 0:13
 */

namespace figura;
require_once 'Cuadrado.php';
require_once 'Punto.php';

class Rectangulo extends Cuadrado{
    /**
     * @var
     */
    private $alto;

    /**
     * @param Punto $origen
     * @param $ancho
     * @param $alto
     */
    public function __construct(Punto $origen, $ancho, $alto)
    {
        parent::__construct($origen, $ancho);
        $this->alto = $alto;
    }

    /**
     * @return mixed
     */
    public function getAlto(){
        return $this->alto;
    }

    /**
     * @param $alto
     */
    public function setAlto($alto){
        $this->alto = $alto;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "alto= " . $this->alto;
    }

    /**
     * @return mixed
     */
    public function area(){
        return $this->ancho * $this->alto;
    }

    /**
     * @return int
     */
    public function perimetro(){
        return 2 * $this->ancho + 2 * $this->alto;
    }

    /**
     * @param int $dx
     */
    public function escalar($dx){
        parent::escalar($dx);
        $this->alto *= $dx / 100;
    }


}