<?php

class Calendar
{
  public $name;

  //static properties 
  // Value can change but remains static for class and instances
  public static $daysInFebruary = 28;

  //const are all Caps
  //fixed values associated with this class
  private const MONTHS_IN_YEAR = 12;

  public function getMonthInYear(){
    //How to call const we dont use $this key word
    // Also by doing so we can access if it was private
    return self::MONTHS_IN_YEAR;
  }
}

$calendar = new Calendar();
$calendar ->name = 'Year Planner';
print $calendar->name . PHP_EOL;
//print Calendar::MONTHS_IN_YEAR . PHP_EOL; could be used if public
// what is PHP_EOL
// print $calendar->getMonthInYear() . PHP_EOL; could be used if private

print Calendar::$daysInFebruary. PHP_EOL;
Calendar::$daysInFebruary++;
print $calendar::$daysInFebruary . PHP_EOL;
