	<?php
	function mostrarEquips() {
		$taller=unserialize($_SESSION['taller']);
		$tots = $taller->getEquipsMecanics();
		
		for ($i=0; $i < count($tots); $i++) { 
			?>
			<option value="<?php echo $tots[$i]->getId();?>"> <?php echo $tots[$i]->getId()." - ".$tots[$i]->getDescripcio();?> </option>
			<?php
		}
	}
	?>
