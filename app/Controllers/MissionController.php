<?php
// MissionController.php
include('app/Models/MissionModel.php');

class MissionController {
    private $model;

    public function __construct($conn) {
        $this->model = new MissionModel($conn);
    }

    public function getActiveMissions() {
        return $this->model->getActiveMissions();
    }
}
?>
