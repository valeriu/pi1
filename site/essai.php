<?php 
	include "include/bd.php";
	include "include/library.php";
	$pagetitre = "Demander un essai routier";
	include "include/head.php";
	include "include/header.php";
?>
 
	<article class="centercontent content">
		<h1>Demander un essai routier</h1>
		<form id="essaiform" action="essaimesage.php">
			<fieldset>
				<legend>Information de contact</legend>

				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value="">

				<label for="prenom">Prénom</label>
				<input type="text" name="prenom" id="prenom" value="">

				<label for="courriel">Courriel</label>
				<input type="text" name="courriel" id="courriel" value="">

				<label for="telephone">Téléphone</label>
				<input type="text" name="telephone" id="telephone" value="">
				
				<label for="remarques">Votre message</label>
				<textarea name="remarques" id="remarques" cols="30" rows="10"></textarea>

				<input type="submit" value="Soumettre" />

			</fieldset>
		</form>
	</article>
<?php 
	include "include/reconnaissance.php"; 
	include "include/footer.php";
?>