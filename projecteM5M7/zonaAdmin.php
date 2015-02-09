<?php
session_start();

include "header.php";
include "controller/functions/function_comprovaSessio.php";
include "controller/functions/function_comprovaAdmin.php";

if (comprovaSessio()) {
	if(comprovaAdmin()) {
		?>
		<a href="view/alta_reparacio.php"> Donar alta reparació </a> <br />
		<a href="view/alta_propietari.php"> Donar alta propietari </a><br />
		<a href="view/alta_equipMecanic.php"> Donar alta equip mecànic </a><br />
		<a href="view/mostrar_equipMecanic.php"> Mostrar equips mecànics </a>
		<?php
	} 
}
include "footer.html";
?>