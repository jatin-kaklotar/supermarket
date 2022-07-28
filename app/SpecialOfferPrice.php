<?php
nameSpace App;

use App\Interface\PriceCalculationInterface;

class SpecialOfferPrice implements PriceCalculationInterface
{
    private $itemA = 0;

    public function calculateA($item)
    {
        $this->itemA = $item;
        $specialAmt = floor($item / 3) * 130;
        $unitAmt  = ($item % 3) * 50;
        return $specialAmt + $unitAmt;
    }

    public function calculateB($item)
    {
        $specialAmt = floor($item / 2) * 45;
        $unitAmt  = ($item % 2) * 30;
        return $specialAmt + $unitAmt;
    }

    public function calculateC($item)
    {
        $specialAmt1 = floor($item / 3) * 50;
        $specialAmt2 =   floor(($item % 3) / 2) * 38;
        $unitAmt  = (($item % 3) % 2) * 20;
        return  $specialAmt1 + $specialAmt2 + $unitAmt;
    }

    public function calculateD($item)
    {
        if ($item  > $this->itemA) {
            $specialAmt1 = ($item - $this->itemA) * 15;
            $unitAmt = $this->itemA * 5;
            $totalD = $specialAmt1 + $unitAmt;
        } else {    
            $totalD = $item * 5;
        }
        return $totalD;
    }

    public function calculateE($item)
    {
        return $item * 5;
    }
}