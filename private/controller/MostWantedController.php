<?php
class MostWantedController {
static function index(){
    require_once "../private/view/MostWanted/index.php";
    
}
static function addNewMostWanted(){
    $email=$_SESSION["email"];
    $date=$_POST["date"];
    $place=$_POST["place"];
    $description=$_POST["description"];
    MissingPerson::AddNewMissingPerson($email,$date,$place,$description);
    header("location:".SITE_URL_BASE."/MostWanted/index");
}
}

?>