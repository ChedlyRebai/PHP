<?php include ("connexion.php");?>
<?php 
$code=$_POST['code'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom']; 
  $adresse=$_POST['adresse']; 
  $classe=$_POST['classe']; 
  $requet="UPDATE `etudiant` SET 
  `CodeEtudiant`='$code',
  `Nom`='$nom',
  `Prenom`='$prenom',
  `Adresse`='$adresse',
  `Classe`='$classe'
   WHERE CodeEtudiant='$code' ";
$ok=mysqli_query($idcon, $requet);
 if($ok==FALSE){
    echo "Problème de modification <br/>";
} 
else{
    echo "modification efectuée avec succes <br/>";
}
?>
<?php include ("deconnexion.php"); ?>

