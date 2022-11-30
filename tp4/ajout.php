<?php

$classe=$_POST['classe'];


$contenu= $classe."\n" ;
$fichier=fopen("classe.txt","a+");
$ok=fwrite($fichier,$contenu);
echo "nombre de caratere ajoutés:".$ok;
fclose($fichier);
?>