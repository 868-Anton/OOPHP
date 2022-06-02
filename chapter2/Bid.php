<?php

class Bid
{
  private $minimumBid = 5; //default set for demo purposes only
  private $bidAmount;

  public function setBidAmount($amount){

      if($amount <$this->minimumBid ){
        $this->bidAmount = $this ->minimumBid;
        return;
      }
      {
        $this->bidAmount = $amount;
      }
  }

  public function getBidAmount(){
    return $this->bidAmount;
  }
}