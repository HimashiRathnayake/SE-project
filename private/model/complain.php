<?php
require_once "../private/DB.php";
class Complain{
public static function AddNewComplain($email,$dateOfIncident,$placeOfIncident,$incidentDescription){
    $conn=DB::connectDatabase();
    $stmt = $conn->prepare("SELECT policeStationID,publicID from public,policestation WHERE public.postalCode=policestation.postalCode and public.email='".$email."'");
    $stmt->execute(); 
    $complain = $stmt->fetch();
    $policeStationID=$complain["policeStationID"];
    $publicID=$complain["publicID"];
    $stmt = $conn->prepare("INSERT INTO Complaint(policeStationID,publicID,dateOfIncident,placeOfIncident,incidentDescription) VALUES (:policeStationID, :publicID, :dateOfIncident,:placeOfIncident,:incidentDescription)");
    $stmt->bindParam(':policeStationID', $policeStationID);
    $stmt->bindParam(':publicID', $publicID);
    $stmt->bindParam(':dateOfIncident', $dateOfIncident);
    $stmt->bindParam(':placeOfIncident', $placeOfIncident);
    $stmt->bindParam(':incidentDescription', $incidentDescription);
    $stmt->execute();
    }
    public static function getQuery($email){
        $conn=DB::connectDatabase();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT dateOfIncident,placeOfIncident,incidentDescription from complaint,policestation WHERE complaint.policeStationID=policestation.policeStationID and policeStation.email='".$email."'");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt;
    }
}
?>