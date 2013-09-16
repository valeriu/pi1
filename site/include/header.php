<header id="sticker">
	<div class="centercontent"> 
	<div class="logo fleft">
		<a href="index.php" title="Honda Accord 2014">
			<img src="images/logo-honda-accord.png" alt="Honda Accord 2014">
		</a>
	</div>
	<div class="fright">
		<nav>
			<ul class="centercontent">

<?php 
	$file_name = trim(basename($_SERVER['PHP_SELF'], ".php").PHP_EOL);
	//echo $file_name;
	$nav = array(
		"survol" => "Survol",
		"exterieur" => "Extérieur",
		"interieur" => "Intérieur",
		"securite" => "Sécurité",
		"specifications" => "Spécifications",
		"garantie" => "Garantie",
		"contact" => "Contact",
		"essai" => "Essayer"
		);
	foreach ($nav as $i => $value) {
		if ($file_name == $i || ($file_name == "essaimesage" && $i == "essai")) {
			echo '<li><a class="active" href="'.$i.'.php">'.$value.'</a></li>';
		} else {
			echo '<li><a href="'.$i.'.php">'.$value.'</a></li>';
		}
		
	}
?>
			</ul>
			<div class="clear"></div>
		</nav>
	</div>
	<div class="clear"></div>
	</div>
</header>