<?php
namespace App\Interface;

interface PriceCalculationInterface
{
    public function calculateA($item);

    public function calculateB($item);

    public function calculateC($item);

    public function calculateD($item);

    public function calculateE($item);
}