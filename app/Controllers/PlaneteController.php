<?php
// PlaneteController.php

include('app/Models/PlaneteModel.php');

class PlaneteController {
    private $model;

    public function __construct($conn) {
        $this->model = new PlaneteModel($conn);
    }

    public function getAllPlanetes() {
        return $this->model->getAllPlanetes();
    }

    public function addPlanete($nom, $circonf, $distance, $documentation) {
        return $this->model->addPlanete($nom, $circonf, $distance, $documentation);
    }

    public function editPlanete($id, $nom, $circonf, $distance, $documentation) {
        return $this->model->editPlanete($id, $nom, $circonf, $distance, $documentation);
    }

    public function deletePlanete($id) {
        return $this->model->deletePlanete($id);
    }
}
?>
