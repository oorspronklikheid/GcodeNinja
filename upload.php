<?php 

// $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
// echo 'hai';
// $_POST['test'] = 'what' ;
$raw_data = file_get_contents("php://input");

echo $raw_data;


// $myfile = fopen("testfile.txt", "w") 

 ?>