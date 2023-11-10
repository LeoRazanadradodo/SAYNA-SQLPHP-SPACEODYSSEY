<?php
// AstronauteController.php

include('app/Models/AstronauteModel.php');

class AstronauteController {
    private $model;

    public function __construct($conn) {
        $this->model = new AstronauteModel($conn);
    }

    public function getAllAstronautes() {
        return $this->model->getAllAstronautes();
    }

    public function addAstronaute($nom, $etat_sante, $taille, $poids) {
        return $this->model->addAstronaute($nom, $etat_sante, $taille, $poids);
    }

    public function editAstronaute($id, $nom, $etat_sante, $taille, $poids) {
        return $this->model->editAstronaute($id, $nom, $etat_sante, $taille, $poids);
    }

    public function deleteAstronaute($id) {
        return $this->model->deleteAstronaute($id);
    }
}
?>
