<?php
/*
|-------------------------
|PROJECT-1
|-------------------------
*/

/*
* PROBLEM:
* We have a list of people's information with name and age
* 1.we want to count number of adults (+18 years old) and children
* 2.we want to make of people between 22 to 30 who can apply for our job opening
*/

$people =[
    ['name'=> 'joseph','age'=> 25],
    ['name'=> 'sai','age'=> 10],
    ['name'=> 'ramesh','age'=> 88],
    ['name'=> 'srikanth','age'=> 8],
    ['name'=> 'shive','age'=> 12],
    ['name'=> 'shankar','age'=> 45],
    ['name'=> 'pavan','age'=> 68],
    ['name'=> 'rajesh','age'=> 12],
    ['name'=> 'darmendar','age'=> 75],
    ['name'=> 'manish','age'=> 17]
    

];

/*SOLUTION*/
$adultCount=0;
$childCount=0;
$canApplyforTheJob=[];
foreach($people as $person){
    $age=$person['age'];
    if($age>=18){
        //this person ia a adult
        $adultCount++;
        if($age >=22&& $age <=30){
            //this person can apply for the job
            $canApplyforTheJob[]=$person;
        }
    }
    else{
        //this person is a child
        $childCount++;
        
    }
}
echo "There are $adultCount adults in the community" . PHP_EOL;
echo "There are $childCount children in the community" . PHP_EOL;
echo "here is the list of people who can apply for our job" . PHP_EOL;
print_r($canApplyforTheJob);

?>