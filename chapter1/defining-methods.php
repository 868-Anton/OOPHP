<?php

class Basket{

  public $itemsTotal;
  public $shippingCost;
  public $discount;


  public function calculateDiscount(){
    $totalCost = $this->itemsTotal + $this->shippingCost;
    return $totalCost - $this->discount;
  }
}

$basketObject = new Basket();
$basketObject->itemsTotal = 50;
$basketObject->shippingCost = 20;
$basketObject->discount = 30;

// var_dump($basketObject);

var_dump($basketObject->calculateDiscount());