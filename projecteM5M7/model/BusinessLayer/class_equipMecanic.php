<?php
class EquipMecanic {
	private $id;
	private $descripcio; 

	function __construct($id,$descripcio){ 
		$this->id=$id; 
		$this->descripcio=$descripcio; 
	} 
	
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getDescripcio(){
		return $this->descripcio;
	}

	public function setDescripcio($descripcio){
		$this->descripcio = $descripcio;
	}
	
}
?>