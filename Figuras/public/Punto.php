<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 04/10/2017
 * Time: 19:50
 */

namespace figurajbr;


class Punto
{
    private $_x;
    private $_y;
    public function __construct($_x, $_y){
        //En php el constructor siempre lleva este nomnbre.
        //Las variables del constr. se llaman igual que las creadas en esta clase.
        $this->x = $_x; //
        $this->y = $_y;
        //Se usan flechas en lugar de los puntosde JAVA.
    }

    /*
    //No se pueden poner más de un contstructor, a diferencia de JAVA.
    //Esta sería la otra opción de constructor, dando un valor 0 a las variables.
    public function __construct($x=0, $y=0){
        $this-> setX($x);
        $this-> setY($y);
    }
    */

    /**
     * @return mixed
     */
    public function getX()
    {
        //El getter se puede usar para modificar los valores en segun que caso.
        //Por ejemplo, si nos interesa que la X venga entre corchetes los pondríamos aqui.
        return $this->_x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        //El método set es un filtro de los datos que entran a la clase.
        //ponemos (int) para asegurarnos de que es un entero el valor de x.
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->_y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function desplazar($dx, $dy)
    {
        /*Aquí tenemos las dos opciones:
          una usando el setX para asegurarnos que devuelve un entero la operación.
        */
        $this->x += $dx;
        $this->y += $dy;
    }

    public function distancia(Punto $p)
    {
        $dx = $p->getX() - $this->x;
        $dy = $p->getY() - $this->y;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }

    public static function distancia2(Punto $p, Punto $p1)
    {
        /* Los metodos de clase funcionan sin la necesidad de crear un objeto,
           son metodos de clase.
           Este caso no es realmente programación orientada a objetos porque
           no usa el THIS.
           También podría haber propiedades estatic.

           Propiedades estáticas: propiedades o valores que hacen referencia
           a la clase pero que no pertenecen a ella.
        */
        $dx = $p->getX() - $p1->getX();
        $dy = $p->getY() - $p1->getY();
        return sqrt(pow($dx, 2)+ pow($dy, 2));
    }

    public function esIgual(Punto $p)
    {
        if($this->getX() == $p->getX() && $this->getY() == $p->getY()){
            return "SI es igual";
        }
        return "NO es igual";
    }

    public function __toString()
    {
        return 'Punto[' . $this->x . ', ' .  $this->y . ']';
    }
}
