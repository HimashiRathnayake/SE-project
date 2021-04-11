<?php
class ReportController {
static function index(){
    $email=$_SESSION["email"];
    $stmt1=MissingPerson::getQuery();
    $stmt2=MostWanted::getQuery();
    $stmt3=Complain::getQuery($email);
    require_once "../private/view/Report/index.php";
    
}

}

?>
