<?php
//Product
class Meal {
    private $food;
    private $drink;
    private $dessert;

    public function setMeal($food) {
        $this->food = $food;
    }
    public function setDrink($drink) {
        $this->drink = $drink;
    }
    public function setDessert($dessert) {
        $this->dessert = $dessert;
    }
    public function showMeal(){
        return $this->food . '－' . $this->drink . '－' . $this->dessert . '<br/>';
    }
}

//Concrete Builder
class ChickenMealBuilder extends MealBuilder {
    protected  $meal = null;
    public function __construct() {
        $this->meal = new Meal();
    }
    public function buildFood() {
        $this->meal->setMeal('我是雞腿堡');
    }
    public function buildDrink() {
        $this->meal->setDrink('我是可樂');
    }
    public function buildDessert() {
        $this->meal->setDessert('我是薯條');
    }
    public function getMeal(){
        return $this->meal;
    }
}

//Director
class MealDirector {
    private $mealBuilder;
    
    public function setMealBuilder(MealBuilder $mealBuilder) {
        $this->mealBuilder = $mealBuilder;
    }    
    public function buildMeal() {
        $this->mealBuilder->buildFood();
        $this->mealBuilder->buildDrink();
        $this->mealBuilder->buildDessert();
        
        return $this->mealBuilder->getMeal();
    }
}
