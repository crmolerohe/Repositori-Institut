<?php

function comprovaSessio() {
	if (isset($_SESSION['loguejat'])) {
		$userLoguejat = true;
	} else {
		$userLoguejat = false;
	}
	return $userLoguejat;
}
?>