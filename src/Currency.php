<?php

namespace App;

class Currency{
    private string $isoCode;
    public function __construct(string $isoCode)
    {
        $this->setIsoCode($isoCode);
    }
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }
    private function setIsoCode(string $isoCode): void
    {
        if(mb_strlen($isoCode) != 3){
            exit("InvalidArgumentException IsoCode can be 3 letters");
        }
        $this->isoCode = $isoCode;
    }
    public function equal(self $currency): string
    {
        if($this->getIsoCode() === $currency->getIsoCode()){
            return "equal";
        }
        return "not equal";
    }

}
