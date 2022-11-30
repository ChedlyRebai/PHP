<?php

require_once("../model/modele.php");

class listelocation extends Modele{

    function listelocation(){
        $query="select idlocat,nbrjour,dateloc,marque,numserie,ncin,nom,prenom from location l,client c,voiture v where l.idclient=c.idclient and v.idvoiture=l.idvoiture; ";
        $res=$this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    
}

$lo=new listelocation();
$res=$lo->listelocation();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tbody>
            <tr>
                <td colspan="3">Location</td>
                <td colspan="2">voiture</td>
                <td colspan="3">client</td>
            </tr>
            <tr>
                <td>identifiant</td>
                <td>nbr de jours</td>
                <td>date</td>
                <td>marque</td>
                <td>numero de serie </td>
                <td>numero de cin </td>
                <td>nom</td>
                <td>prenom</td>
            </tr>

            <?php foreach($res as $row){  ?>

            <tr>
                <td><?= $row['idlocat'] ?></td>
                <td><?= $row['nbrjour']?></td>
                <td><?= $row['dateloc']?></td>
                <td><?= $row['marque'] ?></td>
                <td><?= $row['numserie']?></td>
                <td><?= $row['ncin'] ?></td>
                <td><?= $row['nom'] ?></td>
                <td><?= $row['prenom'] ?></td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>