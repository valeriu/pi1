<?php 
		include "include/bd.php";
		include "include/library.php";
	if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["courriel"]) && isset($_GET["telephone"]) && isset($_GET["remarques"])) {
		$nom		= mysqli_real_escape_string($connectBD, strip_tags($_GET["nom"]));
		$prenom		= mysqli_real_escape_string($connectBD, strip_tags($_GET["prenom"]));
		$courriel	= mysqli_real_escape_string($connectBD, strip_tags($_GET["courriel"]));
		$telephone	= mysqli_real_escape_string($connectBD, strip_tags($_GET["telephone"]));
		$remarques	= mysqli_real_escape_string($connectBD, strip_tags($_GET["remarques"]));
		$ip			= $_SERVER['REMOTE_ADDR'];
		$data		= date("Y-m-d H:i:s"); 

		$requete =  'INSERT INTO pi1_essai (id,nom,prenom,courriel,telephone,remarques,ip,data)  
					 VALUES (NULL,
					 "' . $nom. '", 
					 "' . $prenom . '", 
					 "' . $courriel . '", 
					 "' . $telephone. '", 
					 "' . $remarques . '", 
					 "' . $ip . '",
					 "' . $data . '")';				
		$resultats = mysqli_query($connectBD, $requete);
	} else {
		header('Location: essai.php');
		exit;
	}

	$pagetitre 	= "Nous avons bien reçu votre demande!";
	include "include/head.php";
	include "include/header.php";
?>
	<article class="centercontent content">
		<h1> <?php echo $nom . " " . $prenom; ?> </h1>
		<h2>Nous avons bien reçu votre demande!</h2>
		<h3>Nous vous ferons parvenir dès que possible la confirmation de la date et de 
		l'heure de votre rendez-vous. Merci!</h3>

		<p>Revenir à la page <a href="index.php">d'accueil</a></p>
	</article>
<?php 
	include "include/reconnaissance.php"; 
	include "include/footer.php";
?>