<!DOCTYPE html>
<html>
	<head>
			<title>MEP MOOC</title>
			<meta charset="UTF-8">
			<meta name="description" content="Free Web tutorials">
			<meta name="keywords" content="HTML,CSS,XML,JavaScript">
			<meta name="author" content="John Doe">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		
			<link rel="stylesheet" href="style/styleHome.css" >
			
			
			<!--<link rel="stylesheet" href="css/adminPanel.css" > 

			<script src="/script/jQuery.js"></script>
			<script src="/script/adminPanel.js"></script>-->
			
		<style>
			* {box-sizing: border-box}
			body {font-family: Verdana, sans-serif; margin:0}
			.mySlides {display: none}
			img {vertical-align: middle;}

			/* Slideshow container */
			.slideshow-container {
			  max-width: 1000px;
			  position: relative;
			  margin-top: 0.5%;
			  margin-right: 15%;
			  margin-left: 15%;
			  border-radius: 25px;
			}

			/* Next & previous buttons */
			.prev, .next {
			  cursor: pointer;
			  position: absolute;
			  top: 50%;
			  width: auto;
			  padding: 16px;
			  margin-top: -22px;
			  color: white;
			  font-weight: bold;
			  font-size: 18px;
			  transition: 0.6s ease;
			  border-radius: 0 3px 3px 0;
			}

			/* Position the "next button" to the right */
			.next {
			  right: 0;
			  border-radius: 3px 0 0 3px;
			}

			/* On hover, add a black background color with a little bit see-through */
			.prev:hover, .next:hover {
			  background-color: rgba(0,0,0,0.8);
			}

			/* Caption text */
			.text {
			  color: #f2f2f2;
			  font-size: 15px;
			  padding: 8px 12px;
			  position: absolute;
			  bottom: 8px;
			  width: 100%;
			  text-align: center;
			}

			/* Number text (1/3 etc) */
			.numbertext {
			  color: #f2f2f2;
			  font-size: 12px;
			  padding: 8px 12px;
			  position: absolute;
			  top: 0;
			}

			/* The dots/bullets/indicators */
			.dot {
			  cursor: pointer;
			  height: 15px;
			  width: 15px;
			  margin: 0 2px;
			  background-color: #bbb;
			  border-radius: 50%;
			  display: inline-block;
			  transition: background-color 0.6s ease;
			}

			.active, .dot:hover {
			  background-color: #717171;
			}

			/* Fading animation */
			.fade {
			  -webkit-animation-name: fade;
			  -webkit-animation-duration: 1.5s;
			  animation-name: fade;
			  animation-duration: 1.5s;
			}

			@-webkit-keyframes fade {
			  from {opacity: .4} 
			  to {opacity: 1}
			}

			@keyframes fade {
			  from {opacity: .4} 
			  to {opacity: 1}
			}

			/* On smaller screens, decrease text size */
			@media only screen and (max-width: 300px) {
			  .prev, .next,.text {font-size: 11px}
			}
		</style>
	</head>
	
	<body>
		<div class = "topHeader">		
			<h3>MEP MATH MOOC: A Learning Links Foundation Initiative</h3>
		</div>
		
		 <div class="subHeader">
			  <a class="active" href="#home">Home</a>
			  <a href="/MEP_MOOC Development/MEPMOOCWeb/model/mepMathMoocPage.php" target="_blank">MEP MATH MOOC</a>
			  <a href="http://www.learninglinksindia.org/Home/About" target="_blank">About LLF</a>
			  <a href="http://www.learninglinksindia.org/Home/Contact" target="_blank">Contact Us</a>
			  <a href="/MEP_MOOC Development/MEPMOOCWeb/model/conceptMap.php" target="_blank">Concept Map</a>
			  <a href="/MEP_MOOC Development/MEPMOOCWeb/AdminPanel/index.php" target="_blank">Upload Course</a>
			  
		</div> 
			
			 <!-- Slideshow container -->
			<div class="slideshow-container">

			  <!-- Full-width images with number and caption text -->
			  <div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="ganitshakti.png" style="width:100%">
				<div class="text">Caption Text</div>
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="ganitshakti.png" style="width:100%">
				<div class="text">Caption Two</div>
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="ganitshakti.png" style="width:100%">
				<div class="text">Caption Three</div>
			  </div>

			  <!-- Next and previous buttons -->
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span>
			  <span class="dot" onclick="currentSlide(2)"></span>
			  <span class="dot" onclick="currentSlide(3)"></span>
			</div> 
			
			<div class = "flipBoxes">
				<div class="flipcard h">
					<div class="front">
					  <p class = "module"> Module 1</p>
					  <p class = "moduleName"> Number System </p>
					</div>
					<div class="back">
					  <img src = "/MEP_MOOC Development/MEPMOOCWeb/Resources/img/jpg/number_system.png" class = "src_img">
					</div>
				</div>
				<div class="flipcard h">
					<div class="front">
					  <p class = "module"> Module 2</p>
					  <p class = "moduleName"> Geometry </p>
					</div>
					<div class="back">
					  <img src = "/MEP_MOOC Development/MEPMOOCWeb/Resources/img/jpg/geometry.png" class = "src_img">
					</div>
				</div>
				<div class="flipcard h">
					<div class="front">
					  <p class = "module"> Module 3</p>
					  <p class = "moduleName"> Measurements </p>
					</div>
					<div class="back">
					  <img src = "/MEP_MOOC Development/MEPMOOCWeb/Resources/img/jpg/measurements.png" class = "src_img">
					</div>
				</div>
				<div class="flipcard h">
					<div class="front">
					  <p class = "module"> Module 4</p>
					  <p class = "moduleName"> Data Handling </p>
					</div>
					<div class="back">
					  <img src = "/MEP_MOOC Development/MEPMOOCWeb/Resources/img/jpg/data_handling.png" class = "src_img">
					</div>
				</div>
				<div class="flipcard h">
					<div class="front">
					  <p class = "module"> Module 5</p>
					  <p class = "moduleName"> Patterns </p>
					</div>
					<div class="back">
					  <img src = "/MEP_MOOC Development/MEPMOOCWeb/Resources/img/jpg/patterns.png" class = "src_img">
					</div>
				</div>
			</div>			
		
		<div class = "footer">
			<footer>&copy; Copyright 2018 Learning Links Foundation Math Enhancement Program</footer>
		</div>
		
		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}

			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  if (n > slides.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
				  slides[i].style.display = "none";  
			  }
			  for (i = 0; i < dots.length; i++) {
				  dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			}
		</script>
	</body>
</html>
