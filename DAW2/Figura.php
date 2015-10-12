<?php

namespace figura;
require_once 'Punto.php';
/**
 * Created by PhpStorm.
 * User: jerald
 * Date: 6/10/15
 * Time: 15:46
 */
    abstract class Figura{
    /**
     * @var Punto
     */
    protected $origen;

    /**
     * @var int
     */
    private static $numFiguras= 0;

    function __construct(Punto $origen){
        self::$numFiguras++;
        $this->origen= $origen;
    }

    public static function getFiguras(){
        return self::$numFiguras;
    }

    /**
     * area
     *
     * Description
     *
     * @return int
     */
    abstract public function area();

    /**
     * perimetro
     *
     * Description
     *
     * @return mixed
     */
    abstract public function perimetro();

    /**
     * escalar
     *
     * Description
     *
     * @param int $dx
     *
     */
    abstract public function escalar($dx);

    /*desplazar
     * @var int $dx
     * @var int $dy
     */

    public function desplazar($dx, $dy){
        $this->origen->desplazar($dx, $dy);
    }

    /*@return Punto
     *
     */
    public function getOrigen(){
        return $this->origen;
    }

    /*Punto origen
     *
     */
    public function setOrigen($origen){
        $this->origen =$origen;
    }

    public function __toString(){
        return $this->origen->__toString();
    }

    /**
     * @param Figura $f
    * @return mixed
    */
    public function distancia(Figura $f){
        return $this->Origen->distancia($f->getOrigen());
    }


}