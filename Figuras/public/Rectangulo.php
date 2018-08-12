<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 11/10/2017
 * Time: 19:15
 */

namespace figurajbr;

require_once 'Punto.php';
require_once 'Cuadrado.php';

class Rectangulo extends Cuadrado
{
    private $_alto;
    private $_ancho;

    public function __construct(Punto $_origen, $_ancho, $_alto)
    {
        Parent::__construct($_origen, $_ancho);
        $this->_alto = $_alto;
    }

    public function getOrigen()
    {
        return $this->_origen;
    }

    public function getAlto()
    {
        return $this->_alto;
    }

    public function setAlto($_alto)
    {
        $this->_alto = $_alto;
    }

    public function area()
    {
        return $this->_ancho * $this->_alto;
    }

    public function perimetro()
    {
        return 2*$this->_ancho + 2*$this->_alto;
    }

    public function escalar($dx)
    {
        parent::escalar($dx);
        $this->_ancho*=$dx/100;
    }

    public function __toString(){
        return '#Rectángulo: [' . parent::__toString() .', '.$this->_alto.']';
    }

}