<?php

namespace App;

class Money{
    private float $amount;
    private object $currency;
    public function __construct(float $amount,object $currency)
    {
      $this->setCurrency($currency);
      $this->setAmount($amount);
    }
    public function getCurrency(): object
    {
        return $this->currency;
    }
    private function setCurrency(object  $currency): void
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
    public function equal(self $money): bool
    {
        if($this->getAmount() === $money->getAmount() && $this->getCurrency() === $money->getCurrency()){
            return true;
        }
        else{
            return false;
        }

    }
    public function sum(self $money)
    {
        if($this->getCurrency() === $money->getCurrency()){
            return new self($this->getAmount()+ $money->getAmount(),$this->getCurrency());
        }
        throw new \Exception("InvalidArgumentException IsoCode should be the same for sum");
    }
    public function showMoney(string $currency): string
    {
        $formatter = new \NumberFormatter('ru_RU', \NumberFormatter::CURRENCY);
            return  $formatter->formatCurrency(self::getAmount(),$currency);
    }
}
