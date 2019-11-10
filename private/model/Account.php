<?php
require_once DB.php;
DB::connectDatbase();
class Account extends model{
   private static $firstName;
   private static  $lastName;
   private static $NIC;
   private static $hashedPassword;
    
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
    public static function getHashedPassword($email){
        //db logic
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $this->conn->prepare("SELECT hashedPassword from $this->table where email=$email");
    $stmt->execute();
    $this->hashedPassword = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $this->hashedPassword;
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
    public static function addNewAccount($firstname,$lastname,$email,$hashedPassword,$NIC,$telNo){
    $stmt = $this->conn->prepare("INSERT INTO $this->table (firstname, lastname, email,hashedPassword,) VALUES (:firstname, :lastname, :email,:hashedPassword,:NIC,:telNol)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':hashedPassword', $hashedPassword);
    $stmt->bindParam(':NIC', $NIC);
    $stmt->bindParam(':telNo', $telNo);
    $stmt->execute();
    }
    
    
}
?>