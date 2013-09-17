<?php 
		include "include/bd.php";
		include "include/library.php";
	if (isset($_POST["titre"]) && isset($_POST["content"]) && isset($_POST["logo"])) {
		$titre		= mysqli_real_escape_string($connectBD, strip_tags($_POST["titre"]));
		$content	= mysqli_real_escape_string($connectBD, strip_tags($_POST["content"]));
		$logo		= mysqli_real_escape_string($connectBD, strip_tags($_POST["logo"]));


		$requete =  'INSERT INTO pi1_reconnaissance (id,titre,content,logo)  
					 VALUES (NULL,
					 "' . $titre. '", 
					 "' . $content . '", 
					 "' . $logo . '")';				
		$resultats = mysqli_query($connectBD, $requete);
		echo $titre;
	}

	$pagetitre 	= "Nous avons bien reçu votre demande!";
	include "include/head.php";
	include "include/header.php";
?>
	<article class="centercontent content">
	<h1>baga</h1>
		<form action="rec.php" method="POST">
			<input type="text" name="titre" id="titre"> <br><br>
			
			<textarea name="content" id="content" cols="30" rows="10"></textarea><br> <br>

			<input type="text" name="logo" id="logo"><br> <br> <br>

			<input type="submit" value="baga!">

		</form>

	</article>
<?php 
	include "include/footer.php";
?>