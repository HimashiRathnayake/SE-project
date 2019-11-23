<?php
class SignUpController {
static function index(){
    require_once "../private/view/SignUp/index.php";
    
}
static function createNewAccount(){
   
    $NIC = filter_var($_POST['nic'],FILTER_SANITIZE_STRING);
    $name= filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $telNo=filter_var($_POST['telephoneNo'],FILTER_SANITIZE_STRING);
    $email =filter_var($_POST['email'],FILTER_SANITIZE_STRING);
    $password =filter_var($_POST['password'],FILTER_SANITIZE_STRING);
    $postalCode =filter_var($_POST['postalCode'],FILTER_SANITIZE_STRING);
    $address =filter_var($_POST['address'],FILTER_SANITIZE_STRING);
    $hashedPassword=$password;
    pub::addNewAccount($name,$email,$hashedPassword,$NIC,$telNo,$postalCode,$address,'public');
    header("location:".SITE_URL_BASE."/Home/index");
}
}

?>