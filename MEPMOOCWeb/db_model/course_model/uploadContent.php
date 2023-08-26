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
				
		$conceptCode 								= mysqli_real_escape_string($conn, $_POST['conceptCode']); 
		$mathTopic 									= mysqli_real_escape_string($conn, $_POST['mathStrandName']);
		$mathKitName 								= mysqli_real_escape_string($conn, $_POST['kitName']);
		$mathConcept 								= mysqli_real_escape_string($conn, $_POST['mathConcept']);
		$standardSelect 							= mysqli_real_escape_string($conn, $_POST['standardSelect']);
		$keyWordTag 								= mysqli_real_escape_string($conn, $_POST['keywordsTag']);
		$preReqConcept 								= mysqli_real_escape_string($conn, $_POST['preRequisiteConcept']);
		$procedureTeacher 							= mysqli_real_escape_string($conn, $_POST['procedureKit']);
		$kitLimitation 								= mysqli_real_escape_string($conn, $_POST['limitationsKit']);
		$realLifeExample 							= mysqli_real_escape_string($conn, $_POST['realLifeExa']);
		$alternativeMethod 							= mysqli_real_escape_string($conn, $_POST['trickMath']);
		$mathKitDemoLink 							= mysqli_real_escape_string($conn, $_POST['videoLink']);
		$hardspotConceptQuestionLink 				= mysqli_real_escape_string($conn, $_POST['hardSpotQuestion']);
		$quizConceptLink 							= mysqli_real_escape_string($conn, $_POST['quizFile']);
		

		if(isset($_REQUEST['submit']))
			{
				$SQL = "INSERT INTO courseDataTable (	
														conceptCode, 
														mathTopic, 
														mathKitName,
														mathConcept,
														standardSelect,
														keyWordTag,
														preReqConcept,
														procedureTeacher,
														kitLimitation,
														realLifeExample,
														alternativeMethod,
														mathKitDemoLink,
														hardspotConceptQuestionLink,
														quizConceptLink
													) 
													VALUES (
														'$conceptCode',
														'$mathTopic',
														'$mathKitName',
														'$mathConcept',
														'$standardSelect',
														'$keyWordTag',
														'$preReqConcept',
														'$procedureTeacher',
														'$kitLimitation',
														'$realLifeExample',
														'$alternativeMethod',
														'$mathKitDemoLink',
														'$hardspotConceptQuestionLink',
														'$quizConceptLink'														
												)";
			}

		if ($conn->query($SQL) === TRUE) {
			echo '<script type="text/javascript">
							window.onload = function () { alert("Concept details added successfully in the database"); }
					</script>';
		} else {
			echo "Error: " . $SQL . "<br>" . $conn->error;
		}

		$conn->close();		
		//mysqli_query($con,"INSERT INTO Persons (FirstName,LastName,Age)VALUES ('Glenn','Quagmire',33)");
?>

