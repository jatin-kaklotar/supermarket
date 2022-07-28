<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\RegularPrice;
use App\SpecialOfferPrice;
use App\SuperMarket;


$input = ['a' => 7, 'b' => 3, 'c' => 7, 'd' => 8, 'e' => 5];
$obj = new SuperMarket($input);
$calculateObj = new SpecialOfferPrice();
//Un comment below line if your special offer is closed
// $calculateObj = new RegularPrice();
$obj->calculateProductsPrice($calculateObj);

echo "<pre>";
print_r($obj->getTotalList());
echo $obj->getTotal();
