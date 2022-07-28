<?php

use App\SpecialOfferPrice;
use App\SuperMarket;
use PHPUnit\Framework\TestCase;

class SuperMarketTest extends TestCase
{
    public function testCalculateA()
    {
        $input = ['a' => 7];
        $obj = new SuperMarket($input);
        $calculateObj = new SpecialOfferPrice();
        $obj->calculateProductsPrice($calculateObj);
        $this->assertEquals(['a' => 310],  $obj->getTotalList());
    }

    public function testProductAandB()
    {
        $input = ['a' => 5, 'b' => '5'];
        $obj = new SuperMarket($input);
        $calculateObj = new SpecialOfferPrice();
        $obj->calculateProductsPrice($calculateObj);
        $this->assertEquals(['a' => 230, 'b' => 120],  $obj->getTotalList());
    }

    public function testCalculateAllItem()
    {
        $input = ['a' => 7, 'b' => 3, 'c' => 7, 'd' => 8, 'e' => 5];
        $obj = new SuperMarket($input);
        $calculateObj = new SpecialOfferPrice();
        $obj->calculateProductsPrice($calculateObj);
        $this->assertEquals(
            ['a' => 310, 'b' => 75, 'c'=> 120, 'd' => 50, 'e' => 25],
            $obj->getTotalList()
        );
    }

    public function testProductAShouldNotCalcualteWithNormalPriceWhenMoreThan3()
    {
        $input = ['a' => 4];
        $obj = new SuperMarket($input);
        $calculateObj = new SpecialOfferPrice();
        $obj->calculateProductsPrice($calculateObj);
        $this->assertNotEquals(200,  $obj->getTotalList()['a']);
    }

    public function testProductAWithD()
    {
        $input = ['a' => 4, 'd' => 6];
        $obj = new SuperMarket($input);
        $calculateObj = new SpecialOfferPrice();
        $obj->calculateProductsPrice($calculateObj);

        $normalPrice = 2 * 15;
        $specialPriceForA = 4 * 5;
        $amountD = $normalPrice + $specialPriceForA;
        $this->assertEquals($amountD,  $obj->getTotalList()['d']);
    }
}
