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
				<input type="text" name="nom" id="nom" value="Valeriu">

				<label for="prenom">Prenom</label>
				<input type="text" name="prenom" id="prenom" value="Tihai">

				<label for="courriel">Courriel</label>
				<input type="text" name="courriel" id="courriel" value="valeriu@tihai.md">

				<label for="telephone">Telepthone</label>
				<input type="text" name="telephone" id="telephone" value="4389901929">
				
				<label for="remarques">Remarques</label>
				<textarea name="remarques" id="remarques" cols="30" rows="10">Un text ceva</textarea>

				<input type="submit" value="Soumettre" />

			</fieldset>
		</form>
	</article>
<?php 
	include "include/reconnaissance.php"; 
	include "include/footer.php";
?>