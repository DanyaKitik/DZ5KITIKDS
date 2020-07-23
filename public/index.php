<?php

require_once '../vendor/autoload.php';

$EUR = new App\Currency("EUR");
$USD = new App\Currency("USD");
print_r($EUR->getIsoCode().' and '.$USD->getIsoCode().' '.$EUR->equal($USD).'<br>');
echo '<br>';
$money = new App\Money(500,$EUR->getIsoCode());
$money1 = new App\Money(200,$EUR->getIsoCode());
$moneySum = $money->sum($money1);

print_r('money sum : '.$money->showMoney().' + '.$money1->showMoney().' = '.$moneySum->showMoney());
echo '<br>';
$money2 = new App\Money(500,$USD->getIsoCode());
print_r('<br>'.$money->showMoney().' and '.$money2->showMoney());
print_r($money->equal($money2));
