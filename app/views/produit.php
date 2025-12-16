<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit - E-commerce</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="/mini-template" class="logo">E-Varotra</a>
                <ul class="menu">
                    <li><a href="/mini-template">Accueil</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="product-detail">
            <?php 
            // var_dump($produit);
            ?>
            <img src="/assets/image/<?= $produit['img']?>" width="300" alt="<?= $produit['name_product']?>">
            <div class="info">
                <h1><?= $produit['name_product']?></h1>
                <p><?= $produit['descri']?></p>
                <p><strong>Prix :</strong> <?= $produit['prix']?> Ar</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 E-Varotra</p>
    </footer>
</body>
</html>