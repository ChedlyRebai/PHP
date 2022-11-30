<?php require_once('./livre.php'); 
$us=new user(); 
$res=$us->listusers();
 echo "<table border=1> 
 <tr>
 <td>code livre</td> 
 <td>titre</td> 
 <td>auteur</td> 
 <td>date edition</td> 
 
 <td>Modifier</td> 
 <td>Supprimer</td>
 </tr>"; 
 foreach($res as $row) { 
    echo "<tr><td>$row[Codelivre]</td> 
         <td>$row[Titre]</td> 
         <td>$row[Auteur]</td> 
         <td>$row[DateEdition]</td> 
          
         <td><a href ='modif.php?id=$row[Codelivre]'>Modifier</a></td>
          <td><a href='sup.php?id=$row[Codelivre]'>Supprimer</a></td> </tr>"; 
    } 
echo "</table>"; 
echo "<a href='inscription.html'>Inscription</a>"; 
?>