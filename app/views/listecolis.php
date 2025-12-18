<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Description</td>
            <td>Poids</td>
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