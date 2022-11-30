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
        <legend>Nouveau client </legend>
        <form action="../model/ajoutclient_action.php" method="post">
            <table>
                <tbody>
                    <tr>
                        <td><label for="">numero de cin</label></td>
                        <td> <input type="text" name="ncin"></td>
                    </tr>
                    <tr>
                        <td><label for="">nom</label></td>
                        <td> <input type="text" name="nom"></td>
                    </tr>
                    <tr>
                        <td><label for="">prenom</label></td>
                        <td> <input type="text" name="prenom"></td>
                    </tr>
                    <tr>
                        <td><label for="">telephone</label></td>
                        <td> <input type="text" name="telephone"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Enregistrer" name="enregistrer"></td>
                        <td> <input type="reset" value="Annuler" name="annuler"></td>
                    </tr>

                </tbody>
            </table>
        </form>
    </fieldset>
</body>

</html>