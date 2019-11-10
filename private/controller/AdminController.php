<?php
class AdminController {
static function view(){
    $stmt=policeStation::getQuery();
    require_once "../private/view/Admin/index.php";
    
}

}

?>