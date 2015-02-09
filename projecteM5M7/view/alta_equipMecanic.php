<?php
session_start();



include "../header.php";
include "../controller/functions/function_comprovaSessio.php";
include "../controller/functions/function_comprovaAdmin.php";

if (comprovaSessio()) {
	if(comprovaAdmin()) {
		?>
		<form method="post" action="../controller/crear_equipMecanic.php">
			<table>
				<tr> <td> <h5> Alta Equip Mecànic </h5> </td> </tr>
				<tr> <td> Id <input type="text" name="idEquip" /> </td> </tr>
				<tr> <td> Descripció <input type="text" name="descripcio" /> </td> </tr>
				<tr> <td> <input type="submit" name="crear" value="Donar d'alta"/> </td> </tr>
			</table>
		</form>
		<?php
	} 
}
include "../footer.html";
?>