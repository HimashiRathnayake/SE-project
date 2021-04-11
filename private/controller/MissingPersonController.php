<?php
class MissingPersonController {
static function index(){
    require_once "../private/view/MissingPerson/index.php";
    
}
static function addNewMissingPerson(){
    $email=$_SESSION["email"];
    $date=$_POST["date"];
    $place=$_POST["place"];
    $description=$_POST["description"];
    MissingPerson::AddNewMissingPerson($email,$date,$place,$description);
    header("location:".SITE_URL_BASE."/MissingPerson/index");
}
}

?>