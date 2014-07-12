<?php

$db_server = mysqli_connect('localhost', 'arch', 'q1w2e3r4', 'pet_clinic') or die (mysqli_error());

mysqli_query($db_server, "CREATE TABLE client (clientID INT AUTO_INCREMENT PRIMARY KEY, client_name VARCHAR(16), address VARCHAR(64), phone VARCHAR(16), mail VARCHAR(32), INDEX(clientID))");
mysqli_query($db_server, "CREATE TABLE pet (clientID INT NOT NULL, pet_name VARCHAR(16), breed VARCHAR(16), age INT, INDEX(clientID))");
mysqli_query($db_server, "CREATE TABLE veterinarian (doctor_name VARCHAR(16) PRIMARY KEY, profession VARCHAR(16))");
mysqli_query($db_server, "CREATE TABLE reception (clientID INT, date VARCHAR(16), start_reception VARCHAR(16), end_time_reception VARCHAR(16),
symptoms VARCHAR(128), comment VARCHAR(512), veterinarian_name VARCHAR(16), status TINYINT, INDEX(clientID))");

//mysqli_query($db_server, "ALTER TABLE pet ADD FOREIGN KEY (clientID) REFERENCES client(clientID)");   		// добавляет!
//mysqli_query($db_server, "ALTER TABLE reception ADD FOREIGN KEY (clientID) REFERENCES client(clientID)");

//mysqli_query($db_server, "ALTER TABLE `veterinarian` ADD PRIMARY KEY(`doctor_name`)");
//mysqli_query($db_server, "ALTER TABLE reception ADD FOREIGN KEY (veterinarian_name) REFERENCES veterinarian(doctor_name)");


echo '<h3>Setting up</h3>';	

//mysqli_query($db_server, "DELETE FROM pet WHERE age = '0'");

//$result = mysqli_query($db_server, "SELECT pet.pet_name FROM pet JOIN client ON pet.clientID = client.clientID WHERE client.clientID = '1'");
/*
$result = mysqli_query($db_server, "SELECT veterinarian.profession FROM veterinarian JOIN reception 
	ON veterinarian.doctor_name = reception.veterinarian_name WHERE reception.veterinarian_name = 'mikki'");

$rows = mysqli_num_rows($result);

for ($j = 0 ; $j < $rows ; ++$j)
{
  $row = mysqli_fetch_row($result);
  echo $row[0] . '<br />';

  }
