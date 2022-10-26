<?php

declare(strict_types=1);

namespace App\Kata1;

class Discount implements CostInterface
{
    public function __construct(private readonly float $discount, private readonly CostInterface $baseCost)
    {
    }

    public function cost(): float
    {
        return (1 - ($this->discount / 100)) * $this->baseCost->cost();
    }
}
