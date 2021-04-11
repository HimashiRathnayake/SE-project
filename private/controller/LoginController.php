<?php
class LoginController {
static function index(){
    require_once "../private/view/Login/index.php";
    
}
static function logIn(){
    $accessLevel=$_POST["accessLevel"];
    $_SESSION["accessLevel"]=$accessLevel;
    $email=$_POST["email"];
    $hp=pub::getHashedPassword($email,"public");
    $password=filter_var($_POST["password"],FILTER_SANITIZE_STRING);
    $hashedPassword=$password;
    echo $hp;
    echo $hashedPassword;
    if ($_POST["accessLevel"]=="Public"){
         if ($hp==$hashedPassword){
            $_SESSION["email"]=$email;
         }

    }
    if($_POST["accessLevel"]=="Police"){
        if($hp==$hashedPassword){
            $_SESSION["email"]=$email;
        }
    }
    if($_POST["accessLevel"]=="PoliceStation"){
        if($hp==$hashedPassword){
            $_SESSION["email"]=$email;
        }
    }
    if($_POST["accessLevel"]=="Admin"){
        if($password=="adminsecretkey"){
            $_SESSION["email"]=$email;
        }
    }

    if (isset($_SESSION["email"])){
        
       header("location:".SITE_URL_BASE."/Home/index");
    }
    else{
        echo $_SESSION['email'];
        header("location:".SITE_URL_BASE."/Login/index");
    }

}
static function logOut(){
    session_destroy();
}
}


?>