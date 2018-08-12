<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 05/10/2017
 * Time: 16:19
 */

namespace figurajbr;

require_once 'Punto.php';

abstract class Figura
{
    /**
     * @var Punto
     */
    protected $_origen;
    /**
     * @var int
     */
    private static $_numFiguras = 0;
    /**
     * @param Punto $_origen
     */
    function __construct(Punto $_origen)
    {
        self::$_numFiguras++;
        $this->_origen = $_origen;
    }
    public static function getNumFiguras()
    {
        return self::$_numFiguras;
    }

    abstract public function area();

    abstract public function perimetro();

    abstract public function escalar($dx);

    public function desplazar($dx, $dy)
    {
        $this->_origen->desplazar($dx, $dy);
    }

    public function getOrigen()
    {
        return $this->_origen;
    }

    public function setOrigen($origen)
    {
        $this->_origen = $origen;
    }

    public function distancia(Figura $f)
    {
        return $this->_origen->distancia($f->getOrigen());
    }

    public function esIgual(Figura $f)
    {
        return $this->getOrigen()->esIgual($f->getOrigen());
    }

    public function __toString()
    {
        return $this->_origen->__toString();
    }
}