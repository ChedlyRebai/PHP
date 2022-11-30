<?php
include ("connexion.php");
?>

<?php
$code=$_POST['code']; 
$requet="delete from livre where Codelivre='$code'"; 
$ok= mysqli_query($idcon, $requet); 
if($ok==FALSE) echo "Problème de suppression <br/>"; 
else echo "Suppression effectuée avec succes <br/>"; 
?>
<?php include ("deconnexion.php"); ?>