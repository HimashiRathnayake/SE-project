<?php
class ComplainController {
static function index(){
    require_once "../private/view/Complain/index.php";
    
}
static function addComplain(){
    $email=$_SESSION["email"];
    $date=$_POST["date"];
    $place=$_POST["place"];
    $description=$_POST["description"];
    Complain::AddNewComplain($email,$date,$place,$description);
    header("location:".SITE_URL_BASE."/Complain/index");
}
}

?>