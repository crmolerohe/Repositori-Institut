<?php
session_start();

function __autoload($class_name) {
	require_once "../model/BusinessLayer/class_".$class_name.".php";
}

include "../header.php";
include "../controller/functions/function_comprovaSessio.php";
include "../controller/functions/function_comprovaAdmin.php";
include "mostrarEquips.php";

if (comprovaSessio()) {
	if(comprovaAdmin()) {
		?>
		<form method="post" action="#">
			<table>
				<tr> <td> <h5> Alta Reparació </h5> </td> </tr>
				<tr> <td> Matricula <input type="text" name="matricula" /> </td> </tr>
				<tr> <td> Descripció <input type="text" name="descripcio" /> </td> </tr>
				<tr> <td> Data entrada <input type="date" name="dataEntrada" /> </td> </tr>
				<tr> 
					<td> Equip de reparació 
						<select name="equipReparacio">
							<?php mostrarEquips(); ?>
						</select> </td> 
					</tr>
					<tr> <td> <input type="submit" name="crear" value="Donar d'alta"/> </td> </tr>
				</table>
			</form>
			<?php
		} 
	}

	include "../footer.html";

	?>