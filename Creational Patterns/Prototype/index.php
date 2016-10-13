<?php
require 'class.php';

$obj1 = new SubObject('obj1');
$obj2 = new SubObject('obj2');

//產生一個prototype物件
$novelA = new NovelPrototype($obj1, $obj2, 'Novel');
$novelA->show();
print_r($novelA);

echo '<br/><br/>';

//複製$novel
$novelB = clone $novelA;
$novelB->show();
print_r($novelB);

//修改novelB的title
$novelB->setTitle('Modified NovelB Title');

echo '<br/><br/>';
$novelA->show();

echo '<br/><br/>';
$novelB->show();

echo '<br/><br/>';
$novelC = $novelB;
$novelC->show();
print_r($novelC);