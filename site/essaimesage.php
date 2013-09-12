<?php 
	if (isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["courriel"]) && isset($_GET["telephone"]) && isset($_GET["remarques"])) {
		$nom		= strip_tags($_GET["nom"]);
		$prenom		= strip_tags($_GET["prenom"]);
		$courriel	= strip_tags($_GET["courriel"]);
		$telephone	= strip_tags($_GET["telephone"]);
		$remarques	= strip_tags($_GET["remarques"]);
		$ip			= $_SERVER['REMOTE_ADDR'];
		$data		= date("Y-m-d H:i:s"); 
	} else {
		header('Location: essai.php');
		exit;
	}
	include "include/bd.php";
	$pagetitre 	= "Nous avons bien reçu votre demande!";
	include "include/head.php";
	include "include/header.php";
	include "include/nav.php";
?>
 
	<article class="centercontent content">
		<h1> <?php echo $nom . " " . $prenom; ?> </h1>
		<h2>Nous avons bien reçu votre demande!</h2>
		<h3>Nous vous ferons parvenir dès que possible la confirmation de la date et de 
		l'heure de votre rendez-vous. Merci!</h3>

		<p>
		<?php 
		echo $nom	;
		echo "<br />";
		echo $prenom	;
		echo "<br />";
		echo $courriel;
		echo "<br />";
		echo $telephone;
		echo "<br />";
		echo $remarques;
		echo "<br />";
		echo $ip		;
		echo "<br />";
		echo $data	;
		echo "<br />";
		?>
		</p>
	</article>
<?php 
	include "include/footer.php";
?>