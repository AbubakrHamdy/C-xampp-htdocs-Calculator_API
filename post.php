<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application.json');

$y=$_GET['num1'];
$z=$_GET['num2'];
$x=$y+$z;
//echo "string";
echo json_encode(array('res' => $x));