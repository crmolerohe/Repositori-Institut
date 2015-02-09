<?php
class Taller {
	private $cif;
	private $nom;
	private $adreca; 
	private $telefon;

	private $propietaris;
	private $cotxes;
	private $reparacions;
	private $equipsMecanics;

	function __construct($cif,$nom,$adreca,$telefon){ 
		$this->setCif=$cif; 
		$this->setNom=$nom; 
		$this->setAdreca=$adreca; 
		$this->setTelefon=$telefon; 
		$this->propietaris = array();
		$this->cotxes = array();
		$this->reparacions = array();
		$this->equipsMecanics = array();
	} 

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getAdreca(){
		return $this->adreca;
	}

	public function setAdreca($adreca){
		$this->adreca = $adreca;
	}

	public function getTelefon(){
		return $this->telefon;
	}

	public function setTelefon($telefon){
		$this->telefon = $telefon;
	}

	public function getCif() {
		return $this->cif;
	}

	public function setCif($cif) {
		$this->cif = $cif;
		return $this;
	}

	public function inserirPropietaris($nif,$nom,$cognom,$clientHabitual,$adreca,$telefon) {
		$prop = new Propietari($nif,$nom,$cognom,$clientHabitual,$adreca,$telefon);
		array_push($this->propietaris, $prop);
	}

	public function inserirCotxes($matricula,$marca,$model) {
		$cotxe = new Cotxe($matricula,$marca,$model);
		array_push($this->cotxes, $cotxe);
	}

	public function inserirEquipsMecanics($id, $descripcio) {
		$eqMe = new EquipMecanic($id, $descripcio);
		array_push($this->equipsMecanics, $eqMe);
	}

	public function inserirReparacions($id,$matricula,$descripcio,$dataEntrada) {
		$rep = new Reparacio($id,$matricula,$descripcio,$dataEntrada);
		array_push($this->reparacions, $rep);
	}

	public function populateTaller() {
		//$this->inserirPropietari("123", "Prova", "Prova2", 1, "Camp moreres", "93829291045");
		$this->inserirEquipsMecanics("Equip A", "Pintura");
		$this->inserirEquipsMecanics("Equip B", "Mecànica");
		$this->inserirEquipsMecanics("Equip C", "Electromecànica");
		$this->inserirCotxes("2356HBN","Opel","Astra");
	}

    public function getPropietaris(){
    	return $this->propietaris;
    }

    public function setPropietaris($propietaris) {
    	$this->propietaris = $propietaris;

    	return $this;
    }

    public function getCotxes() {
    	return $this->cotxes;
    }

    public function setCotxes($cotxes) {
    	$this->cotxes = $cotxes;

    	return $this;
    }

    public function getReparacions() {
    	return $this->reparacions;
    }


    public function setReparacions($reparacions) {
    	$this->reparacions = $reparacions;
    	return $this;
    }


    public function getEquipsMecanics() {
    	return $this->equipsMecanics;
    }

    public function setEquipsMecanics($equipsMecanics) {
    	$this->equipsMecanics = $equipsMecanics;
    	return $this;
    }
}
?>