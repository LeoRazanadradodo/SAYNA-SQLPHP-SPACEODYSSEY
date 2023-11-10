<div class="row">
    <!-- Formulaire d'ajout de planète -->
    <div class="col-lg-12">
        <h2>Planètes</h2>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ajouter une planète</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nom_planete">Nom de la planète:</label>
                        <input type="text" id="nom_planete" name="nom" class="form-control"  required>
                    </div>
                    <div class="form-group">
                            <label for="circonf_planete">Circonférence (en km):</label>
                    <input type="number" id="circonf_planete" name="circonf" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="distance_planete">Distance à la Terre (en km):</label>
                        <input type="number" id="distance_planete" name="distance" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="doc_planete">Documentation:</label>
                        <textarea id="doc_planete" name="documentation" rows="4" class="form-control"  required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add_planete" value="Ajouter" class="btn btn-success float-right">
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

<!-- Gestion des planètes -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Liste des planètes</h3>
        </div>
        <!-- ./card-header -->
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Circonférence (en km)</th>
                        <th>Distance à la Terre (en km)</th>
                        <th>Documentation</th>
                        <th>Action</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php foreach ($planetes as $planete): ?>
                        <tr>
                            <td><?php echo $planete['Nom']; ?></td>
                            <td><?php echo $planete['Circonference']; ?></td>
                            <td><?php echo $planete['Distance_Terre']; ?></td>
                            <td><?php echo $planete['Documentation']; ?></td>
                            <td>
                                <a href="edit_planet.php?id=<?php echo $planete['ID']; ?>">Modifier</a>
                                <a href="?delete_planete=<?php echo $planete['ID']; ?>">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>

<div class="row">
    <!-- Formulaire d'ajout d'astronaute -->
    <div class="col-lg-12">
        <h2>Astronautes</h2>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ajouter un astronaute</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: block;">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nom_astronaute">Nom de l'astronaute:</label>
                        <input type="text" id="nom_astronaute" name="nom" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="etat_sante_astronaute">État de santé:</label>
                        <input type="text" id="etat_sante_astronaute" name="etat_sante" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <label for="taille_astronaute">Taille:</label>
                        <input type="number" id="taille_astronaute" name="taille" class="form-control"  required>
                </div>
                    <div class="form-group">
                        <label for="poids_astronaute">Poids:</label>
                        <input type="number" id="poids_astronaute" name="poids" class="form-control"  required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add_astronaute" value="Ajouter" class="btn btn-success float-right">
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>



<!-- Gestion des astronautes -->
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Liste des planètes</h3>
        </div>
        <!-- ./card-header -->
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>État de santé</th>
                        <th>Taille</th>
                        <th>Poids</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($astronautes as $astronaute): ?>
                    <tr>
                        <td><?php echo $astronaute['Nom']; ?></td>
                        <td><?php echo $astronaute['Etat_Sante']; ?></td>
                        <td><?php echo $astronaute['Taille']; ?></td>
                        <td><?php echo $astronaute['Poids']; ?></td>
                        <td>
                            <a href="edit_astronaut.php?id=<?php echo $astronaute['ID']; ?>">Modifier</a>
                            <a href="?delete_astronaute=<?php echo $astronaute['ID']; ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>
