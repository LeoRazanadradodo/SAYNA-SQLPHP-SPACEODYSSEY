<?php
// PlaneteModel.php

class PlaneteModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllPlanetes() {
        $sql = "SELECT * FROM Planetes";
        $result = $this->conn->query($sql);
        return ($result) ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    public function addPlanete($nom, $circonf, $distance, $documentation) {
        $sql = "INSERT INTO Planetes (Nom, Circonference, Distance_Terre, Documentation) 
                VALUES ('$nom', $circonf, $distance, '$documentation')";
        return $this->conn->query($sql);
    }

    public function editPlanete($id, $nom, $circonf, $distance, $documentation) {
        $sql = "UPDATE Planetes 
                SET Nom='$nom', Circonference=$circonf, Distance_Terre=$distance, Documentation='$documentation'
                WHERE ID=$id";
        return $this->conn->query($sql);
    }

    public function deletePlanete($id) {
        $sql = "DELETE FROM Planetes WHERE ID=$id";
        return $this->conn->query($sql);
    }
}
?>
