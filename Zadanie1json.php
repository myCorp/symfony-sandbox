<?php

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json, text/javascript');


$article_id = $_POST['article_id'];

$arr = array('data', 'data2' => 'more data', 'data3' => array('even', 'more', 'data'));


$db_server = mysqli_connect('localhost','arch','q1w2e3r4','publications');
if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());

/*
$mysqli = new mysqli("localhost", "arch", "q1w2e3r4", "publications");
$qq = "SELECT mail FROM mails WHERE No = '".$article_id."'";
$qer = $mysqli->query($qq);
$resuu = $qer->fetch_row();
*/

$query = "SELECT mail FROM mails WHERE No = '".$article_id."'";

$result = mysqli_query($db_server, $query);

$rows = mysqli_fetch_row($result);


echo json_encode(array('qss' => $rows[0]));

//echo json_encode($arr[data2]." id= ".$article_id." mail= ".$rows[0]);		// Отдаёт обратно в ф success
