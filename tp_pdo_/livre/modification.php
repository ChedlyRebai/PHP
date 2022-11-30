<?php 
require_once('./livre.php'); 
$us=new user(); 
$us-> modifier_user($_POST['codelivre'],$_POST['titre'],$_POST['auteur'],$_POST['dateedition']); 
header('Location:index.php'); 
?>