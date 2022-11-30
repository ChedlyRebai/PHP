<html lang="en"><head>
    <title>Document</title>
  </head>
  <body>
    <fieldset>
      <legend>
        <h1>Rechercher un Livre</h1>
      </legend>
      <p>Veuiller remplir les champs suivants:</p>
      <form method="post" action="./rechercheLivre_action.php">
        <table>
          <tbody><tr>
            <td><label for="classe">Critère</label></td>
            <td>
              <select name="champ">
                <option value="code_livre">Code</option>
                <option value="titre">Titre</option>
                <option value="auteur">Auteur</option>
                <option value="date">date</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="valeur">Valuer</label></td>
            <td><input type="text" id="valeur" name="valeur"></td>
          </tr>
          <tr>
            <td>
              <input type="reset" name="reset" value="Anuller">
              <input type="submit" name="submit" value="Rechercher">
            </td>
          </tr>
        </tbody></table>
      </form>
    </fieldset>
  

</body></html>