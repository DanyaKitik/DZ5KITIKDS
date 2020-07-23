<?php

namespace App;

class Money{
    private float $amount;
    private string $currency;
    public function __construct(float $amount,string $currency)
    {
      $this->setCurrency($currency);
      $this->setAmount($amount);
    }
    public function getCurrency(): string
    {
        return $this->currency;
    }
    private function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }
    public function getAmount(): float
    {
        return $this->amount;
    }
    private function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }
    public function equal(self $money): string
    {
        if($this->getAmount() === $money->getAmount()){
            $amount = '<br>amount equal';
        }
        else{
            $amount = '<br>amount not equal';
        }
        if($this->getCurrency() === $money->getCurrency()){
            $currency = '<br>currency equal';
        }
        else{
            $currency = '<br>currency not equal';
        }
        return $amount.$currency;
    }
    public function sum(self $money)
    {
        if($this->getCurrency() === $money->getCurrency()){
            return new self($this->getAmount()+ $money->getAmount(),$this->getCurrency());
        }
        exit("InvalidArgumentException IsoCode should be the same for sum");
    }
    public function showMoney(): string
    {
        $formatter = new \NumberFormatter('ru_RU', \NumberFormatter::CURRENCY);
            return  $formatter->formatCurrency(self::getAmount(),self::getCurrency());
    }
}
