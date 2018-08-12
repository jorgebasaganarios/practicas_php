<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 05/10/2017
 * Time: 16:20
 */

namespace figurajbr;


require_once 'Punto.php';
require_once 'Figura.php';

//Extends significa que hereda de Figura
class Circulo extends Figura
{
    private $_radio;

    public function __construct($_origen, $_radio)
    {
        parent::__construct($_origen);
        $this->_radio = $_radio;
    }

    public function getRadio()
    {
        return $this->_radio;
    }

    public function setRadio($radio)
    {
        $this->_radio = $radio;
    }

    public function area()
    {
        return M_PI * pow($this->_radio, 2);
    }

    public function perimetro()
    {
        return 2 * M_PI * $this->_radio;
    }

    public function escalar($dx)
    {
        return $this->_radio *= $dx;
    }

    public function esIgual(Figura $f)
    {
        if ($f instanceof Circulo) {
            return parent::esIgual($f) && $this->getRadio() == $f->getRadio();
        }
        return false;
    }

    public function __toString()
    {
        return '#Circulo[' . parent::__toString() . ', ' . $this->_radio . ']';
    }
}