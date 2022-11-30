<?php require_once('./Etudiant.php'); 
$us=new user(); 
$us->codeetudiant=$_POST['codeetudiant']; 
$us->nom=$_POST['nometudiant']; 
$row=$us-> recherche_user($us->codeetudiant); 
$n= $row->fetchColumn(0) ; 
if($n==0) { 
    $us->insertuser(); 
    header('Location:index.php');
} else { 
    echo "etudiant existe déjà "; 
} 
?>