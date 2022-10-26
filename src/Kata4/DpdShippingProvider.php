<?php

declare(strict_types=1);

namespace App\Kata4;

use App\Kata1\CostInterface;

class DpdShippingProvider implements CostInterface
{
    public function __construct(private readonly CostInterface $baseCost)
    {
    }
    public function ourCost(): float
    {
        return 4;
    }

    public function cost(): float
    {
        return $this->ourCost() + $this->baseCost->cost();
    }
}
