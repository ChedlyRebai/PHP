

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
        <legend><h1>Modifier Etudiant</h1></legend>
        <p>veuillez remplir les champs suivant;</p>
    <form action="./modifierEtud_action.php" method="post">
        <table>  
        <tr>
            <td><label for="code">Code</label></td>
            <td><input type="text" name="code" id="code"></td>
        </tr>
        
        <tr>
            <td><label for="nom">Nom</label></td>
            <td> <input type="text" name="nom" id="nom"></td>
        </tr>

        <tr>
            <td><label for="prenom">Prenom</label></td>
            <td> <input type="text" name="prenom" id="prenom"></td>
        </tr>
        
        <tr>
            <td><label for="adresse">Adresse</label></td>
            <td><input type="text" name="adresse" id="adresse"></td>
        </tr>
        
        <tr>
            <td><label for="classe">Classe</label></td>
            <td> <input type="text" name="classe" id="classe"></td>
        </tr>
        <tr>
            <td><input type="button" name="annuler" value="annuler"></td>
            <td><input type="submit" name="modifier" value="modifier"></td>
        </tr>
        </table> 
    </fieldset>
    </form>
</body>
</html>