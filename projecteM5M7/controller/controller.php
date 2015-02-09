<?php
session_start();
include "functions/function_validarUsuari.php";



	if(validarUsuari()) {
		if($_SESSION['user'] == "admin") {
			header("Location: ../../zonaAdmin.php");
		} else {
			header("Location: ../../view/login.php");
		}
	}

?>