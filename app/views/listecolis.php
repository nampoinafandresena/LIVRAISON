<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset et police moderne */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f9f9f9;
    padding: 20px;
}

/* Style de la table */
table {
    width: 100%;
    max-width: 800px;
    margin: 20px auto;
    border-collapse: collapse;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    background-color: white;
}

/* En-tête du tableau */
table tr:first-child {
    background-color: #2c3e50;
    color: white;
}

table tr:first-child td {
    padding: 12px 15px;
    text-align: left;
    font-weight: 600;
}

/* Lignes du tableau */
table tr {
    border-bottom: 1px solid #e0e0e0;
    transition: background-color 0.2s ease;
}

table tr:last-child {
    border-bottom: none;
}

table tr:hover {
    background-color: #f1f9ff;
}

/* Cellules du tableau */
table td {
    padding: 12px 15px;
    text-align: left;
}

/* Alternance des couleurs de ligne pour une meilleure lisibilité */
table tr:nth-child(even) {
    background-color: #f8f9fa;
}

/* Effet de survol sur les lignes */
table tr:hover td {
    color: #2c3e50;
}

/* Responsive : adaptation aux petits écrans */
@media (max-width: 600px) {
    table {
        display: block;
        overflow-x: auto;
    }
}

    </style>
</head>
<body>
    <table>
        <tr>
            <td>Description</td>
            <td>Poids(kg)</td>
        </tr>
        <?php foreach($colis as $c) { ?>
            <tr>
                <td><?=$c['description']?></td>
                <td><?=$c['poids']?></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>