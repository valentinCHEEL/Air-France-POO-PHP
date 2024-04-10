<h3> Ajout d'un nouveau Vol</h3>
<style>
        body {
            background-image: url("images/arriereplan.jpg");
            background-size: cover; /* pour ajuster l'image à la taille de la fenêtre */
        }
        </style>
<form method="post">
    <table>
        
        <tr>
            <td> Libellé </td>
            <td> <input type="text" name="libelle"
                value="<?= ($leVol!=null)?$leVol['libelle']:''?>"></td>
        </tr>
        
        <tr>
            <td> Date du vol </td>
            <td> <input type="date" name="dateVol"
                value="<?= ($leVol!=null)?$leVol['dateVol']:''?>"></td>
        </tr>
       
        <tr>
            <td> Heure du vol </td>
            <td> <input type="time" name="heureVol"
                value="<?= ($leVol!=null)?$leVol['heureVol']:''?>"></td>
        </tr>
        
<tr>
    <td> Id de l'Avion</td>
    <td>
        <select name="idavion">
            <?php
            foreach($lesAvions as $unAvion){
                echo "<option value='" .$unAvion['idavion']."'";
                echo ">";
                echo $unAvion['designation'];
                echo "</option>"; 
            }
            ?>
        </select>
    </td>
</tr>

       
<tr>
    <td> Id du Pilote</td>
    <td>
        <select name="idpilote1">
            <?php
            foreach($lesPilotes as $unPilote){
                echo "<option value='" .$unPilote['idpilote']."'";
                echo ">";
                echo $unPilote['nom'];
                echo "</option>";
            }
            ?>
        </select>
    </td>
</tr>

        
<tr>
    <td> Id du Copilote</td>
    <td>
        <select name="idpilote2">
            <?php
            foreach($lesPilotes as $unPilote){
                echo "<option value='" .$unPilote['idpilote']."'";  
                echo ">";
                echo $unPilote['nom'];
                echo "</option>";
            }
            ?>
        </select>
    </td>
</tr>
        
        <tr>
            <td> <input type="reset" name="Annuler" value="Annuler"></td>
            <td> <input type="submit" 
                <?= ($leVol!=null)? 'name="Modifier" 
                value="Modifier" ' : ' name="Valider"
                value="Valider" ' 
                ?>
            ></td>
        </tr>
</table>
<?=
($leVol!=null)?'<input type="hidden" name ="idvol" value="'.$leVol['idvol'].'">' : ''
?>
</form>