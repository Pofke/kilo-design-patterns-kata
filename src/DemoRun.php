<?php

declare(strict_types=1);

namespace App;

use App\Kata1\Discount;
use App\Kata1\Price;
use App\Kata1\Shipping;
use App\Kata2\FreeShippingCalculator;
use App\Kata2\PriceCalculator;
use App\Kata2\PriceCalculatorInterface;
use App\Kata3\DiscountStrategy;
use App\Kata4\DpdShippingProvider;
use App\Kata4\DpdShippingAdapter;

class DemoRun
{
    private bool $isTuesday = false;

    public function kata1(): float
    {
        return (new Shipping(8, new Discount(20, new Price(100))))->cost();
    }

    public function kata2(PriceCalculatorInterface $calculator)
    {
        return $calculator->calculate(100, 20, 8);
    }

    public function kata3()
    {
        $discountStrategy = new DiscountStrategy();

        if ($this->isTuesday()) {
            $discountStrategy->setStrategy(new FreeShippingCalculator());
        } else {
            $discountStrategy->setStrategy(new PriceCalculator());
        }

        return $discountStrategy->calculate(100, 20, 8);
    }

    public function kata4(): float
    {
        $dpd = new DpdShippingProvider();
        return (new DpdShippingAdapter($dpd, new Discount(20, new Price(100))))->cost();
    }

    /**
     * @return bool
     */
    public function isTuesday(): bool
    {
        return $this->isTuesday;
    }

    /**
     * @param bool $isTuesday
     */
    public function setIsTuesday(bool $isTuesday): void
    {
        $this->isTuesday = $isTuesday;
    }
}
