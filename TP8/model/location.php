<?php
include_once("modele.php");
class Locations extends Modele{
private $idlocat,$idclient,$nbjour,$dateloc;
function __construct(/*$id="",$ncin="",$nom="",$prenom="",$tel=""*/) {
/*$this->idClient=$id;
$this->ncin=$ncin;
$this->nom=$nom;
$this->prenom=$prenom;
$this->tel=$tel;*/
parent::__construct();
}


function insert($idclient,$idvoiture,$nbjour,$dateloc){
$query="INSERT INTO `location` (`idclient`, `idvoiture`, `nbrjour`, `dateloc`) VALUES ( ?, ?, ?, ?)";
$res=$this->pdo->prepare($query);
return $res->execute(array($idclient,$idvoiture,$nbjour,$dateloc));
}

}?>