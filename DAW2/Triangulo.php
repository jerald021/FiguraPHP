<?php

namespace figura;
require_once 'Punto.php';
require_once 'Figura.php';
/**
 * Created by PhpStorm.
 * User: shadow021
 * Date: 12/10/2015
 * Time: 23:40
 */

class Triangulo extends Figura{
    /**
     * @var Punto
     */
    private $base;
    /**
     * @var
     */
    private $altura;

    /**
     * @param Punto $base
     * @param $altura
     * @param Punto $origen
     */
    public function __construct($base, $altura, Punto $origen){
        $this->base= $base;
        $this->altura= $altura;
        parent::__construct($origen);
    }

    /**
     * @return Punto
     */
    public function getBase(){
        return $this->base;
    }

    /**
     * @return mixed
     */
    public function getAltura(){
        return $this->altura;
    }

    /**
     * @param $base
     * @return mixed
     */
    public function setBase($base){
        return $this->base= $base;
    }

    /**
     * @param $altura
     * @return mixed
     */
    public function setAltura($altura){
        return $this->altura= $altura;
    }

    /**
     * @return string
     */
    public function __toString(){
        return "base= " . $this->base . " altura= " . $this->altura;
    }

    /**
     * @return float
     */
    public function area(){
        return $this->base * $this->altura / 2;
    }

    /**
     * @return float
     */
    public function perimetro(){
        return sqrt(pow($this->altura, 2) + pow($this->base / 2, 2)) * 2 + $this->base;
    }

    /**
     * @param int $dx
     */
    public function escalar($dx){
        $this->base *= $dx / 100;
        $this->altura *= $dx / 100;
    }


}