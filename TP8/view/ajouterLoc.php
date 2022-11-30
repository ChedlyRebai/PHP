<?php
require_once("../model/client.php");
require_once("../model/voiture.php");
require_once("../model/location.php");
$cl=new Client();
$res1=$cl->liste();
$vo=new Voiture();
$res2=$vo->liste();
$lo=new Locations;

if(isset($_POST['submit'])){
   //echo $_POST['idclient']." ".$_POST['idvoiture']." ".$_POST['nbjour']." ".$_POST['date'];
   $lo->insert($_POST['idclient'],$_POST['idvoiture'],$_POST['nbjour'],$_POST['date']); 
}



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
    <form action="" method="post">

        <fieldset>
            <legend>Nouvelle Location</legend>
            <tbody>
                <table>
                    <tr>
                        <td>client</td>
                        <td>
                            <select name="idclient" id="">
                                <option value="0" selected disabled>selectionner un client</option>
                                <?php foreach($res1 as $row){ ?>
                                <option value="<?= $row['idclient']?>"><?= $row['nom'] .$row['prenom'] ?></option>
                                <?php } ?>
                            </select>


                        </td>
                    </tr>
                    <tr>
                        <td>voiture</td>
                        <td> <select name="idvoiture" id="">
                                <option value="0" selected disabled>selectionner un voiture</option>
                                <?php foreach($res2 as $row1){ ?>
                                <option value="<?= $row1['idvoiture']?>">
                                    <?= $row1['marque'] .'('. $row1['numserie'].')' ?>
                                </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td><input type="date" name="date"></td>

                    </tr>
                    <tr>
                        <td>Nombre de jour</td>
                        <td><input type="number" name="nbjour" id="" value=""> </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="send"></td>
                    </tr>
                </table>
            </tbody>
        </fieldset>
    </form>
</body>

</html>