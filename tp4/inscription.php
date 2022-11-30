<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$num=$_POST['numero'];

$genre=$_POST['genre'];
echo $genre;

$niveau=$_POST['niveau'];
echo $niveau;
?>
<body>
    <form action="inscrire.php" method="post">
        <table>
            <tbody>
                <tr>
                    <td>numero</td>
                    <td><input type="text" name="numero" id=""></td>

                </tr>
                <tr>
                    <td>nom</td>
                    <td><input type="text" name="nom"></td>
                </tr>
                <tr>
                    <td>prenom</td>
                    <td><input type="text" name="prenom"></td>
                </tr>
                <tr>
                    <td>genre</td>
                    <td>
                        <input type="radio" id="html" name="genre" value="male">male
                        <input type="radio" id="html" name="genre" value="female">female
                    </td>
                </tr>
                <tr>
                    <td>Niveau scolaire</td>
                    <td><select name="niveau[]" id="">
                            <option value="7eme">7éme</option>
                            <option value="8eme">8éme</option>
                            <option value="9eme">9éme</option>
                        </select></td>
                </tr>
                <tr>
                    <td>condidat</td>
                    <td>
                        <input type="radio" id="" name="condidat" value="oui">oui
                        <input type="radio" id="" name="condidat" value="non">non
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="inscrire" value="inscrire">
                        <input type="submit" name="annuler" value="Annuler">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>