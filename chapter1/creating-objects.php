<?php
class User{
  public $name;
  public $username;
  public $followerCount;
}
//1. Instantiate a new User object named after yourself
$antonObject = new User();
//2. Set name, username and followerCount properties
$antonObject->name = 'Anton Graham';
$antonObject->username = '868-Anton';
$antonObject->followerCount= 50;
//3. Use print_r to check that you have created it correctly 
print_r($antonObject);
//4. Check you work in the browser 
//User Object ( [name] => Anton Graham [username] => 868-Anton [followerCount] => 50 )