<h3> Liste des pilotes </h3>
<form method="post">
    Filter par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1", style="background-color:#FFFFFF;">
    <tr>
        <td> Id pilotes </td>
        <td> Nom </td>
        <td> Prénom </td>
        <td> Adresse </td>
        <td> Email </td>
        <td> Bip </td>
        <td> NbHeuresVol </td>
        <td> Opération </td>

    </tr>
<?php
if (isset($lesPilotes)){
    foreach ($lesPilotes as $unPilote){
        echo "<tr>";
        echo "<td>".$unPilote['idpilote']."</td>";
        echo "<td>".$unPilote['nom']."</td>";
        echo "<td>".$unPilote['prenom']."</td>";
        echo "<td>".$unPilote['adresse']."</td>";
        echo "<td>".$unPilote['email']."</td>";
        echo "<td>".$unPilote['bip']."</td>";
        echo "<td>".$unPilote['nbHeuresVols']."</td>";

        echo "<td> <a href=' index.php?page=4&action=sup&idpilote=".$unPilote['idpilote']."'>";
        echo "<img src='images/supprimer.jpg' height='30' witdh='30'></a>";

        echo "<a <a href=' index.php?page=4&action=edit&idpilote=".$unPilote['idpilote']."'>";
        echo "<img src='images/editer.png' height='30' witdh='30'></a>";

        echo "</td>";
        echo "</tr>";
    }
}

?>
</table>