<h3> Ajout d'un nouveau constructeur</h3>
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
				value="<?= ($leConstructeur!=null)?$leConstructeur['libelle']:''?>"></td>
		</tr>
		
		<tr>
			<td> Pays du constructeur </td>
			<td> <input type="text" name="pays"
				value="<?= ($leConstructeur!=null)?$leConstructeur['pays']:''?>"></td>
		</tr>
		
		<tr>
			<td> Statut du constructeur</td>
			<td> <select name="statut" > 
					<option value="national">National</option>
					<option value="international">International</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"></td>
			<td> <input type="submit"
				<?= ($leConstructeur!=null)? 'name="Modifier" 
				value="Modifier" ' : ' name="Valider"
				value="Valider" ' 
				?>
				></td>
		</tr>

	</table>
<?=
($leConstructeur!=null)?'<input type="hidden" name ="idconstructeur" value="'.$leConstructeur['idconstructeur'].'">' : ''
?>
</form>