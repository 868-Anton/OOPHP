<?php

require_once 'CheckingAccount.php';

class PremiumCheckingAccount extends CheckingAccount

{
  public $minimumBalance = 2000;
}

//Create a PremiumCheckingAccount class which extends CheckingAccount
//Give it public $minimumBalance property with a default value
//Echo out $premiumCheckingAccount->minimumBalance in inheritance.php
//Call all of the methods which it inherits 