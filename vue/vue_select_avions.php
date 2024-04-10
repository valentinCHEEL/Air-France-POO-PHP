<h3> Liste des avions </h3>
<form method="post">
    Filter par : <input type="text" name="filtre">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1", style="background-color:#FFFFFF;" >
    <tr>
        <td> Id avion </td>
        <td> Designation </td>
        <td> Date d'achat </td>
        <td> Capaciter </td>
        <td> Id constructeur# </td>
        <td> Opération </td>

    </tr>
<?php
if (isset($lesAvions)){
    foreach ($lesAvions as $unAvion){
        echo "<tr>";
        echo "<td>".$unAvion['idavion']."</td>";
        echo "<td>".$unAvion['designation']."</td>";
        echo "<td>".$unAvion['dateAchat']."</td>";
        echo "<td>".$unAvion['capacite']."</td>";
        echo "<td>".$unAvion['idconstructeur']."</td>";

        echo "<td> <a href=' index.php?page=3&action=sup&idavion=".$unAvion['idavion']."'>";
        echo "<img src='images/supprimer.jpg' height='30' witdh='30'></a>";

        echo "<a <a href=' index.php?page=3&action=edit&idavion=".$unAvion['idavion']."'>";
        echo "<img src='images/editer.png' height='30' witdh='30'></a>";

        echo "</td>";
        echo "</tr>";
    }
}

?>
</table>