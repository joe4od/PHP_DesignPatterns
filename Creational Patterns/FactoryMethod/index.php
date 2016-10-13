<?php
require('class.php');

/*
 //動態宣告寫法
$factory = new CreateFactory();
echo $factory->create('Farmer')->playSlogan();
echo $factory->create('Worker')->playSlogan();
echo $factory->create('Solider')->playSlogan();
echo $factory->create('Solider')->getWeapon();
 */

//原始寫法
$farmerHome = new FarmerBuildFactory;
$farmer = $farmerHome->outputUnit();
echo $farmer->playSlogan();
echo $farmer->getFarm();

$workerHome = new WorkerBuildFactory;
$worker = $workerHome->outputUnit();
echo $worker->playSlogan();
echo $worker->getWork();

$soliderHome = new SoliderBuildFactory;
echo $soliderHome->outputUnit();