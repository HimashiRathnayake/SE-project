<?php
class PoliceStationRegisterController {
static function view(){
    require_once "../private/view/PoliceStationRegister/index.php";
    
}
static function addNewPoliceStation(){
    //To Do add method implementation
    $name=$_POST["name"];
    $pc=$_POST["postalcode"];
    $email=$_POST["email"];
    $telno=$_POST["telno"];
    policeStation::AddNewPoliceStation($name,$pc,$email,$telno);
    header("location:".SITE_URL_BASE."/PoliceStationRegister/view");
}
}

?>