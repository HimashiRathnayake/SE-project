<?php
require_once "../private/DB.php";
class MissingPerson{
public static function AddNewMissingPerson($email,$dateOfLastSeen,$placeOfLastSeen,$descriptionOfMissingPerson){
    $conn=DB::connectDatabase();
    $stmt = $conn->prepare("SELECT publicID from public WHERE email='".$email."'");
    $stmt->execute(); 
    $mp = $stmt->fetch();
    $publicID=$mp["publicID"];
    $stmt = $conn->prepare("INSERT INTO MissingPerson(publicID,dateOfLastSeen,placeOfLastSeen,descriptionOfMissingPerson) VALUES (:publicID, :dateOfLastSeen,:placeOfLastSeen,:descriptionOfMissingPerson)");
    $stmt->bindParam(':publicID', $publicID);
    $stmt->bindParam(':dateOfLastSeen', $dateOfLastSeen);
    $stmt->bindParam(':placeOfLastSeen', $placeOfLastSeen);
    $stmt->bindParam(':descriptionOfMissingPerson',$descriptionOfMissingPerson);
    $stmt->execute();
    }
    public static function getQuery(){
        $conn=DB::connectDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT  dateOfLastSeen,descriptionOfMissingPerson,placeOfLastSeen FROM MissingPerson");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt;
    }
}
?>
