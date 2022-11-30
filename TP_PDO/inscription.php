<?php 
require_once('user.php'); 
$us=new user(); 
$us->user_id=$_POST['iduser']; 
$us->user_nom=$_POST['nomuser']; 
$row=$us-> recherche_user($us->user_id); 
$n= $row->fetchColumn(0) ; 
if($n==0) {
     $us->insertuser(); 
     header('Location:index.php'); 
} else {
    echo "utilisateur existe déjà "; 
} ?>