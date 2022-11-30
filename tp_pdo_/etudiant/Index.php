<?php require_once('./Etudiant.php'); 
$us=new user(); 
$res=$us->listusers();
 echo "<table border=1> 
 <tr>
 <td>code etudiant</td> 
 <td>Nom</td> 
 <td>Prenom</td> 
 <td>Adresse</td> 
 <td>Classe</td> 
 <td>Modifier</td> 
 <td>Supprimer</td>
 </tr>"; 
 foreach($res as $row) { 
    echo "<tr><td>$row[CodeEtudiant]</td> 
         <td>$row[Nom]</td> 
         <td>$row[Prenom]</td> 
         <td>$row[Classe]</td> 
         <td>$row[Adresse]</td> 
         <td><a href ='modif.php?id=$row[CodeEtudiant]'>Modifier</a></td>
          <td><a href='sup.php?id=$row[CodeEtudiant]'>Supprimer</a></td> </tr>"; 
    } 
echo "</table>"; 
echo "<a href='inscription.html'>Inscription</a>"; 
?>