<?php
nameSpace App;

use App\Interface\PriceCalculationInterface;

class RegularPrice implements PriceCalculationInterface
{
    public function calculateA($item)
    {
        return $item * 50;
    }

    public function calculateB($item)
    {
        return $item * 30;
    }

    public function calculateC($item)
    {
        return $item * 20;
    }

    public function calculateD($item)
    {
        return $item * 15;
    }

    public function calculateE($item)
    {
        return $item * 5;
    }
}