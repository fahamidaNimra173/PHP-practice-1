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
 function increase(){
    $k=7;
    echo " the value is $k \n";
 };
 increase();
 echo "the value outside of function might be empty: $k \n";
/*when a variable is  created at top of the page and not within ay functions then we can accesse this variable only outside of any functions. 
if we try to use this within a function then it will give undefined value like the below example */
function globalScope(){
    echo"this is the value of the variable which is declared at top $a \n";//this is giving an undefined value
};
globalScope();


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