<?php
 abstract class Shape{
     private $draw;
     protected function setDraw($draw) {
         $this->draw = $draw;
     }
     public function getDraw(){
         return $this->draw;
     }
 } 
 class Circle extends Shape{
     public function __construct() {
         $this->setDraw('圓形<br/>');
     }
 } 
 class Rectangle extends Shape{
     public function __construct() {
         $this->setDraw('方形<br/>');
    }
}

class Drawer{
    private $shapes = array();
    public function addShape($shape) {
        $this->shapes[] = $shape;
    }
    public function drawShapes() {
        foreach ($this->shapes as $shape) {
            echo $shape->getDraw();
        }
    }
}

$circle = new Circle;
$rectangle = new Rectangle;
$draw = new Drawer;

$draw->addShape($circle);
$draw->addShape($rectangle);
$draw->drawShapes();