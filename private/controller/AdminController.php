<?php
class AdminController {
static function index(){
    $stmt=policeStation::getQuery();
    require_once "../private/view/Admin/index.php";
    
}

}

?>