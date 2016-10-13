<?php
abstract class Unit {
    public function getComposite() {
        return null;
    }
    abstract function bombardStrength();
}
abstract class CompositeUnit extends Unit {
    private $units = array();
    public function getComposite() {
        return $this;
    }
    protected function units() {
        return $this->units;
    }
    public function addUnit(Unit $unit) {
        if(in_array($unit, $this->units, true)) return;
        $this->units[] = $unit;
    }
    public function removeUnit(Unit $unit) {
        $this->units = array_udiff($this->units, array($unit), create_function('$a, $b', 'return ($a===$b) ? 0 : 1;'));
    }
}

class Army extends CompositeUnit {
    public function bombardStrength() {
        $ret = 0;
        foreach($this->units() as $unit) {
            $ret += $unit->bombardStrength();
        }
        return $ret;
    }
}
class TroopCarrier extends CompositeUnit {
    public function addUnit(Unit $unit) {
        if($unit instanceof Cavalry) {
            throw new Exception('Can\'t get a horse on the vehicle');
        }
        parent::addUnit($unit);
    }
    public function bombardStrength() {
        return 15;
    }
}
class Archer extends Unit {
    public function bombardStrength() {
        return 4;
    }
}
class LaserCannonUnit extends Unit {
    public function bombardStrength() {
        return 44;
    }
}
class Cavalry extends Unit {
    public function bombardStrength() {
        return 15;
    }
}