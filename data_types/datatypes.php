<?php

$name="Harry";
$income="200";

/*php data types

1.String
2.Integer
3.Float
4.Boolean
5.Object
6.Array
7.NULL

*/
//String -sequence of character


$name="pradeep";
$friend= 'sai';

echo "$friend is a friend of $name <br>";

//Integer -Non decimal number

 $income = 455;
 $debts=-655;

 echo $income;
 echo "<br>";
 echo $debts;

 //Float- Decimal number

 $income = 455.6;
 $debts=-655.7;

 echo $income;
 echo "<br>";
 echo $debts;

 //Boolean - Can be true or false

 $x=true;
 $y=false;

 echo var_dump($x);
 echo "<br>";
 echo var_dump($y);
 echo "<br>";

//Object-Instances of classes

//Employess is a class --->pradeep can be object

//Array -Used to store multiple values in a single line

$friends =array("sai","ramesh","siddhu","raj");

echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";

//NULL

$name=NULL;

echo var_dump($name);



?>