<?php 
// require_once('./Etudiant.php'); 
// $us=new user(); 
// $res=$us->getuser($_GET['id']);
?>
<form name='f1' method='post' action='modification.php'>
    <table border='1'>

        <tr>
            <td>code etudiant</td>
            <td><input type="text" name="code" value="<?php echo $_GET['id'] ?>" /></td>
        </tr>

        <tr>
            <td>Nom etudiant</td>
            <td><input type="text" name="nom" value="" /></td>
        </tr>
        <tr>
            <td>prenom </td>
            <td><input type="text" name="prenom" value="" /></td>
        </tr>
        <tr>
            <td>classe </td>
            <td><input type="text" name="classe" value="" /></td>
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