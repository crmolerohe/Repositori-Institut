<?php

function comprovaAdmin() {
	if ($_SESSION['user'] == "admin") {
		$admin = true;
	} else {
		$admin = false;
	}

	return $admin;
}

?>