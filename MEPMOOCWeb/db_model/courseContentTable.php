<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "courseDB";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// sql to create table
		$sql = "CREATE TABLE courseDataTable (
		conceptCode 							INT(100) AUTO_INCREMENT PRIMARY KEY, 
		mathTopic								VARCHAR(100) 	NOT NULL,
		mathKitName								VARCHAR(200) 	NOT NULL,
		mathConcept								VARCHAR(200) 	NOT NULL,
		standardSelect							VARCHAR(200) 	NOT NULL,
		keyWordTag								VARCHAR(200) 	NOT NULL,
		preReqConcept							TEXT 			NOT NULL,
		procedureTeacher						TEXT 			NOT NULL,
		kitLimitation							TEXT 			NOT NULL,	
		realLifeExample							TEXT 			NOT NULL,
		alternativeMethod						TEXT 			NOT NULL,
		mathKitDemoLink							VARCHAR(500) 	NOT NULL,
		hardspotConceptQuestionLink				VARCHAR(500) 	NOT NULL,
		quizConceptLink							VARCHAR(500) 	NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
			echo "Table courseDataTable created successfully";
		} else {
			echo "Error creating table: " . $conn->error;
		}

		$conn->close();

?>