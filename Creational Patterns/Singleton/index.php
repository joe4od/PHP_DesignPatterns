<?php
require 'class.php';

$prefA = Preferences::getInstance();

$prefA->setProperty('name', 'matt');

unset($prefA);

$prefB = Preferences::getInstance();
echo $prefB->getProperty('name');