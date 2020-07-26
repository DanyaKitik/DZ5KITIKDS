<?php

require_once '../vendor/autoload.php';

$EUR = new App\Currency("EUR");
$USD = new App\Currency("USD");
echo 'EQUAL CURRENCY <br>';
var_dump($EUR->getIsoCode());
var_dump($USD->getIsoCode());
var_dump($EUR->equal($USD));


echo '<br>';
$money = new App\Money(500,$EUR);
$money1 = new App\Money(200,$EUR);
$moneySum = $money->sum($money1);

echo '<br><br><br>MONEY SUM <br>';
var_dump($money->getAmount());
var_dump($money->getCurrency());
echo '<br>';
var_dump($money1->getAmount());
var_dump($money1->getCurrency());
echo '<br>';
var_dump($moneySum->getAmount());
var_dump($moneySum->getCurrency());



echo '<br><br><br>MONEY EQUAL<br>';
$money2 = new App\Money(500,$USD);
var_dump($money->getAmount());
var_dump($money->getCurrency());
echo '<br>';
var_dump($money2->getAmount());
var_dump($money2->getCurrency());
echo '<br>';
var_dump($money->equal($money2));
