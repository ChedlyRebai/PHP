<?php 
require_once('./Etudiant.php'); 
$us=new user(); 
$us-> modifier_user($_POST['code'],$_POST['nom'],$_POST['prenom'],$_POST['classe'],$_POST['addresse']); 
header('Location:index.php'); 
?>