<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        /* Reset et police moderne */
/* Reset et police moderne */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f9f9f9;
    padding: 20px;
}

/* Titre de la page */
h3 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 20px;
    font-weight: 600;
}

/* Style de la table */
table {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    border-collapse: collapse;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    background-color: white;
}

/* En-tête du tableau */
table tr:first-child {
    background-color: #3498db;
    color: white;
}

table tr:first-child td {
    padding: 14px 16px;
    text-align: left;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.9em;
    letter-spacing: 0.5px;
}

/* Lignes du tableau */
table tr {
    border-bottom: 1px solid #eaeaea;
    transition: all 0.2s ease;
}

table tr:last-child {
    border-bottom: none;
}

table tr:hover {
    background-color: #f0f8ff;
}

/* Cellules du tableau */
table td {
    padding: 12px 16px;
    text-align: left;
}

/* Alternance des couleurs de ligne */
table tr:nth-child(even) {
    background-color: #f8f9fa;
}

/* Style pour la première colonne (ID) */
table tr td:first-child {
    font-weight: 600;
    color: #3498db;
}

/* Style pour les liens d'action */
table td a {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9em;
    transition: all 0.2s ease;
}

table td a:first-child {
    background-color: #27ae60;
    color: white;
}

table td a:first-child:hover {
    background-color: #219653;
}

table td a:last-child {
    background-color: #e74c3c;
    color: white;
}

table td a:last-child:hover {
    background-color: #c0392b;
}

/* Responsive : adaptation aux petits écrans */
@media (max-width: 768px) {
    table {
        display: block;
        overflow-x: auto;
    }
}


    </style>
<body>
    <h3>Historique des livraisons en attente</h3>
    <table>
        <tr>
            <td></td>
            <td>Colis</td>
            <td>Entrepot</td>
            <td>Destination</td>
            <td>Chauffeur</td>
            <td>Vehicule</td>
            <td>Statut</td>
        </tr>
         <?php foreach($livraison as $l) { ?>
            <tr>
                <td><?=$l['id_livraison']?></td>
                <td><?=$l['colis']?></td>
                <td><?=$l['entrepot']?></td>
                <td><?=$l['destination']?></td>
                <td><?=$l['chauffeur']?></td>
                <td><?=$l['vehicule']?></td>
                <td><a href="/livraison/livrer/<?=$l['id_livraison']?>">Livrer</a></td>
                <td><a href="/livraison/annuler/<?=$l['id_livraison']?>">Annuler</a></td>
                
            </tr>
            <?php } ?>
    </table>
</body>
</html>