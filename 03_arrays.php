<?php
//simple array
$numbers=[1,4,6,7];//this is one way to write an array
$fruits=array('apple','banana','mango');//this is another way to write an array
// var_dump($numbers);
// echo $numbers[3];

// associative array
$colors = [
    1=>'pink',
    3=>'green',
    8=>'blue'
];
// echo $colors[1];

$hex=[
    'red'=>'#f00',
    'green'=>'#0f0',
    'blue'=>'#00f'
];

// echo $hex['green'];

$people = [
    [
        'first_name'=>'Lasya',
        'last_name'=>'Talluri',
        'email'=>'lasya@gmail.com'
    ],
    [
        'first_name'=>'John',
        'last_name'=>'Doe',
        'email'=>'john@gmail.com'
    
    ],
    [
        'first_name'=>'Jane',
        'last_name'=>'Doe',
        'email'=>'jane@gmail.com'
    ]
];

// echo $people[0]['last_name'];
var_dump(json_encode($people));