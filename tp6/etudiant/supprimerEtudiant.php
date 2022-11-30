

<?php


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
    <fieldset>
        <legend><h1>Supprimer Etudiant</h1></legend>
        
    <form action="./supprimerEtud_action.php" method="post">
        <table>  <h3>veuillez remplir les champs suivant;</h3>
        <tr>
            <td><label for="code">Code</label></td>
            <td><input type="text" name="codeE" id="code"></td>
        </tr> 
        <tr>
            <td><input type="button" name="annuler" value="annuler"></td>
            <td><input type="submit" name="executer" value="executer"></td>
        </tr>
        </table> 
    </fieldset>
    </form>
</body>
</html>