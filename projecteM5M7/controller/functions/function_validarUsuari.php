<?php

function validarUsuari() {
		$admin = "admin";
	$user = "usuari";
	$pwdUser = "123";
	$pwdAdmin = "456";
	$usuariOK = true;
	if(isset($_POST['user']) && isset($_POST['password'])) {
		$userEntrat = strtolower($_POST['user']);
		$pwdEntrat = $_POST['password'];
		if($pwdEntrat == $pwdAdmin && $userEntrat == $admin) {
			$_SESSION['loguejat'] = true;
			$_SESSION['user'] = $userEntrat;
		} elseif($pwdEntrat == $pwdUser && $userEntrat == $user) {
			$_SESSION['loguejat'] = true;
			$_SESSION['user'] = $userEntrat;
			$usuariOK = false;
		} else {
			$usuariOK = false;
		}
	}

	return $usuariOK;
}

?>