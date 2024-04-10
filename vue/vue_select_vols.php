<h3> Liste des vols</h3>
<form method="post">
    Filter par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1", style="background-color:#FFFFFF;">
    <tr>
        <td> Id du vol </td>
        <td> Libellé </td>
        <td> Date du vol </td>
        <td> Heure du vol</td>
        <td> Id de l'avion </td>
        <td> Id du pilote </td>
        <td> Id du co-pilote </td>
        <td> Operation </td>

    </tr>
<?php
if (isset($lesVols)){
    foreach ($lesVols as $unVol){
        echo "<tr>";
        echo "<td>".$unVol['idvol']."</td>";
        echo "<td>".$unVol['libelle']."</td>";
        echo "<td>".$unVol['dateVol']."</td>";
        echo "<td>".$unVol['heureVol']."</td>";
        echo "<td>".$unVol['idavion']."</td>";
        echo "<td>".$unVol['idpilote1']."</td>";
        echo "<td>".$unVol['idpilote2']."</td>";

        echo "<td> <a href=' index.php?page=5&action=sup&idvol=".$unVol['idvol']."'>";
        echo "<img src='images/supprimer.jpg' height='30' witdh='30'></a>";

        echo "<a <a href=' index.php?page=5&action=edit&idvol=".$unVol['idvol']."'>";
        echo "<img src='images/editer.png' height='30' witdh='30'></a>";

        echo "</td>";
        echo "</tr>";
    }
}

?>
</table>