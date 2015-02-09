<?php
session_start();

function __autoload($class_name) {
	require_once "../model/BusinessLayer/class_".$class_name.".php";
}

include "../header.php";
include "../controller/functions/function_comprovaSessio.php";
include "../controller/functions/function_comprovaAdmin.php";
include "llistar_equipMecanic.php";


if (comprovaSessio()) {
	if(comprovaAdmin()) {
		?>
		<h4>Equips Mecànics</h4>
		<p>
			<?php
			llistar_equipMecanic();
			?>
		</p>
		<a href="../zonaAdmin.php"> Tornar al menu</a>
		<?php
	} 
}
include "../footer.html";
?>