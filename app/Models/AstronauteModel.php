<?php
// AstronauteModel.php

class AstronauteModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllAstronautes() {
        $sql = "SELECT * FROM Astronautes";
        $result = $this->conn->query($sql);
        return ($result) ? $result->fetch_all(MYSQLI_ASSOC) : [];
    }

    public function addAstronaute($nom, $etat_sante, $taille, $poids) {
        $sql = "INSERT INTO Astronautes (Nom, Etat_Sante, Taille, Poids) 
                VALUES ('$nom', '$etat_sante', $taille, $poids)";
        return $this->conn->query($sql);
    }

    public function editAstronaute($id, $nom, $etat_sante, $taille, $poids) {
        $sql = "UPDATE Astronautes 
                SET Nom='$nom', Etat_Sante='$etat_sante', Taille=$taille, Poids=$poids
                WHERE ID=$id";
        return $this->conn->query($sql);
    }

    public function deleteAstronaute($id) {
        $sql = "DELETE FROM Astronautes WHERE ID=$id";
        return $this->conn->query($sql);
    }
}
?>
