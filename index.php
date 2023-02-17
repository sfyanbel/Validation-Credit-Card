<?php



class AmericanExpress
{
    //American Express cards always begin with the number 3, more specifically 34 or 37
    static $fistNumber=3;

    static $name = 'AmericanExpress';
}
class Visa 
{
    //Visa cards begin with the number 4.
    static $fistNumber=4;
 
    static $name = 'Visa';
}
class MasterCards
{
    //Mastercards start with the number 5.
    static $fistNumber=5;
  
    static $name = 'MasterCards';
}
class Discover
{
    //Discover Cards begin with the number 6.
    static $fistNumber=6;
   
    static $name = 'Discover';
}


// MasterCards Credit Card
$testCreditCard = "094341960148925";

//first number of Credit Card
$firstNumber = substr($testCreditCard, 0, 1);


$CreditCard = [
    '3' => AmericanExpress::$name,
    '4' => Visa::$name,
    '5' => MasterCards::$name,
    '6' => Discover::$name,
    '0' => 'not exist',
    '1' => 'not exist',
    '2' => 'not exist',
    '3' => 'not exist',
    '4' => 'not exist',
    '5' => 'not exist',
    '6' => 'not exist',
    '7' => 'not exist',
    '8' => 'not exist',
    '9' => 'not exist',
  ];


 echo $CreditCard[$firstNumber];
 



?>