<?php
require 'class.php';

$chickenMealBuilder = new ChickenMealBuilder;
$beefMealBuilder = new BeefMealBuilder;
$mealDirector = new MealDirector;

$mealDirector->setMealBuilder($chickenMealBuilder);
$chickenMeal = $mealDirector->buildMeal(); //return meal
echo $chickenMeal->showMeal();

$mealDirector->setMealBuilder($beefMealBuilder);
$beefMeal = $mealDirector->buildMeal(); //return meal
echo $beefMeal->showMeal();