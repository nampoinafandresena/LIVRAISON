
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil – Liste des véhicules</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 30px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #333;
            color: white;
        }
        tr:hover {
            background: #f9f9f9;
        }
    </style>
</head>
<body>

<h1>Liste des véhicules</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Numéro du véhicule</th>
    </tr>

    <?php foreach ($vehicules as $v) { ?>
        <tr>
            <td><?php echo $v['id_vehicule']; ?></td>
            <td><?php echo $v['immatriculation']; ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>
