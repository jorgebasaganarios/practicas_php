<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 19/10/2017
 * Time: 10:44
 */

namespace figurajbr;

require_once 'Punto.php';
require_once 'Figura.php';

class Triangulo extends Figura
{
    private $_base;
    private $_altura;

    public function __construct(Punto $_origen, $_base, $_altura)
    {
        Parent::__construct($_origen);
        $this->_base = $_base;
        $this->_altura = $_altura;
    }

    public function getBase()
    {
        return $this->_base;
    }
    public function setBase($_base)
    {
        $this->_base = $_base;
    }

    public function getAltura()
    {
        return $this->_altura;
    }
    public function setAltura($_altura)
    {
        $this->_altura = $_altura;
    }

    public function area()
    {
        return $this->_base * $this->_altura / 2;
    }

    public function perimetro()
    {
        return 2 * $this->_base + $this->_altura;
    }

    public function escalar($dx)
    {
        /*$this->_base    *= $dx / 100;
        $this->_altura  *= $dx / 100;*/

        return $this->_base += $this->_base * $dx / 100;
    }

    public function __toString(){
        return '#Triángulo: ('. parent::__toString() .' , '.$this->_base.', '.$this->_altura.')';
    }
}