<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h3>Formulaire d'insertion de colis</h3>
      <form action="/colis/insert" method="post">
        <label for="description">Description: </label>
        <input type="text" name="description" id="description">
        <label for="poids">Poids: </label>
        <input type="number" name="poids" id="poids">
        <input type="submit" value="Ajouter">
      </form>
</body>
</html>