<?php

declare(strict_types=1);

namespace App\Kata2;

interface PriceCalculatorInterface
{
    public function calculate(float $price, float $discount, float $tax);
}
