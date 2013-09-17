<?php 
	include "include/bd.php";
	include "include/library.php";
	$pagetitre = "Erreur HTTP 404";
	include "include/head.php";
	include "include/header.php";
?>
 
	<article class="centercontent content">
		<h1>Erreur HTTP 404</h1>
		<h3>Ce code est renvoyé par un serveur HTTP pour indiquer que la ressource demandée (généralement une page web) n’existe pas.</h3>

		<div id="flashContent">
			<object width="1180" height="666" data="images/404.swf" type="application/x-shockwave-flash">
				<param name="movie" value="images/404.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="images/404.swf" width="1180" height="666">
					<param name="movie" value="images/404.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>
	</article>
<?php 
	include "include/footer.php";
?>