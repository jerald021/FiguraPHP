<?php
/**
 * Created by PhpStorm.
 * User: shadow021
 * Date: 13/10/2015
 * Time: 0:22
 */

namespace figura;
require_once 'Punto.php';
class Index
{
    public static function pruebaPunto()
    {
        $p = new Punto(10,5);
        echo $p;
    }

}