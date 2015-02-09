<?php

	function llistar_equipMecanic() {
		$taller=unserialize($_SESSION['taller']);
		$tots = $taller->getEquipsMecanics();
	
		for ($i=0; $i < count($tots); $i++) { 
			?>
			<?php echo $tots[$i]->getId()." - ".$tots[$i]->getDescripcio();?><br/>
			<?php
		}
	}
	?>
