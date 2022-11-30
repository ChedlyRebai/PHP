<?php include ("connexion.php");?>
<?php 
$code=$_POST['code'];
  $titre=$_POST['titre'];
  $auteur=$_POST['auteur']; 
  $date=$_POST['date']; 
  $classe=$_POST['classe']; 
  $requet=" UPDATE `livre` SET
  `Codelivre`='$code',
  `Titre`='$titre',
  `Auteur`='$auteur',
  `DateEdition`='$date'
   WHERE CodeLivre='$code'";

$ok=mysqli_query($idcon, $requet);
 if($ok==FALSE){
    echo "Problème de modification <br/>";
} 
else{
    echo "modification efectuée avec succes <br/>";
}
?>
<?php include ("deconnexion.php"); ?>

