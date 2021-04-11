<?php
class ServicesController {
static function index(){
if (isset($_SESSION["accessLevel"])){
    if( $_SESSION["accessLevel"]=="Public"){
        $servicesList=array("Add A complain/Complain", "Add A Missing Person/MissingPerson","Show Reports/Report");}
    //TODO police,police station implementation didnot achieve in this version 1.0
     elseif( $_SESSION["accessLevel"]=="PoliceStation"){
         $servicesList=array("Show Reports/Reports");}
    elseif( $_SESSION["accessLevel"]=="Admin"){
        $servicesList=array("Police Station Details Tracking/Admin", "Police Station Registration/PoliceStationRegister");}
    require_once "../private/view/Services/index.php";
    
}

else{
    echo 'Please Sign In';
}

}
}
?>