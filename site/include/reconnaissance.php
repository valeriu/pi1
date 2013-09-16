	<section class="centercontent">
	<?php 
		$query = "SELECT * FROM  `pi1_reconnaissance` ORDER BY RAND( ) LIMIT 2";
		$result = mysqli_query($connectBD, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<div class="reconnaissance-one tooltip" title="<?php echo $row["content"]; ?>">
				<div class="reconnaissance-img fleft">
					<img src="images/reconnaissance/<?php echo $row["logo"]; ?>" alt="<?php echo $row["titre"]; ?>">
				</div>
				<div class="reconnaissance-t-c fright">
					<div class="reconnaissance-titre">
						<?php echo $row["titre"]; ?>
					</div>
				</div>
			</div>
	<?php 	} ?>
		<div class="clear"></div>
	</section>