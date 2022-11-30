<?php 
require_once('./Etudiant.php'); 
$us=new user(); 
$us-> supprimer_user($_GET['id']); 
header('Location:index.php'); 
?>