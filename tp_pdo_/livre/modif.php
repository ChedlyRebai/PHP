<?php 
require_once('./livre.php'); 
$us=new user(); 
$res=$us->getuser($_GET['id']);
?>
<form name='f1' method='post' action='modification.php'>
    <table border='1'>

        <tr>
            <td>code livre</td>
            <td><input type="text" name="codelivre" value="<?php echo $res['id'] ?>" /></td>
        </tr>

        <tr>
            <td>titre</td>
            <td><input type="text" name="titre" value="" /></td>
        </tr>
        <tr>
            <td>auteur </td>
            <td><input type="text" name="auteur" value="" /></td>
        </tr>
        <tr>
            <td>date edition</td>
            <td><input type="text" name="dateedition" value="" /></td>
        </tr>
        <tr>
            <td>addresse </td>
            <td><input type="text" name="addresse" value="" /></td>
        </tr>
        <tr>
            <td><input type="submit" value="modifier" name="mod" /></td>
        </tr>
    </table>
</form>