<?php

namespace App;

use App\Interface\PriceCalculationInterface;

class SuperMarket
{
    const PRODUCT_A = 'a';
    const PRODUCT_B = 'b';
    const PRODUCT_C = 'c';
    const PRODUCT_D = 'd';
    const PRODUCT_E = 'e';

    private $total = 0;
    private $itemList;
    private $totalList;

    public function __construct($input)
    {
        $this->itemList = $input;
    }

    public function calculateProductsPrice(PriceCalculationInterface $obj)
    {
        $productList = $this->itemList;
        if (array_key_exists(self::PRODUCT_A, $productList)) {
            $totalA = $obj->calculateA($productList[self::PRODUCT_A]);
            $this->setTotal($totalA, self::PRODUCT_A);
        }
        if (array_key_exists(self::PRODUCT_B, $productList)) {
            $totalB = $obj->calculateB($productList[self::PRODUCT_B]);
            $this->setTotal($totalB, self::PRODUCT_B);
        }
        if (array_key_exists(self::PRODUCT_C, $productList)) {
            $totalC = $obj->calculateC($productList[self::PRODUCT_C]);
            $this->setTotal($totalC, self::PRODUCT_C);
        }
        if (array_key_exists(self::PRODUCT_D, $productList)) {
            $totalD = $obj->calculateD($productList[self::PRODUCT_D]);
            $this->setTotal($totalD, self::PRODUCT_D);
        }
        if (array_key_exists(self::PRODUCT_E, $productList)) {
            $totalE = $obj->calculateE($productList[self::PRODUCT_E]);
            $this->setTotal($totalE, self::PRODUCT_E);
        }
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function getTotalList()
    {
        return $this->totalList;
    }

    private function setTotal($totalAmt, $productName)
    {
        $this->total = $this->total + $totalAmt;
        $this->totalList[$productName] = $totalAmt;
    }
}
