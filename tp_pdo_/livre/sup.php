<?php 
require_once('./livre.php'); 
$us=new user(); 
$us-> supprimer_user($_GET['id']); 
header('Location:index.php'); 
?>