<?php
//all the database conecting logics in here.
class DB{

public static function connectDatabase(){
    $serverName="localhost";
    $userName="root";
    $password="";
    $dataBase="crimereportsystem";

try{
    $conn = new PDO("mysql:host=".$serverName.";"."dbname=".$dataBase, $userName, $password);
    return $conn;
    echo "Connected successfully";
   
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
}
}
?>