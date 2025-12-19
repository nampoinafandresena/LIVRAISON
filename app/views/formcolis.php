<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  /* Reset et police moderne */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f9f9f9;
    padding: 20px;
}

/* Titre du formulaire */
h3 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 25px;
    font-weight: 600;
}

/* Style du formulaire */
form {
    max-width: 500px;
    margin: 0 auto;
    padding: 25px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style des labels */
form label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: #444;
}

/* Style des champs de saisie */
form input[type="text"],
form input[type="number"] {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

form input[type="text"]:focus,
form input[type="number"]:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
}

/* Style du bouton de soumission */
form input[type="submit"] {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
    font-weight: 600;
}

form input[type="submit"]:hover {
    background-color: #2980b9;
}

/* Espacement et alignement */
form > * {
    margin-bottom: 15px;
}

/* Responsive */
@media (max-width: 600px) {
    form {
        padding: 20px;
    }
}

</style>
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