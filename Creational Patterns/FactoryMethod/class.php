<?php
//Abstract Product
interface Unit{
    public function playSlogan();
}
//Concrete ProductA
class Farmer implements Unit{
    public function playSlogan() {
        return '農夫準備好了<br/>';
    }
    public function getFarm() {
        return '鋤頭拿好了<br/>';
    }
}
//Concrete ProductB
class Worker implements Unit{
    public function playSlogan() {
        return '工人準備好了<br/>';
    }
    public function getWork() {
        return '準備上工了<br/>';
    }
}
//Concrete ProductC
class Solider implements Unit{
    public function playSlogan() {
        return '軍人準備好了<br/>';
    }
    public function getWeapon(){
        return '武器已配備<br/>';
    }
}

//動態宣告寫法
//Dynamic Factory
class CreateFactory{
    public function create($type) {
        if(class_exists($type)) return new $type;
        else throw new Exception ('Class is not exist');
    }
}

//原始寫法
//Abstract Factory
abstract class BuildFactory{
    abstract function outputUnit();
}
//Concrete FactoryA
class FarmerBuildFactory extends BuildFactory{
    public function outputUnit() {
        return new Farmer;
    }
}
//Concrete FactoryB
class WorkerBuildFactory extends BuildFactory{
    public function outputUnit() {
        return new Worker;
    }
}
//Concrete FactoryC
class SoliderBuildFactory extends BuildFactory{
    public function outputUnit() {
        $solider = new Solider;
        return ($solider->playSlogan() . $solider->getWeapon());
    }
}