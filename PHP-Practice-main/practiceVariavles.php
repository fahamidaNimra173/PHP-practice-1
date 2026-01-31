<?php
$name = 'nimra'; //this is variable
$firstName = 'Fahmida';
$rev = strrev($name);
define('age', 23); // and this is constant
// temporary variavle , constant er value store korar jonne
$constant = 'constant';
echo "This is my first program {$name} \n";
echo "This is my reverse name  {$rev} \n";
echo "This is my first program " . $name;
echo "\n";
echo "This is my first program 'age' \n";
"\n";
echo "And $name's age is " . age;
echo "\n";
echo "And $name's age is {$constant('age')} \n";
echo "\n";
printf("I'm %s , and my age is %s \n", $name, age); //constant hoile $ sign ta use kora lage nah,%s mane string,%d mane decimal,%h hexadecimal,
var_dump($name);
// Mathmetical calculations

$num1 = 5;
echo "$num1";

$num2 = 7;
echo "$num2 \n";
$num3 = $num1 + $num2;
$num3 += 6;
$num4 = (24 - 6) / 3;
$num5 = $num3 = $num2;
$num6 = $num5++; // eta mane first a num6 a value assign hove then num 5 a 1 barbe
$num7 = ++$num4; // eta mane first a num4 a value barbe  then num 7 a value assign hobe
echo "$num4 \n";
echo "$num3 \n";
echo "$num5 \n";
echo $num6, "\n", $num5, "\n";
echo "first this happen $num6,\n,then this happen  $num5 \n";
echo "first this happen $num4,\n,then this happen  $num7 \n ";
printf("printing the number is 4 digits %04d \n ", $num1);

//printf and sprintf er kaj
printf('My full name is %2$s %1$s', $name, $firstName);
echo "\n";
printf('My double age is %1$s and %1$s ', age);
echo "\n";
$result = sprintf('My full name is %2$s %1$s and my age is = %3$d', $name, $firstName, age); // sprintf onekta return function er moto kaj kore
echo $result;
echo "\n";
//switch case
$int = 23;
$r = $int % 2;
switch (true) {
    case (0 == $r && $r > 0):
        echo "$int is a positive even number";
        break;

    case (1 == $r && $r > 0):
        echo "$int is a positive odd number";
        break;
    case ($r == 0 && $r < 0):
        echo "$int is a negative even number";
        break;
    case ($r == -1 && $r < 0):
        echo "$int is a negative odd number \n";
        break;
}

//loops
for($i=1; $i<10;$i++){
    echo"$i ";
    echo PHP_EOL;// PHP_EOL=end of the line
}
for($i=20;$i<30;$i++){
    if($i<25){
        continue;
    }
    echo "$i";
    echo PHP_EOL;
}
for($i=20;$i<30;$i++){
    if($i<25){
        break;
    }
    echo "$i";
    echo PHP_EOL;
}
//fibonacci series
$veryOld=0;
$old=1;
$new=1;
for($i=0;$i<10;$i++){
    echo"$veryOld " ;
    $old=$new;
    $new=$old+$veryOld;
    $veryOld=$old;
}
//explode(',' 'bringal, mango, banana, apple'); ei ecplode funtion ta kon sting k alada alada kore split korte pare
//copy by value-deep copy- pura element ta copy kore -orignal chnage hoy nah
//copy by reference- shallow copy-address copy kore & use kore refference pass kore jar karone orignal ta change hoy

$person='nimra';
$newPerson=$person;
echo"\n";
$newPerson='asik';
echo$newPerson;
echo"\n";
echo$person;
echo'--------';
echo"\n pass by reference";
$person='nimra';
$newPerson=&$person;
echo"\n";
$newPerson='asik';
echo$newPerson;
echo"\n";
echo$person;

//uset for delete.
$person1=array('fname'=>'hello','lname'=>'world');
print_r($person1);
echo($person1)['lname'];
echo"\n";


foreach ($person1 as $key => $value) {
    echo $key . " : " . $value . "\n";
}
echo"\n";
foreach($person1 as $key){
    echo$key;
    echo"\n";
}
unset($person1['lname']);
print_r($person1);