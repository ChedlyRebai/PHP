<?php
require_once("./voiture.php");
$trouve=false;
$vo=new Voiture();
$res=$vo->liste();

if($res){
    foreach($res as $test){
        if( $test['carburant']==$_POST['carburant']){
            $trouve=true;
            break;
        }
    }
}

if($trouve){
    echo "liste de voiture ". $_POST['carburant'];
    echo "<table border='1'> <tbody>";
    echo "
    <tr>
    <td>id voiture</td>
    <td>numserie</td>
    <td>marque</td>
    <td>carburant</td>
    <td>prixlocation</td>
</tr>";
    foreach($res as $row){
    if( $row['carburant']==$_POST['carburant']){
        ?>
<tr>
    <td><?= $row['idvoiture'] ?></td>
    <td><?= $row['numserie'] ?></td>
    <td><?= $row['marque'] ?></td>
    <td><?= $row['carburant'] ?></td>
    <td><?= $row['prixlocation'] ?></td>
</tr>

<?php
    }
    }
    echo "</tbody></table>";
}

if(!$trouve){ ?>

<p>aucun voiture pour ce type de carburant</p>

<?php } ?>