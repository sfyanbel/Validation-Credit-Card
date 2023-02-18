<?php

class AmericanExpress
{
    //American Express cards always begin with the number 3, more specifically 34 or 37
    static $FNumber=3;

    static $name = 'This is AmericanExpress Credit Card';
}
class Visa 
{
    //Visa cards begin with the number 4.
    static $FNumber=4;
 
    static $name = 'This is Visa Credit Card';
}
class MasterCards
{
    //Mastercards start with the number 5.
    static $FNumber=5;
  
    static $name = 'This is MasterCards Credit Card';
}
class Discover
{
    //Discover Cards begin with the number 6.
    static $FNumber=6;
   
    static $name = 'This is Discover Credit Card';
}


// Test Credit Card
$testCreditCard = "494341960148925";

//first number of test Credit Card
$firstNumber = substr($testCreditCard, 0, 1);


// index = First Number of the every Credit Type &&
// value = name of the Credit Card
$CreditCard = [
    AmericanExpress::$FNumber => AmericanExpress::$name,
    Visa::$FNumber => Visa::$name,
    MasterCards::$FNumber => MasterCards::$name,
    Discover::$FNumber => Discover::$name,
    // as $firstNumber just one char is possible to Control to the safty null index 
    //without using any extra Resource for best : Big O(n)
    '0' => 'not exist','1' => 'not exist','2' => 'not exist',
    '7' => 'not exist','8' => 'not exist','9' => 'not exist',
  ];


 echo $CreditCard[$firstNumber];
 



?>