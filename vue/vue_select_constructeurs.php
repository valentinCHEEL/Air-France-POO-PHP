<h3> Liste des constructeurs</h3>
<form method="post">
    Filter par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1", style="background-color:#FFFFFF;">

    <tr>
        <td> Id constructeur </td>
        <td> Libelle </td>
        <td> Pays </td>
        <td> Statut </td>
        <td> Opération </td>
    </tr>
<?php
if (isset($lesConstructeurs)){
    foreach ($lesConstructeurs as $unConstructeur){
        echo"<tr>";
        echo "<td>".$unConstructeur['idconstructeur']."</td>";
        echo "<td>".$unConstructeur['libelle']."</td>";
        echo "<td>".$unConstructeur['pays']."</td>";
        echo "<td>".$unConstructeur['statut']."</td>";

        echo "<td> <a href=' index.php?page=2&action=sup&idconstructeur=".$unConstructeur['idconstructeur']."'>";
        echo "<img src='images/supprimer.jpg' height='30' witdh='30'></a>";

        echo "<a <a href=' index.php?page=2&action=edit&idconstructeur=".$unConstructeur['idconstructeur']."'>";
        echo "<img src='images/editer.png' height='30' witdh='30'></a>";

        echo "</td>";
        echo "</tr>";
    }
}
?>
</table>