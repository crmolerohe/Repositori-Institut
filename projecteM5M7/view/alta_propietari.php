<?php
session_start();

function __autoload($class_name) {
	require_once "../model/BusinessLayer/class_".$class_name.".php";
}
include "../header.php";
include "../controller/functions/function_comprovaSessio.php";
include "../controller/functions/function_comprovaAdmin.php";

if (comprovaSessio()) {
	if(comprovaAdmin()) {
		?>
		<table>
			<form method="post" action="validarAltaPropietari.php">
				<tr> <td> <h5> Dades del propietari </h5> </td> </tr>
				<tr> <td> NIF <input type="text" name="nif" /> </td> </tr>
				<tr> <td> Nom <input type="text" name="nom" /> </td> </tr>
				<tr> <td> Primer cognom <input type="text" name="primerCognom" /> </td> </tr>
				<tr> <td> Segon cognom <input type="text" name="segonCognom" /> </td> </tr>
				<tr> <td> Telèfon <input type="text" name="tlf" /> </td> </tr>
				<tr> <td> Adreça <input type="text" name="adreca" /> </td> </tr>
				<tr> <td> <h5> Dades del cotxe </h5> </td> </tr>
				<tr> <td> Matricula <input type="text" name="matricula" /> </td> </tr>
				<tr> <td> Model <input type="text" name="model" /> </td> </tr>
				<tr> <td> Tipus combustible <select name="combustible">
					<option value="diesel"> Diesel </option>
					<option value="gasoil"> Gasoil </option>
				</select> </td> </tr>
				<tr> <td> <input type="submit" name="crear" value="Donar d'alta"/> </td> </tr>
			</form>
		</table>
		<?php
	} 
}
include "../footer.html";
?>