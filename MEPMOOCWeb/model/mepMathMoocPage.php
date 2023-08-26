<?php
	$db_host = 'localhost'; // Server Name
	$db_user = 'root'; // Username
	$db_pass = ''; // Password
	$db_name = 'courseDB'; // Database Name

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	if (!$conn) {
		die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
	}

	$sql = 'SELECT * 
			FROM courseDataTable WHERE conceptCode = 01010101';
			
	$query = mysqli_query($conn, $sql);
	
	while ($row = mysqli_fetch_array($query))
	{
		
			
		
	}

	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
	<head>
		<title>Blended Teacher Training Program</title>
		
		<meta charset="UTF-8">
		<meta name="description" content="Free Web tutorials">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="author" content="John Doe">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="/MEP_MOOC Development/MEPMOOCWeb/style/mepMathMoocPage.css">
	</head>
	
	<body>
		<div class = "dropDownMenu">
			<ul>
				<li>Concept Map</li>
				<li>Number System</li>
				<li>Geometry</li>
				<li>Measurements</li>
				<li>Data Handling</li>
				<li>Patterns</li>
				<li>Reference Documents</li>
		</div>
		
		<div class = "courseContent">
		
			<div class = "conceptCode">
				
				
			</div>
			
			<div class = "mathTopic">
				
			</div>
			
			<div class = "mathKitName">
			
			</div>
			
			<div class = "mathConcept">
			
			</div>
			
			<div class = "standardSelect">
			
			</div>
			
			<div class = "keyWordTag">
			
			</div>
			
			<div class = "preReqConcept">
			
			</div>
			
			<div class = "procedureTeacher">
			
			</div>
			
			<div class = "kitLimitation">
			
			</div>
			
			<div class = "realLifeExample">
			
			</div>
			
			<div class = "alternativeMethod">
			
			</div>
			
			<div class = "mathKitDemoLink">
			
			</div>
			
			<div class = "hardspotConceptQuestionLink">
			
			</div>
			
			<div class = "quizConceptLink">
			
			</div>
			
			
		</div>
	</body>
</html>