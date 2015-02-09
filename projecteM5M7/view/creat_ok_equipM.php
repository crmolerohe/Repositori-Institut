<?php
session_start();

include "../header.php";
include "../controller/functions/function_comprovaSessio.php";
include "../controller/functions/function_comprovaAdmin.php";


if (comprovaSessio()) {
	if(comprovaAdmin()) {
		?>
		<p>L'equip mecànic s'ha creat correctament</p>
		<a href="alta_equipMecanic.php"> Tornar a donar d'alta equip mecànic </a> <br />
		<a href="../zonaAdmin.php"> Tornar al menu</a>
		<?php
	} 
}
include "../footer.html";
?>