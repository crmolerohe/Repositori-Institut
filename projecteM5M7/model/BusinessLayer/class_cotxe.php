<?php
class Cotxe {
	private $matricula;
	private $marca; 
	private $model;

	function __construct($matricula,$marca,$model){ 
		$this->matricula=$matricula; 
		$this->marca=$marca; 
		$this->model=$model; 
	} 
	public function getMatricula(){
		return $this->matricula;
	}

	public function setMatricula($matricula){
		$this->matricula = $matricula;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getModel(){
		return $this->model;
	}

	public function setModel($model){
		$this->model = $model;
	}
	
}
?>