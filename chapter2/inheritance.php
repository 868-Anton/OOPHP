<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inheritance</title>
</head>
<body>
  <?php

  require 'PremiumCheckingAccount.php';

  //$account = new Account();
  $premiumCheckingAccount = new PremiumCheckingAccount();


  $premiumCheckingAccount->deposit(40);
  $premiumCheckingAccount->withdraw(20);
  $premiumCheckingAccount->transfer(100);
  echo $premiumCheckingAccount->minimumBalance;


  ?>
</body>
</html>