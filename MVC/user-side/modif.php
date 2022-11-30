<?php
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
$res=$clientCtr->getClient($_GET['id']);
?>
<form name='f1' method='post' action='modification.php'>
    <table border='1'>
        <tr>
            <td>id</td>
            <td><input type="text" readonly name="id" value="<?= $res['idClient'] ?>" /></td>
        </tr>
        <tr>
            <td>Numéro cin</td>
            <td><input type="text" name="ncin" value="<?= $res['ncin'] ?>" /></td>
        </tr>
        <tr>
            <td>Nom</td>
            <td><input type="text" name="nom" value="<?= $res['nom'] ?>" /></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td><input type="text" name="prenom" value="<?= $res['prenom'] ?>" /></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td><input type="text" name="tel" value="<?= $res['telephone'] ?>" /></td>
        </tr>
        <tr>
            <td><input type="submit" value="modifier" name="mod" /></td>
        </tr>
    </table>
</form>