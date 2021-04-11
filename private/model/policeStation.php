<?php 
require_once "../private/DB.php";
class policeStation{
    private static $policeStationName;
    private static $postalCode;
 
  
    public static function getPoliceStationName($postalCode){
           //db logic
    $conn=DB::connectDatabase();
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT policeSationName from PoliceStation where postalCode=$postalCode");
    $stmt->execute();
    $this->policeStationName = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $this->policeStationName;
    }
    public static function getEmail($postalCode){
        //db logic
    $conn=DB::connectDatabase();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT email from PoliceStation where postalCode=$postalCode");
    $stmt->execute();
    $email = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $email;
    }
    public static function getTelNo($postalCode){
        //db logic
    $conn=DB::connectDatabase();
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT telNo from PoliceStation where postalCode=$postalCode");
    $stmt->execute();
     $this->telNo = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $this->policeStationName;
    }
    public static function AddNewPoliceStation($policeStationName,$postalCode,$email,$telNo,$hashedPassword){
    $conn=DB::connectDatabase();
    $stmt = $conn->prepare("INSERT INTO PoliceStation(policeStationName, postalCode,email,telNo,hashedPassword) VALUES (:policeStationName, :postalCode, :email,:telNo,:hashedPassword)");
    $stmt->bindParam(':policeStationName', $policeStationName);
    $stmt->bindParam(':postalCode', $postalCode);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telNo', $telNo);
    $stmt->bindParam(':hashedPassword', $hashedPassword);
    $stmt->execute();
    }
    public static function getQuery(){
    $conn=DB::connectDatabase();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT  policeStationName,postalCode,email,telNo FROM PoliceStation");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt;
    
    
    
    }
    public static function getHashedPassword($email){
        //db logic
    $conn=DB::connectDatabase();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT hashedPassword from PoliceStation where email='".$email."'");
    $stmt->execute();
    $hashedPassword = $stmt->fetch();
    return $hashedPassword["hashedPassword"];
    }
}

?>