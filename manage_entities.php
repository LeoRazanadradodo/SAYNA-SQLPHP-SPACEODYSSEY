<?php
include('config/db_connect.php');
include('config/app.php');
include('app/views/header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0"> <?= APP_NAME ?> - Gestion des planètes et astronautes</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">

          <?php
          // manage_entities.php

          include('app/Controllers/PlaneteController.php');
          include('app/Controllers/AstronauteController.php');

          $planeteController = new PlaneteController($conn);
          $astronauteController = new AstronauteController($conn);

          // Gestion des planètes
          if (isset($_POST['add_planete'])) {
              $nom = $_POST['nom'];
              $circonf = $_POST['circonf'];
              $distance = $_POST['distance'];
              $documentation = $_POST['documentation'];

              $planeteController->addPlanete($nom, $circonf, $distance, $documentation);
          }

          if (isset($_POST['edit_planete'])) {
              $id = $_POST['id'];
              $nom = $_POST['nom'];
              $circonf = $_POST['circonf'];
              $distance = $_POST['distance'];
              $documentation = $_POST['documentation'];

              $planeteController->editPlanete($id, $nom, $circonf, $distance, $documentation);
          }

          if (isset($_GET['delete_planete'])) {
              $id = $_GET['delete_planete'];
              $planeteController->deletePlanete($id);
          }

          // Gestion des astronautes
          if (isset($_POST['add_astronaute'])) {
              $nom = $_POST['nom'];
              $etat_sante = $_POST['etat_sante'];
              $taille = $_POST['taille'];
              $poids = $_POST['poids'];

              $astronauteController->addAstronaute($nom, $etat_sante, $taille, $poids);
          }

          if (isset($_POST['edit_astronaute'])) {
              $id = $_POST['id'];
              $nom = $_POST['nom'];
              $etat_sante = $_POST['etat_sante'];
              $taille = $_POST['taille'];
              $poids = $_POST['poids'];

              $astronauteController->editAstronaute($id, $nom, $etat_sante, $taille, $poids);
          }

          if (isset($_GET['delete_astronaute'])) {
              $id = $_GET['delete_astronaute'];
              $astronauteController->deleteAstronaute($id);
          }

          // Récupération des données
          $planetes = $planeteController->getAllPlanetes();
          $astronautes = $astronauteController->getAllAstronautes();

          include('app/views/manage_entities_view.php');
          ?>

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->

<?php
include('app/views/footer.php');
?>