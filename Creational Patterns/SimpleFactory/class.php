<?php
//Abstract Product
 abstract class Unit {
    protected $resource;
    protected $time;
    protected $finish;
    public abstract function getMaterial();
    public abstract function train();
    public abstract function create();
 }
 //Concrete ProductA
 class Worker extends Unit {
     public function getMaterial() {
         return $this->resource = '需要100金';
     }
     public function train() {
         return $this->time = '需要10秒';
     }
     public function create() {
         return $this->finish = '工人建造完成';
     }
 }
 //Concrete ProductB
 class Solider extends Unit{
     public function getMaterial() {
         return $this->resource = '需要300金';
     }
     public function train() {
         return $this->time = '需要30秒';
     }
     public function create() {
         return $this->finish = '軍人建造完成';
     }
 }
 //Concrete ProductC
 class Farmer extends Unit{
     public function getMaterial() {
         return $this -> resource = '需要50金';
     }
     public function train() {
         return $this -> time = '需要5秒';
     }
     public function create() {
         return $this -> finish = '農夫建造完成';
     }
 }
 
 //Factory
 class SimpleFactory{
     public static function createUnit($type){
         if(class_exists($type)) return new $type;
         else throw new Exception('Class is not exist');
     }
 }

//Middle Interface 
 class CreateBuildCenter{
     public function outputUnit($type){
         $unit = SimpleFactory::createUnit($type);
         echo $type . ' cost:' . $unit->getMaterial() . ',' . $unit->train() . ',' . $unit->create() . '<br>';
     }
 }