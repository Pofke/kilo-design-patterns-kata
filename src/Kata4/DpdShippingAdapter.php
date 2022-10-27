<?php

namespace App\Kata4;

use App\Kata1\CostInterface;

class DpdShippingAdapter implements CostInterface
{
    private DpdShippingProvider $dpdShippingProvider;
    private CostInterface $baseCost;

    public function __construct(DpdShippingProvider $dpdShippingProvider, CostInterface $baseCost)
    {
        $this->dpdShippingProvider = $dpdShippingProvider;
        $this->baseCost = $baseCost;
    }

    public function cost(): float
    {
        return $this->dpdShippingProvider->ourCost() + $this->baseCost->cost();
    }
}
