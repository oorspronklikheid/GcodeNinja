<?php 

// $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
// echo 'hai';
// $_POST['test'] = 'what' ;



$file = $_GET['File'] ;


// var_dump($file);

$filename = "uploads/" . $file . '.gcode' ; 
$gcode = file_get_contents($filename);

echo $gcode;
// $data = json_decode($raw_data);

// // var_dump($data);
// $gcodedata =  $data->GCODE;
// $filename = rand(0,9999);

// file_put_contents("uploads/$filename.gcode",$gcodedata);

// echo json_encode("$filename.gcode"); 
// // echo json_encode("{\"loc\":/$filename.gcode}"); 

 ?>