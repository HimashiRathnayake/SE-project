<?php
session_start();
require_once "../private/model/policeStation.php";
require_once "../private/config.php";
require_once "../private/Router.php";
require_once "../private/controller/AdminController.php";
require_once "../private/controller/PoliceStationRegisterController.php";
$uri=$_SERVER["REQUEST_URI"];
$Router=new Router();
if (!isset($_SESSION["accessLevel"])){?>

<?php }
elseif ($_SESSION["accessLevel"]==3){?>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'>Home</a></li>
   <li><a href='#'>Complain Service</a></li>
   <li><a href='#'>Find Missings Service</a></li>
   <li><a href='#'>Contact</a></li>
</ul>
</div>
<?php }
elseif($_SESSION["accessLevel"]==2){ 
?>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='#'>Home</a></li>
   <li><a href='#'>Find Most Wanted service</a></li>
   <li><a href='#'>Contact</a></li>
</ul>
</div>
<?php
}
else{ ?>
    <div id='cssmenu'>
    <ul>
       <li class='active'><a href='#'>Home</a></li>
       <li><a href='#'>Police Stations</a></li>
      
    </ul>
    </div> 

<?php
}
$Router->respond($uri);
$title=$Router->getTitle();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
   <link rel="stylesheet" href="../3rdParty/css/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="../3rdParty/js/script.js"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
</head>
<body>


<?php
//adding new controller path should add in here.
?>

