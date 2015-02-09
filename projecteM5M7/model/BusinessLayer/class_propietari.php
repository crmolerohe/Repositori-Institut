<?php
class Propietari {
	private $nif;
	private $nom;
	private $cognom;
	private $clientHabitual;
	private $adreca; 
	private $telefon;

	function __construct($nif,$nom,$cognom,$clientHabitual,$adreca,$telefon){ 
		$this->nif=$nif; 
		$this->nom=$nom; 
		$this->cognom=$cognom; 
		$this->clientHabitual=$clientHabitual; 
		$this->adreca=$adreca; 
		$this->telefon=$telefon; 	
	} 

	public function getNif(){
		return $this->nif;
	}

	public function setNif($nif){
		$this->nif = $nif;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getCognom(){
		return $this->cognom;
	}

	public function setCognom($cognom){
		$this->cognom = $cognom;
	}

	public function getClientHabitual(){
		return $this->clientHabitual;
	}

	public function setClientHabitual($clientHabitual){
		$this->clientHabitual = $clientHabitual;
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
}
?>