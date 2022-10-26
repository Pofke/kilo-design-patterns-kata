<?php

declare(strict_types=1);

namespace App\Kata1;

class Shipping implements CostInterface
{
    public function __construct(private readonly float $shipping, private readonly CostInterface $baseCost)
    {
    }

    public function cost(): float
    {
        return $this->shipping + $this->baseCost->cost();
    }
}
