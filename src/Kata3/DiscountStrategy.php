<?php

declare(strict_types=1);

namespace App\Kata3;

use App\Kata2\PriceCalculatorInterface;

class DiscountStrategy
{
    public function __construct(private readonly PriceCalculatorInterface $calculator)
    {
    }
    public function calculate(float $price, float $discount, float $tax)
    {
        return $this->calculator->calculate($price, $discount, $tax);
    }
}
