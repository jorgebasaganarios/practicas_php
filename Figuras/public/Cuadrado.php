<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 13/10/2017
 * Time: 12:39
 */

namespace figurajbr;

require_once 'Punto.php';
require_once 'Figura.php';

class Cuadrado extends Figura
{
    private $_ancho;

    public function __construct(Punto $_origen, $_ancho)
    {
        Parent::__construct($_origen);
        $this->_ancho = $_ancho;
    }

    public function getAncho()
    {
        return $this->_ancho;
    }

    public function setAncho($_ancho)
    {
        $this->_ancho = $_ancho;
    }

    public function area()
    {
        return pow($this->_ancho, 2);
    }

    public function perimetro()
    {
        return $this->_ancho * 4;
    }

    public function escalar($dx)
    {
        return $this->_ancho*=$dx/100;
    }

    public function __toString()
    {
        return '#Cuadrado[' . parent::__toString() . ', ' . $this->_ancho . ']';
    }
}