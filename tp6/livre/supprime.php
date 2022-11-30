<html lang="en"><head>
    
    <title>Document</title>
  </head>
  <body>
    <fieldset>
      <legend>
        <h1>Supprimer un Livre</h1>
      </legend>
      <p>Veuiller remplir les champs:</p>
      <form method="post" action="./supprimeLivre_action.php">
        <table>
          <tr>
            <td><label for="code">Code</label></td>
            <td><input type="text" id="code" name="code"></td>
          </tr>
          <tr>
            <td >
              <input type="reset" name="reset" value="Anuller">
              <input type="submit" name="submit" value="Executer">
            </td>
          </tr>
        </table>
      </form>
    </fieldset>
  

</body></html>