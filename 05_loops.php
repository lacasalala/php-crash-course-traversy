<?php

// for($x=0 ; $x<= 10; $x++) {
//     echo 'Number' . $x . '<br>';
// } 

//while loop
// $x=1;
//  while($x<=15){
//     echo 'Number'.$x.'<br>';
//     $x++;}

// do while loop
// $x=9;

// do {
//  echo 'Number'. $x .'<br>';
//  $x++;
// } while($x<=8);

$posts =['first post','second post','third post'];

// foreach($posts as $post){
//     echo $post;
// }

// for ($x=0;$x<=count($posts);$x++){
//     echo $posts[$x];
// }

// foreach($posts as $index => $post){
//     echo $index . '-'. $post. '<br>';
// }

$person = [
    'first_name'=>'Lasya',
    'last_name'=>'Talluri',
    'email'=>'lasya@gmail.com'
];

foreach($person as $key => $value){
    echo "$key=>$value <br>";
}