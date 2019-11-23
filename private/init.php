<?php
session_start();
require_once "../private/model/policeStation.php";
require_once "../private/config.php";
require_once "../private/Router.php";
require_once "../private/controller/AdminController.php";
require_once "../private/controller/PoliceStationRegisterController.php";
require_once "../private/controller/ContactController.php";
require_once "../private/controller/AboutController.php";
require_once "../private/controller/ComplainController.php";
require_once "../private/model/complain.php";
require_once "../private/model/MissingPerson.php";
require_once "../private/controller/ServicesController.php";
require_once "../private/controller/SignUpController.php";
require_once "../private/model/Pub.php";
require_once "../private/controller/HomeController.php";
require_once "../private/controller/ReportController.php";
require_once "../private/controller/LoginController.php";
require_once "../private/controller/MissingPersonController.php";
require_once "../private/model/MostWanted.php";
require_once "../private/controller/MostWantedController.php";
require_once "../private/model/Case.php";
$uri=$_SERVER["REQUEST_URI"];
$Router=new Router();
?>
<body id="page-top" style="background-color:black;">

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Online crime report</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/crimereportSystem/public/home/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/crimereportSystem/public/About/index">About</a>
          </li>
      <li class="nav-item">
			<a class="nav-link js-scroll-trigger" href="http://localhost/crimereportSystem/public/Services/index">Services</a>
			</li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/crimereportSystem/public/contact/index">Contact</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/crimereportSystem/public/Login/index">LogIn</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/crimereportSystem/public/Signup/index">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php

$Router->respond($uri);
$title=$Router->getTitle();   
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../3rdParty/css3/contactForm.css">
<!-- another new content -->
<!--===============================================================================================-->
   <link href="../3rdParty/css3/agency.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  
<!--===============================================================================================-->
<!-- another another new content -->
<!--===============================================================================================-->
<link href="../3rdParty/css3/agency.min.css" rel="stylesheet">
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  
<!--===============================================================================================-->
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title?></title>
   <!-- new content -->
 <!--===============================================================================================-->

<!-- Bootstrap core CSS -->
<link href="../3rdParty/vendor3/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="../3rdParty/vendor3/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="../3rdParty/css3/agency.min.css" rel="stylesheet">

<!-- Bootstrap core JavaScript -->
<script src="../3rdParty/vendor3/jquery/jquery.min.js"></script>
<script src="../3rdParty/vendor3/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../3rdParty/vendor3/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="../3rdParty/js3/jqBootstrapValidation.js"></script>

<!-- Custom scripts for this template -->
<script src="../3rdParty/js3/agency.min.js"></script>

 <!--===============================================================================================-->
 <!-- end of new content -->
    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../3rdParty/images2/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/fonts2/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/vendor2/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/vendor2/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/css2/util.css">
	<link rel="stylesheet" type="text/css" href="../3rdParty/css2/main.css">
<!--===============================================================================================-->
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../3rdParty/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../3rdParty/css/util.css">
	<link rel="stylesheet" type="text/css" href="../3rdParty/css/main.css">
<!--===============================================================================================-->

