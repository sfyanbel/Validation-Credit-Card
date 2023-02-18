<?php
abstract class CreditCard
{
    private  $FNumber;
    private  $name;
}
class AmericanExpress extends CreditCard
{
    //American Express cards always begin with the number 3, more specifically 34 or 37
    static $FNumber=3;

    static $name = 'This is AmericanExpress Credit Card';
}
class Visa extends CreditCard
{
    //Visa cards begin with the number 4.
    static $FNumber=4;
 
    static $name = 'This is Visa Credit Card';
}
class MasterCards extends CreditCard
{
    //Mastercards start with the number 5.
    static $FNumber=5;
  
    static $name = 'This is MasterCards Credit Card';
}
class Discover extends CreditCard
{
    //Discover Cards begin with the number 6.
    static $FNumber=6;
   
    static $name = 'This is Discover Credit Card';
}

// Test Credit Card
$testCreditCard = "594341960148925";

//first number of test Credit Card
$firstNumber = substr($testCreditCard, 0, 1);

// index = First Number of the every Credit Type &&
// value = name of the Credit Card
$CreditCard = [
    AmericanExpress::$FNumber => AmericanExpress::$name,
    Visa::$FNumber => Visa::$name,
    MasterCards::$FNumber => MasterCards::$name,
    Discover::$FNumber => Discover::$name,
    '0' => 'not exist','1' => 'not exist','2' => 'not exist',
    '7' => 'not exist','8' => 'not exist','9' => 'not exist',
  ];
   //why I but 'not exist' above? for didnot use extra Resource for best : Big O(n) 

 echo $CreditCard[$firstNumber];
 
?>