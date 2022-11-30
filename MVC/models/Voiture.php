<?php

class Voiture {
private $numserie,$marque,$carburant,$prixlocation;
function __construct($nunserie="",$marque="",$carburant="",$prixlocation="") {
	
    $this->marque=$marque;
    $this->numserie=$nunserie;
    $this->carburant=$carburant;
    $this->prixlocation=$prixlocation;
}

	public function getNumserie() {
		return $this->numserie;
	}
	

	public function setNumserie($numserie) {
		$this->numserie = $numserie;	
	}

	public function getMarque() {
		return $this->marque;
	}
	

	public function setMarque($marque){
		$this->marque = $marque;
	}

	public function getCarburant() {
		return $this->carburant;
	}
	
	public function setCarburant($carburant){
		$this->carburant = $carburant;
	}

	public function getPrixlocation() {
		return $this->prixlocation;
	}
	

	public function setPrixlocation($prixlocation){
		$this->prixlocation = $prixlocation;
	}
}?>