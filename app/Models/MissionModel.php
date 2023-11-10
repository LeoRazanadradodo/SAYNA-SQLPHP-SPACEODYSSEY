<?php
// MissionModel.php

class MissionModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getActiveMissions() {
        $sql = "SELECT M.Nom as MissionNom, M.Statut, A.Nom as AstronauteNom, A.Etat_Sante
                FROM Missions M
                LEFT JOIN Astronaute_Mission AM ON M.ID = AM.Mission_ID
                LEFT JOIN Astronautes A ON AM.Astronaute_ID = A.ID
                WHERE M.Statut NOT IN ('Terminée', 'Abandonnée')";
        $result = $this->conn->query($sql);

        $missions = [];
        while ($row = $result->fetch_assoc()) {
            $missions[] = $row;
        }

        return $missions;
    }
}
?>
