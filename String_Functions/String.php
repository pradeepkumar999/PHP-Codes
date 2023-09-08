<?php
$name="Pradeep is my name";

echo $name;
echo"<br>";
echo "length of the string is ".strlen($name);
echo"<br>";
echo "no of words ".str_word_count($name);
echo"<br>";
echo strrev($name);
echo"<br>";
echo strpos($name,"is");
echo"<br>";
echo str_replace("Pradeep","sai",$name);
echo"<br>";
echo str_repeat($name,4);
echo"<br>";
echo"<pre>";
echo rtrim("    this is a good boy   ");
echo"<br>";
echo ltrim("    this is a good boy   ");
echo"</pre>";
echo"<br>";




?>