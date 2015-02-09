<?php
session_start();

$admin = "admin";
$user = "usuari";
$pwdUser = "123";
$pwdAdmin = "456";

// Comprova si s'ha marcat el checkbox de recordar usuari. Si ho ha marcat,
// fa una cookie amb l'usuari, si no, la esborra.

if(isset($_POST['recorda'])) {
	setcookie("user", $_POST['user'], time()+3600);  
} else {
	setcookie("user", $_POST['user'], time()-3600);  
}

if(isset($_POST['user']) && isset($_POST['password'])) {
	$userEntrat = strtolower($_POST['user']);
	$pwdEntrat = $_POST['password'];
	if($pwdEntrat == $pwdAdmin && $userEntrat == $admin) {
		$_SESSION['loguejat'] = true;
		$_SESSION['user'] = $userEntrat;
		header("Location: ../zonaAdmin.php");
	} elseif($pwdEntrat == $pwdUser && $userEntrat == $user) {
		$_SESSION['loguejat'] = true;
		$_SESSION['user'] = $userEntrat;
		header("Location: ../zonaUser.php");
	} else {
		include("../view/error_login.php");
	}
}

?>