<?php

include "../header.php";

$chkUser = " ";
$user = "";

if(isset($_COOKIE['user'])) {
	$chkUser = "checked";
	$user = $_COOKIE['user'];
}

?>

<div id="content">
	<table>
		<form method="post" action="../controller/validarLogin.php">
			<tr> 
				<td> <h5> Login </h5> </td> 
			</tr>
			<tr> 
				<td> Usuari:  <input type="text" name="user" value="<?php echo $user;?>"/> </td> 
			</tr>
			<tr> 
				<td> Password: <input type="text" name="password" /> </td>
			</tr>
			<tr> 
				<td width="200">
					<input type="checkbox" name="recorda" value="user" <?php echo $chkUser; ?> > Recorda usuari 
				</td>
			</tr>
			<tr> 
				<td> <input type="submit" name="crear" value="Entrar" /> </td> 
			</tr>
		</form>
	</table>

</div>

<?php

include "../footer.html";

?>