<?php

declare(strict_types=1);

namespace homework;

class money
{
    private $amount;
    private $currency;

    public function __construct(float $amount, string $currency)
    {
        $this->currency = $currency;
        $this->amount = $amount;
    }


    public function getAmount(): float
    {
        return $this->amount;
    }


    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }


    public function getCurrency(): string
    {
        return $this->currency;
    }


    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function equals(money $money)
    {
        return $this->amount === $money->getAmount();
        return $this->currency == $money->getCurrency();
    }

    public function add(money $money)
    {
        if ($this->currency === $money->currency) {
            return new money ($this->amount + $money->getAmount(), $money->getCurrency());
        } else {
            throw new \Exception('different currencies');
        }

    }

}
