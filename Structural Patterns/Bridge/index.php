<?php
require 'class.php';

$iosPlatform = new IOSPlatform;
$androidPlatform = new AndroidPlatform;

$androidAngryBirdNormal = new AngryBirdNormal($androidPlatform);
$androidAngryBirdNormal->play();

$iosAngryBirdNormal = new AngryBirdNormal($iosPlatform);
$iosAngryBirdNormal->play();