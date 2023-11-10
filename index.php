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
          <div class="col-lg-12">
            <h1 class="m-0"> <?= APP_NAME ?> - Dashboard</h1>
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
                // Récupérer les missions non terminées et non abandonnées
                include('app/Controllers/MissionController.php');

                $missionController = new MissionController($conn);
                $missions = $missionController->getActiveMissions();
                
                include('app/Views/dashboard_view.php');

            ?>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->

        <?php
include('app/views/footer.php');
?>