<?php require_once('./livre.php'); 
$us=new user(); 
$us->codelivre=$_POST['codelivre']; 
$us->titre=$_POST['titre']; 
$us->auteur=$_POST['auteur']; 
$us->dateedition=$_POST['cateedition']; 
$row=$us-> recherche_user($us->codelivre,$us->titre,$us->auteur,$us->dateedition); 
$n= $row->fetchColumn(0) ; 
if($n==0) { 
    $us->insertuser(); 
    header('Location:index.php');
} else { 
    echo "livre existe déjà "; 
    } 
?>