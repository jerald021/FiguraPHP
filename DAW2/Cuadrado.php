<?php
/**
 * Created by PhpStorm.
 * User: shadow021
 * Date: 13/10/2015
 * Time: 0:13
 */

namespace figura;
require_once 'Figura.php';
require_once 'Punto.php';


class Cuadrado extends Figura{
    /**
     * @var
     */
    protected $ancho;

    /**
     * @param Punto $origen
     * @param $ancho
     */
    function __construct(Punto $origen, $ancho){
        parent::__construct($origen);
        $this->ancho = $ancho;
    }

    /**
     * @return mixed
     */
    public function getAncho(){
        return $this->ancho;
    }

    /**
     * @param $ancho
     */
    public function setAncho($ancho){
        $this->ancho = $ancho;
    }

    /**
     * @return string
     */
    public function __toString(){
        return "ancho= ". $this->ancho;
    }

    /**
     * @return number
     */
    public function area(){
        return pow($this->ancho, 2);
    }

    /**
     * @return mixed
     */
    public function perimetro(){
        return $this->ancho * 4;
    }

    /**
     * @param int $dx
     */
    public function escalar($dx){
        $this->ancho *= $dx / 100;
    }


}