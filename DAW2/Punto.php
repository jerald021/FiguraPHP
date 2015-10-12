<?php

namespace figura;
/**
 * Created by PhpStorm.
 * User: shadow021
 * Date: 12/10/2015
 * Time: 20:22
 */
     class Punto{
         /**
          * @var
          */
         private $x;
         /**
          * @var
          */
         private $y;

         /**
          * @param $x
          * @param $y
          */
         public function __construct($x, $y){
            $this->x= $x;
            $this->y= $y;
        }

         /**
          * @return mixed
          */
         public function getX(){
            return $this->x;
        }

         /**
          * @return mixed
          */
         public function getY(){
            return $this->y;
        }

         /**
          * @param $x
          */
         public function setX($x){
            $this->x= $x;
        }

         /**
          * @param $y
          */
         public function setY($y){
            $this->y= y;
        }

         /**
          * @return string
          */
         public function __toString(){
            return "valor x= " . $this->x . "valor y= " . $this.y;
        }

         /**
          * @param $dx
          * @param $dy
          */
         public function desplazar($dx, $dy){
            $this->x + $dx;
            $this->y + $dy;
        }

         /**
          * @param Punto $p
          * @return float
          */
         public function distancia(Punto $p){
            $dx= $p->getX() - $this->x;
            $dy= $p->getY() - $this->y;
            return sqrt(pow($dx, 2) + pow($dy, 2));
        }


    }