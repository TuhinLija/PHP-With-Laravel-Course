<?php

/*$i=1;
function sum(...$numbers){

    $limit= count($numbers);
    for($i=0; $i<$limit; $i++){
        $res += $numbers[$i];

    }

    echo $res;
}
sum(1,2,3,4,5,6);*/
/*$names = [
    "lija"=>[
        'age'=>22,
        'profession'=>[
            'teacher',
            'singer',
            'housewife',
        ]
    ],
    "tuhin",
    "tanis",
];
$names[1] = "munni";
echo"<pre>";
//print_r($names[1]);
print_r($names['lija']['profession'][2]);*/
echo"<pre>";
$person =[
    'name' =>"Mst.Tuhin Akter",
    'age' => 22,
    'profession'=>'software Engineer',
    'Blood group'=>'AB+',
    'Mobile Number'=>'01738227380',
    'Gender' => 'Female'

];
$person['married-status'] = "married";
/*array_push($person,"married");*/
$newPerson = &$person;
$newPerson['name'] = 'lija';

$justkeys = array_keys($person);


print_r($justkeys);
print_r($newPerson);
for($i = 0; $i<count($justkeys);$i++){
    if($i == count ($justkeys)-1){
        echo $person[$justkeys[$i]].".";
    }
    else{
        echo $person[$justkeys[$i]].",";
    }

}

/*
foreach($person as $key => $value){
    echo $key.",";
}*/
//$number =[1,2,3,4,5,6,7,8,9,10];


    for($i=1; $i<=10; $i++){

        if($i % 2 == 0){
            echo $i."<br>";
        }
        else{
            echo $i.",";
        }

    }
function one($a){
        if($a>10){
            return;
        }
        echo $a."<br>";
        $a++;
        one($a);

}
one(1);

    function sum($a,$b,...$number){
        print_r($number);

    }
sum(1,2,3,4,5);
