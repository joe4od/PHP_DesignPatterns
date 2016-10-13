<?php
require 'class.php';

$farmerHome = new FarmerFactory;
$farmerUnit = $farmerHome->outputHuman();
$devilUnit = $farmerHome->outputMonster();

$workerHome = new WorkerFactory;
$workerUnit = $workerHome->outputHuman();
$daemonUnit = $workerHome->outputMonster();

$soliderHome = new SoliderFactory;
$soliderUnit = $soliderHome->outputHuman();
$goblinrUnit = $soliderHome->outputMonster();

echo $farmerUnit->playSlogan();
echo $workerUnit->playSlogan();
echo $soliderUnit->playSlogan();
echo '<br/>';
echo $devilUnit->roar();
echo $daemonUnit->roar();
echo $goblinrUnit->roar();