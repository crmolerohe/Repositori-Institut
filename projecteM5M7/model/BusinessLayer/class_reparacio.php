<?php

class Reparacio {
	private $id; 
	private $matricula;
	private $descripcio;
	private $equipMecanic;
	private $dataEntrada; 
	private $dataSortida;

	function __construct($id,$matricula,$descripcio,$dataEntrada){ 
		$this->setId=$id; 
		$this->setMatricula=$matricula; 
		$this->setDescripcio=$descripcio; 
		$this->setDataEntrada=$dataEntrada; 
		$this->setEquipMecanic=$equipMecanic; 
		$this->setDataSortida=$dataSortida;
	} 

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getMatricula(){
		return $this->matricula;
	}

	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}

	public function getDescripcio(){
		return $this->descripcio;
	}

	public function setDescripcio($descripcio){
		$this->descripcio = $descripcio;
	}

	public function getEquipMecanic(){
		return $this->equipMecanic;
	}

	public function setEquipMecanic($equipMecanic){
		$this->equipMecanic = $equipMecanic;
	}

	public function getDataEntrada(){
		return $this->dataEntrada;
	}

	public function setDataEntrada($dataEntrada){
		$this->dataEntrada = $dataEntrada;
	}

	public function getDataSortida(){
		return $this->dataSortida;
	}

	public function setDataSortida($dataSortida){
		$this->dataSortida = $dataSortida;
	}
	
	
}
?>