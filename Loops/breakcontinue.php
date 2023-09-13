<?php
//break
$names=['John','Alex','Simon','Amir'];
$FoundIt=false;
foreach($names as $name){
    echo "$name<br>";
    if($name=='Alex'){
        $FoundIt=true;
       break;
    }
}

echo "$FoundIt<br>";

//continue
$numbers=[3,457,786,284,986];

foreach($numbers as $number){
    echo "$number<br>";
    if($number%3==0){
        continue;
    }
    echo "$number<br>";
}

?>