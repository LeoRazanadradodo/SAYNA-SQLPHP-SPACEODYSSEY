<?php
if (!empty($missions)) {
    echo '<table class="table table-hover text-nowrap">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Mission</th>';
    echo '<th>Statut</th>';
    echo '<th>Astronaute</th>';
    echo '<th>État de santé</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($missions as $mission) {
        $mission_nom = $mission['MissionNom'];
        $mission_statut = $mission['Statut'];
        $astronaute_nom = $mission['AstronauteNom'];
        $etat_sante = $mission['Etat_Sante'];

        echo '<tr>';
        echo "<td>$mission_nom</td>";
        echo "<td>$mission_statut</td>";
        echo "<td>$astronaute_nom</td>";
        echo "<td>$etat_sante</td>";
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo "<p>Aucune mission en cours pour le moment.</p>";
}
?>