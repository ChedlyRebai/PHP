<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</html>
<?php
require_once("../model/client.php");

$cl=new Client();

$res=$cl->liste();
?>

<form action='listeclient.php' method='post'>

    <?php
echo "<table border='1'> <tbody>";
if($res){
  {
    foreach($res as $row){
        ?>
    <tr>
        <td><input type="radio" name="r" value="<?= $row['idclient'] ?>"> </td>
        <td><?=   $row['idclient']?></td>
        <td><?=   $row['ncin']?></td>
        <td><?=   $row['nom']?></td>
        <td><?=   $row['prenom']?></td>
        <td><?=   $row['telephone']?></td>
    </tr>
    <?php
    }
  }
}
echo "</tbody></table>";
?>
    <input type='submit' name='supprimer' value='suprimer' />
</form>

<?php
if(isset($_POST['supprimer'])){
    $cl->delete($_POST['r']);
    header('Location:listeclient.php');
}


?>