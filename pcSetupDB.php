<?php

$db_server = mysqli_connect('localhost', 'arch', 'q1w2e3r4', 'pet_clinic') or die (mysqli_error());

mysqli_query($db_server, "CREATE TABLE client (clientNO INT UNIQUE AUTO_INCREMENT PRIMARY KEY, firstName VARCHAR(16), 
	lastName VARCHAR(16), address VARCHAR(64), phone VARCHAR(16), mail VARCHAR(32))");
mysqli_query($db_server, "ALTER TABLE client ADD INDEX(clientNO)");
mysqli_query($db_server, "ALTER TABLE client ADD INDEX(address)");
mysqli_query($db_server, "ALTER TABLE client ADD INDEX(phone)");
mysqli_query($db_server, "ALTER TABLE client ADD INDEX(mail)");


mysqli_query($db_server, "CREATE TABLE pet (id INT UNIQUE NOT NULL AUTO_INCREMENT KEY, clientNO INT NOT NULL, nickname VARCHAR(16), breed VARCHAR(16), 
	age INT)");
mysqli_query($db_server, "ALTER TABLE pet ADD INDEX(clientNO)");
mysqli_query($db_server, "ALTER TABLE pet ADD INDEX(nickname)");


mysqli_query($db_server, "CREATE TABLE veterinarian (id INT UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY, name VARCHAR(16), profession VARCHAR(16))");
mysqli_query($db_server, "ALTER TABLE veterinarian ADD INDEX(clientNO)");
mysqli_query($db_server, "ALTER TABLE veterinarian ADD INDEX(name)");
mysqli_query($db_server, "ALTER TABLE veterinarian ADD INDEX(profession)");


mysqli_query($db_server, "CREATE TABLE reception (id INT UNIQUE NOT NULL AUTO_INCREMENT KEY, clientNO INT NOT NULL, date VARCHAR(16) NOT NULL, start_time_reception VARCHAR(16), 
	end_time_reception VARCHAR(16), symptoms VARCHAR(128), comment VARCHAR(512),doctor_id INT NOT NULL, doctor_name VARCHAR(16) NOT NULL, 
	status TINYINT)");
mysqli_query($db_server, "ALTER TABLE reception ADD INDEX(clientNO)");
mysqli_query($db_server, "ALTER TABLE reception ADD INDEX(date)");
mysqli_query($db_server, "ALTER TABLE reception ADD INDEX(doctor_name)");

// КЛЮЧИ!!!!

mysqli_query($db_server, "ALTER TABLE pet ADD FOREIGN KEY (clientNO) REFERENCES client(clientNO)");   		// добавляет!
mysqli_query($db_server, "ALTER TABLE reception ADD FOREIGN KEY (clientNO) REFERENCES client(clientNO)");

//mysqli_query($db_server, "ALTER TABLE `veterinarian` ADD PRIMARY KEY(`name`)");								// добавил выше
mysqli_query($db_server, "ALTER TABLE reception ADD FOREIGN KEY (doctor_id) REFERENCES veterinarian(id)");


echo '<h3>Setting up</h3>';

/*
mysqli_query($db_server, "DELETE FROM pet WHERE age = '0'");

$result = mysqli_query($db_server, "SELECT pet.pet_name FROM pet JOIN client ON pet.clientNO = client.clientNO WHERE client.clientNO = '1'");

$result = mysqli_query($db_server, "SELECT veterinarian.profession FROM veterinarian JOIN reception 
	ON veterinarian.doctor_name = reception.veterinarian_name WHERE reception.veterinarian_name = 'mikki'");

$rows = mysqli_num_rows($result);

for ($j = 0 ; $j < $rows ; ++$j)
{
  $row = mysqli_fetch_row($result);
  echo $row[0] . '<br />';

  }
