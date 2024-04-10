<h3> Ajout d'un nouvel avion</h3>
<style>
        body {
            background-image: url("images/arriereplan.jpg");
            background-size: cover; /* pour ajuster l'image à la taille de la fenêtre */
        }
        </style>
<form method="post">
	<table>
		<tr>
			<td> designation </td>
			<td> <input type="text" name="designation"
				value="<?= ($lAvion!=null)?$lAvion['designation']:''?>"></td>
		</tr>
		
		<tr>
			<td> Date d'achat</td>
			<td> <input type="date" name="dateAchat"
				value="<?= ($lAvion!=null)?$lAvion['dateAchat']:''?>"></td>
		</tr>
		
		<tr>
			<td> Capacité de l'avion </td>
			<td> <input type="text" name="capacite"
				value="<?= ($lAvion!=null)?$lAvion['capacite']:''?>"></td>

		</tr>
		
		<td> id du constructeur </td>
			<td> <select name="idconstructeur" > 
			<?php
			foreach($lesConstructeurs as $unConstructeur){
				echo"<option value='".$unConstructeur['idconstructeur']."'>";
				echo $unConstructeur['libelle'];
				echo "</option>";
			}
			?>	

				</select>
			</td>
		
			<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"></td>
			<td> <input type="submit"
				<?= ($lAvion!=null)? 'name="Modifier" 
				value="Modifier" ' : ' name="Valider"
				value="Valider" ' 
				?>
				></td>
		</tr>


	</table>
<?=
($lAvion!=null)?'<input type="hidden" name ="idavion" value="'.$lAvion['idavion'].'">' : ''
?>
</form>