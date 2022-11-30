<?php 
require_once('user.php'); 
$us=new user(); 
$res=$us->listusers(); 
echo "<table border=1> <tr><td>Numero utilisateur</td> <td>Nom utilisateur</td> <td>Modifier</td> <td>Supprimer</td></tr>"; 
foreach($res as $row) { 
    echo "<tr><td>$row[id]</td> <td>$row[nom]</td> <td><a href ='modif.php?id=$row[id]'>Modifier</a></td> <td><a href='sup.php?id=$row[id]'>Supprimer</a></td> </tr>";
    } 
    echo "</table>"; 
    echo "<a href='inscription.html'>Inscription</a>";
?>

<form name="form1" method="post" action="inscription.php">
    <table width="42%" border="1">
        <tr>
            <td width="37%">Num&eacute;ro utilisateur</td>
            <td width="63%"><input name="iduser" type="text" id="iduser"></td>
        </tr>
        <tr>
            <td>Nom utilisateur</td>
            <td><input name="nomuser" type="text" id="nomuser"></td>
        </tr>
        <tr>
            <td><input type="submit" name="Submit" value="Enregistrer"></td>
        </tr>
    </table>
</form>