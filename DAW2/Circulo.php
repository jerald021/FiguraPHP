<?php

namespace figura;
require_once 'Punto.php';
require_once 'Figura.php';

/**
 * Created by PhpStorm.
 * User: shadow021
 * Date: 12/10/2015
 * Time: 23:13
 */
    Class Circulo extends Figura{
        /**
         * @var
         */
        private $radio;

        /**
         * @param $radio
         * @param Punto $origen
         */
        public function __construct($radio, Punto $origen){
            $this->$radio= $radio;
            parent::__construct($origen);

        }

        /**
         * @return mixed
         */
        public function getRadio(){
            return $this->radio;
        }

        /**
         * @param $radio
         */
        public function setRadio($radio){
            $this->radio= $radio;
        }

        /**
         * @return string
         */
        public function __toString(){
            return "radio= " . $this.radio;
        }

        /**
         * @return float
         */
        public function area(){
            return M_PI * pow($this->radio, 2);
        }

        /**
         * @return int
         */
        public function perimetro(){
            return 2 * M_PI * $this->radio;
        }

        /**
         * @param $dx
         */
        public function escalar($dx){
            $this->radio *= $dx;
        }


    }