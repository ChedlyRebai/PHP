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
        <legend><h1>Recherche Etudiant</h1></legend>
        <p>veuillez selectionner un critére de recherche</p>
    <form action="./rechercheEtud_action.php" method="post">
        <table>  
        <tr>
            <td><label for="valeur">critere</label></td>
            <td> <input type="text" name="valeur" id="critere"></td>
        </tr>
        <tr>
            <td><label for="champ">valeur</label></td>
            <td> 
            <select name="champ">
                <option value="CodeEtudiant">Code</option>
                <option value="Nom">Nom</option>
                <option value="Prenom">Prenom</option>
                <option value="Adresse">Adresse</option>
                <option value="classe">Classe</option>
              </select>
            </td>
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