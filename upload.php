<?php 

// $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
// echo 'hai';
// $_POST['test'] = 'what' ;
$raw_data = file_get_contents("php://input");

$data = json_decode($raw_data);

// var_dump($data);
$gcodedata =  $data->GCODE;
$filename = rand(0,9999);

file_put_contents("uploads/$filename.gcode",$gcodedata);

echo json_encode("$filename"); 
// echo json_encode("{\"loc\":/$filename.gcode}"); 

 ?>