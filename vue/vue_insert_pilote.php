<h3> Ajout d'un nouveau pilote </h3>
<style>
        body {
            background-image: url("images/arriereplan.jpg");
            background-size: cover; /* pour ajuster l'image à la taille de la fenêtre */
        }
        </style>
<form method="post">
    <table>
        
        <tr>
            <td> Nom </td>
            <td> <input type="text" name="nom" value="<?=($lePilote!=null)?$lePilote['nom']:''?>"></td>
        </tr>
        
        <tr>
            <td> Prenom </td>
            <td> <input type="text" name="prenom"value="<?=($lePilote!=null)?$lePilote['prenom']:''?>"></td>
        </tr>
        <tr>
       
        <tr>
            <td> Adresse </td>
            <td> <input type="text" name="adresse"value="<?=($lePilote!=null)?$lePilote['adresse']:''?>"></td>
        </tr>
       
        <tr>
            <td> Email </td>
            <td> <input type="text" name="email"value="<?=($lePilote!=null)?$lePilote['email']:''?>"></td>
        </tr>
        
        <tr>
            <td> Bip </td>
            <td> <input type="text" name="bip"value="<?=($lePilote!=null)?$lePilote['bip']:''?>"></td>
        </tr>
        
        <tr>
            <td> Nombre d'heure de vols </td>
            <td> <input type="time" name="nbHeuresVols"value="<?=($lePilote!=null)?$lePilote['nbHeuresVols']:''?>"></td>
        </tr>
        </td>
            <td><input type="reset" name="Annuler" value="Annuler"> </td>
            <td><input type="submit" 
            <?= ($lePilote!=null)? ' name="Modifier" 
            value= "Modifier"': 'name="Valider" 
            value="Valider"'
            ?> 
            ></td>
        </tr>
    
    </table>
    <?=
    ($lePilote!=null)?'<input type="hidden" name="idpilote" value="'.$lePilote['idpilote'].'">': ''
    ?>
</form>
          
