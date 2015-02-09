<?php
session_start();

function __autoload($class_name) {
	require_once "../model/BusinessLayer/class_".$class_name.".php";
}

$taller=unserialize($_SESSION['taller']);

if(!empty($_POST["idEquip"])) {
	if(!empty($_POST["descripcio"])){
		$taller->inserirEquipsMecanics($_POST["idEquip"],$_POST["descripcio"]);
		echo $_POST["idEquip"];
		echo $_POST["descripcio"];
		$_SESSION['taller']=serialize($taller);
		header("Location:../view/creat_ok_equipM.php");
	}	else{
		header("Location:../view/error_desc_equipM.php");
	}
}else{
		header("Location:../view/error_id_equipM.php");
}

?>