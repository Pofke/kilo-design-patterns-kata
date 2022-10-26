<?php

declare(strict_types=1);

namespace App\Kata3;

use App\Kata2\PriceCalculatorInterface;

class DiscountStrategy
{
    private PriceCalculatorInterface $calculator;
    public function __construct()
    {
    }

    public function setStrategy(PriceCalculatorInterface $calculator): void
    {
        $this->calculator = $calculator;
    }


    public function calculate(float $price, float $discount, float $tax)
    {
        return $this->calculator->calculate($price, $discount, $tax);
    }
}
