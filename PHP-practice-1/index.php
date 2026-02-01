<?php

//how to declare variables and their types
$x='nimra';
echo "my name is $x ";// this is the first way to see the result. by "" which is easy and preferd
echo ' my name is '.$x;// this is the second way to declare the variables  which is painfull but can be usefull at some cases
echo "\n"; // this shows new line , which we basucally use for breaking lines in terminal 
$a=7;
$b=8;
$sum=$a+$b;
$x=$y=$z=5;
echo "the value of x ,y,z is $z \n";
echo "the sum is $sum \n";
var_dump($sum);// this is for checking variables types 

var_dump(NULL);
echo " the sub of this two numbers are $b-$a";
echo "this is me";

// practicing the scopes
/*when a varible is created inside a function then it can only be accessed within the function and
 if we try to accessed it from outside the function then it will show an error . 
for which it's called local scope*/
 function value(){
    $k=7;
    echo " the value is $k \n";
 };
 value();
 echo "the value outside of function might be empty: $k \n";
/*when a variable is  created at top of the page and not within ay functions then we can accesse this variable only outside of any functions. 
if we try to use this within a function then it will give undefined value like the below example */
function globalScope(){
    echo"this is the value of the variable which is declared at top $a \n";//this is giving an undefined value
};
globalScope();
// to solve this problem global variable is being called 
function myTest() {
  global $a, $b;
  $b = $a + $b;
}

myTest();
echo $b; 
echo "\n";


/* this is for static scope. when we declare a variable as static within a function then the values are stored even after the functions complete its works.
 for example if we want to increase a value of variable p=0 to like 1,2,3 +++, then at fist the value will be increased at 1. then the functions finished its execution but stores the value 1.
  now even we call the funciton again then the value will be 2 that means is stores the previous functions output which was 1  */
    function counterStatic (){
    static $num=5;
    $num++;
    echo $num ."\n"; 
  };
  counterStatic();
  counterStatic();
  counterStatic();
// in this normal variable the values remains same
    function counter(){
    $num=5;
    $num++;
    echo $num ."\n"; 
  };
  counter();
  counter();
  counter();


  // data type checking
// in this checking if the types changes in different inputs
$x = 5;
var_dump($x);

$x = "nimra";
var_dump($x);

// php strings examples
// Using double quotes
$x = "John";
echo "Hello $x\n";
echo "\tHow are you?\n";

// Using single quotes --- single quotes wont allow \n line inside it also cant capture variables dynamically
$x = 'John';
echo 'Hello $x\n';
echo '\tHow are you?\n';
echo "\n";

// functions for word count , string lenght, searching text
$line="hello this is a new world for me";
echo strlen("this is a new world ");
echo "\n";
echo str_word_count("hello this is a new world  full of new opportunity ");
echo "\n";
echo str_contains($line,"new ");
echo "\n";
echo strpos("this is my name","name");
echo "\n";
echo strtoupper($line);
echo "\n";
echo strtolower($line);
echo "\n";
echo strrev($line);
$splittedText=explode(" ",$line);
print_r($splittedText); 
// joining words
$p=5;
$r=6;
$result=$p.$r;
echo $result;
echo "\n";
$words="my name is khan";
echo substr($words,-5,2);
echo "\n";
// if i want to print special characters then we need to use back slash \ .
echo" I'm from \"chittagong\"";

$a=777;
$b="666";
$c="abc";
$b =$a+$b;
echo "\n";
var_dump($b);
echo "\n";
echo is_numeric($b);
echo "\n";
// most important define function
// we need to write in uppercase , the variable names

define("LIFE", "life is a beautiful lie");
echo LIFE;

//php calculation
$j=7;
$r=5;
$mul=$j*$r;
echo"\n";
echo"$mul";
$power=$j**$r;
echo"\n";
echo"$power";
// php constant 
//_Class_ method- 