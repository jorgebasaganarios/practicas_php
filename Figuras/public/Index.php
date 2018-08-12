<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 05/10/2017
 * Time: 6:28
 */

namespace figurajbr;

require_once 'Figura.php';
require_once 'Punto.php';
require_once 'Circulo.php';
require_once 'Cuadrado.php';
require_once 'Rectangulo.php';
require_once 'Triangulo.php';

//Si pusiéramos include en lugar de require el programa continuaría aunque no encontrara el archivo


class Index
{
    public static function pruebaPunto()
    {
        $p = new Punto(3,4);
        echo $p . '<br />';
        $p->desplazar(3,4);
        echo $p . '<br />';
        echo 'Punto desplazado: ' . $p . '<br />';
        $p1 = new Punto(3,4);

        echo 'Distancia: ' . $p->distancia($p1) . '<br />';
        echo 'Distancia 2: ' . Punto::distancia2($p, $p1) . '<br />';
        echo 'Es igual: ' . $p->esIgual($p) . '<br /><br />';
    }
    public static function pruebaCirculo()
    {
        $origen = new Punto(5,0);
        $c = new Circulo($origen, 3);
        echo $c . '<br />';
        echo 'Area del círculo: ' . $c->area() . '<br />';
        echo 'Perímetro del círculo: ' . $c->perimetro() . '<br />';
        echo 'Escalar el círculo: ' . $c->escalar(3) . '<br /><br />';
    }

    public static function pruebaCuadrado()
    {
        $origen = new Punto(4, 2);
        $cu = new Cuadrado($origen, 5);
        echo $cu . '<br />';
        echo 'Area del cuadrado: ' . $cu->area() . '<br />';
        echo 'Perímetro del cuadrado: ' . $cu->perimetro() . '<br />';
        echo 'Escalar el cuadrado: ' . $cu->escalar(7) . '<br /><br />';
    }

    public static function pruebaRectangulo()
    {
        $origen = new Punto(1, 5);
        $r = new Cuadrado($origen, 2);
        echo $r . '<br />';
        echo 'Area del rectángulo: ' . $r->area() . '<br />';
        echo 'Perímetro del rectángulo: ' . $r->perimetro() . '<br />';
        echo 'Escalar el rectángulo: ' . $r->escalar(7) . '<br /><br />';
    }

    public static function pruebaTriangulo()
    {
        $origen = new Punto(1, 5);
        $t = new Triangulo($origen, 2, 3);
        echo $t . '<br />';
        echo 'Area del triángulo: ' . $t->area() . '<br />';
        echo 'Perímetro del triángulo: ' . $t->perimetro() . '<br />';
        echo 'Escalar el triángulo: ' . $t->escalar(7) . '<br /><br />';
    }
}

//Métodos estáticos

Index::pruebaPunto();
Index::pruebaCirculo();
Index::pruebaCuadrado();
Index::pruebaRectangulo();
Index::pruebaTriangulo();
