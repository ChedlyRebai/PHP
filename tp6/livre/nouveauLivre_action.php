<?php include ("connexion.php");?>
<?php 
  $code=$_POST['code'];
  $titre=$_POST['titre'];
  $auteur=$_POST['auteur']; 
  $date=$_POST['date']; 
  $requet="INSERT INTO `livre`
  (`Codelivre`, `Titre`, `Auteur`, `DateEdition`)
   VALUES 
  ('$code','$titre','$auteur','$date')";
$ok=mysqli_query($idcon, $requet);
 if($ok==FALSE)
    {echo "Problème d'insertion <br/>";} 
 else 
    {echo "Insertion efectuée avec succes <br/>"; }?>
<?php include ("deconnexion.php"); ?>