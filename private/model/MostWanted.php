<?php
require_once "../private/DB.php";
class MostWanted{
public static function AddNewMostWanted($email,$dateOfLastSeen,$placeOfLastSeen,$descriptionOfMostWanted){
    $conn=DB::connectDatabase();
    $stmt = $conn->prepare("SELECT policeID from public WHERE email='".$email."'");
    $stmt->execute(); 
    $mp = $stmt->fetch();
    $publicID=$mp["publicID"];
    $stmt = $conn->prepare("INSERT INTO Mostwantedperson(publicID,dateOfLastSeen,placeOfLastSeen,descriptionOfMostWanted) VALUES (:publicID, :dateOfLastSeen,:placeOfLastSeen,:descriptionOfMostWanted)");
    $stmt->bindParam(':publicID', $publicID);
    $stmt->bindParam(':dateOfLastSeen', $dateOfLastSeen);
    $stmt->bindParam(':placeOfLastSeen', $placeOfLastSeen);
    $stmt->bindParam(':descriptionOfMostWanted',$descriptionOfMostWanted);
    $stmt->execute();
    }
    public static function getQuery(){
        $conn=DB::connectDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT  dateOfLastSeen,descriptionOfMostWanted,placeOfLastSeen FROM MostWantedPerson");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt;
    
    }
}
?>
