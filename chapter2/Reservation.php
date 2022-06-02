<?php

class Reservation
{
  private $host = 'Host Class';
  private $guest = 'Guest Class';
  // cancel
  public function cancel()
  {
      //check whether cancellation is an option
      //Refund the guest ...if refunds applicable [Guest]
      //Make the room available again [Room]
      //Notify the host [Host]
        //In app notification [Notification]
        //Send them an email / SMS [Email, SMS]
      // Send confirmation to guest [Email, SMS]

      $this->sendCancellationNotification();

      $this->refundGuest();

      echo "And a load of other stuff that I ain't put just testing.. ";
  }


  private function sendCancellationNotification ()
  {
    echo 'Sending notification to ' . $this->host . "<br>"; 
  }

  private function refundGuest()
  {
    echo 'Refunding '. $this->guest . "<br>";
  }
}
