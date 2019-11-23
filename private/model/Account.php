<?php
require_once "../private/DB.php";

class Account{
   private static $firstName;
   private static  $lastName;
   private static $NIC;
   
   
    
   // Common methods for police,public 
   public static function getFirstName($email){
       //db logic
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $this->conn->prepare("SELECT firstName from $this->table where email=$email");
    $stmt->execute();
    $this->firstName = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $this->firstName;
   }
   public static function getLastName($email){
       //db logic
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $this->conn->prepare("SELECT lastName from $this->table where email=$email");
    $stmt->execute();
    $this->firstName = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $this->lastName;
      
   }
   public static function getNIC($email){
        //db logic
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $this->conn->prepare("SELECT NIC from $this->table where email=$email");
    $stmt->execute();
    $this->NIC= $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $this->NIC;
    
    }
    public static function getHashedPassword($email,$table){
        //db logic
    $conn=DB::connectDatabase();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT hashedPassword from ".$table." where email='".$email."'");
    $stmt->execute();
    $hashedPassword = $stmt->fetch();
    return $hashedPassword["hashedPassword"];
    }
    //TODO return hashed password
    public static function setLastName(){
        //db logic
        
    }
    public static function setFirstName(){
        // db logic
    }
    public static function setHashedPasssword(){
        //db logic
    }
    public static function setEmail(){
        //db logic
    }
    public static function addNewAccount($name,$email,$hashedPassword,$NIC,$telNo,$postalCode,$address,$table){
    $conn=DB::connectDatabase();
    $stmt = $conn->prepare("INSERT INTO ".$table."(name ,email,hashedPassword,NIC,telNo,postalCode,address) VALUES (:name,:email,:hashedPassword,:NIC,:telNo,:postalCode,:address)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':hashedPassword', $hashedPassword);
    $stmt->bindParam(':NIC', $NIC);
    $stmt->bindParam(':telNo', $telNo);
    $stmt->bindParam(':postalCode', $postalCode);
    $stmt->bindParam(':address', $address);
    $stmt->execute();
    
    }
    
    
}
?>