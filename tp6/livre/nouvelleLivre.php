<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <fieldset>
      <legend><h1>Nouveau Livre</h1></legend>
      <h3>Veuiller remplir les champs suivants:</h3>
      <form method="post" action="./nouveauLivre_action.php">
        <table>
          <tbody><tr>
            <td><label for="code">Code</label></td>
            <td><input type="text" id="code" name="code"></td>
          </tr>
          <tr>
            <td><label for="titre">Titre</label></td>
            <td><input type="text" id="titre" name="titre"></td>
          </tr>
          <tr>
            <td><label for="auteur">Auteur</label></td>
            <td><input type="text" id="auteur" name="auteur"></td>
          </tr>
          <tr>
            <td><label for="date">Date</label></td>
            <td><input type="date" id="date" name="date"></td>
          </tr>
           <tr>
            
            <td>  <input type="reset" name="reset" value="Anuller"></td>
           <td>   <input type="submit" name="submit" value="Enregistrer"></td>
            
          </tr>
        </tbody></table>
      </form>
    </fieldset>
  

</body></html>