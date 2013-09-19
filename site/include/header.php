<header id="sticker">
	<div class="centercontent"> 
	<div class="logo">
		<a href="index.php" title="Honda Accord 2014">
			<img src="images/logo-honda-accord.png" alt="Honda Accord 2014">
		</a>
	</div>
	<div class="navigation">
		<nav>
			<ul>

<?php 
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