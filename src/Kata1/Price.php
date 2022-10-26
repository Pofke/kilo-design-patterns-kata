<?php

declare(strict_types=1);

namespace App\Kata1;

class Price implements CostInterface
{
    public function __construct(private float $value)
    {
    }

    public function cost(): float
    {
        return $this->value;
    }
}
