<?php
$nom=$_POST['nom'];
$classe=$_POST['classe'];
$prenom=$_POST['prenom'];

$contenu=$nom ."#". $prenom ."#". $classe."\n" ;
$fichier = fopen("fichier.txt", "a+");
$ok = fwrite($fichier, $contenu);
echo "nombre de caractères ajoutés: $ok";
fclose($fichier);

$contenu=$nom ."#". $prenom ."#". $classe."\n" ;
$fichier=fopen("fichier.txt","a+");
$ok=fwrite($fichier,$contenu);
fclose($fichier);
?>