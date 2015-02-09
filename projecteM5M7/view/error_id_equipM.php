<?php
session_start();

include "../header.php";
include "../controller/functions/function_comprovaSessio.php";
include "../controller/functions/function_comprovaAdmin.php";


if (comprovaSessio()) {
	if(comprovaAdmin()) {
		?>
		<p>¡¡Error!! el camp de <b>Id</b> esta buit.</p>
		<a href="alta_equipMecanic.php"> Tornar a Alta equip mecànic </a> <br />
		
		<?php
	} 
}
include "../footer.html";
?>