<?php

require_once '../vendor/autoload.php';

$EUR = new App\Currency("EUR");
$USD = new App\Currency("USD");
echo 'EQUAL CURRENCY <br>';
var_dump($EUR->getIsoCode().' '.$USD->getIsoCode());
var_dump($EUR->equal($USD));


echo '<br>';
$money = new App\Money(500,$EUR);
$money1 = new App\Money(200,$EUR);
$moneySum = $money->sum($money1);

$curr = $money->getCurrency();
$curr1 = $money1->getCurrency();
$curr2 = $moneySum->getCurrency();

echo '<br><br><br>MONEY SUM <br>';
var_dump($money->showMoney($curr->getIsoCode()).' + '.
    $money1->showMoney($curr1->getIsoCode()).' = '.
    $moneySum->showMoney($curr->getIsoCode()));


echo '<br><br><br>MONEY EQUAL<br>';
$money2 = new App\Money(500,$USD);
$curr3 = $money2->getCurrency();
var_dump($money->showMoney($curr->getIsoCode()).'  '.
    $money2->showMoney($curr3->getIsoCode()).'<br>');
var_dump($money->equal($money2));


echo '<br><br><br><br><br>';