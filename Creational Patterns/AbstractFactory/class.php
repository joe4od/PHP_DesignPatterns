<?php
//Abstract Product A
interface HumanUnit{
    public function playSlogan();
}
//Concrete ProductA1
class FarmerUnit implements HumanUnit{
    public function playSlogan(){
        return '農夫準備好了';
    }
}
//Concrete ProductA2
class WorkerUnit implements HumanUnit{
    public function playSlogan(){
        return '工人準備好了';
    }
}
//Concrete ProductA3
class SoliderUnit implements HumanUnit{
    public function playSlogan(){
        return '軍人準備好了';
    }
}

//Abstract Product B
abstract class MonsterUnit{
    public abstract function roar();
}
//Concrete ProductB1
class DevilUnit extends MonsterUnit{
    public function roar(){
        return 'Devil Devil';
    }
}
//Concrete ProductB2
class DaemonUnit extends MonsterUnit{
    public function roar(){
        return 'Daemon Daemon';
    }
}
//Concrete ProductB3
class GoblinUnit extends MonsterUnit{
    public function roar(){
        return 'Goblin Goblin';
    }
}

//Factory
abstract class Factory{
    public abstract function outputHuman();
    public abstract function outputMonster();
}
//Concrete Factory1
class FarmerFactory extends Factory{
    public function outputHuman() {
        return new FarmerUnit;
    }
    public function outputMonster() {
        return new DevilUnit();
    }
}
//Concrete Factory2
class WorkerFactory extends Factory{
    public function outputHuman() {
        return new WorkerUnit;
    }
    public function outputMonster() {
        return new DaemonUnit();
    }
}
//Concrete Factory3
class SoliderFactory extends Factory{
    public function outputHuman() {
        return new SoliderUnit;
    } 
    public function outputMonster() {
        return new GoblinUnit();
    }    
}