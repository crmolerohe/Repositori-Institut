<?php
session_start();

function __autoload($class_name) {
	require_once "./model/BusinessLayer/class_".$class_name.".php";
}

if(!isset($_SESSION['taller'])){
	$taller = New Taller("A123456789","TALLER CD","Camp de les moreres", "9382828282");
	$taller->populateTaller();
	$_SESSION['taller']=serialize($taller);
} else {
	$taller = unserialize($_SESSION['taller']);
}

header("Location: view/login.php");
?>