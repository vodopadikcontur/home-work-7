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


    private function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }


    public function getCurrency(): string
    {
        return $this->currency;
    }


    private function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function equals(money $money): bool
    {
        return $this == $money;
    }

    public function add(money $money)
    {
        if ($this->currency !== $money->currency) {
            throw new \Exception('different currencies');
        }

        return new money ($this->amount + $money->getAmount(), $money->getCurrency());

    }

}
