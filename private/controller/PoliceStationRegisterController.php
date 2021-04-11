<?php
class PoliceStationRegisterController {
static function index(){
    require_once "../private/view/PoliceStationRegister/index.php";
    
}
static function addNewPoliceStation(){
    //To Do add method implementation
    $name=$_POST["name"];
    $pc=$_POST["postalcode"];
    $email=$_POST["email"];
    $telno=$_POST["telno"];
    $password=$_POST["password"];
    $hashedPassword=password_hash($password, PASSWORD_DEFAULT);
    policeStation::AddNewPoliceStation($name,$pc,$email,$telno,$hashedPassword);
    header("location:".SITE_URL_BASE."/PoliceStationRegister/index");
}
}

?>