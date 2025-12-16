<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - E-commerce</title>
    <link rel="stylesheet" href="assets/css/styles.css">
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
        <h1>Bienvenue sur notre boutique</h1>
        <section class="product-list">

        <?php 
            
            // var_dump($produits);
            foreach ($produits as $p) {
            
            ?>
                
            <article class="product-card">
                <a href="/produit/<?= $p['id']?>">
                    <img src="assets/image/<?= $p['img']?>" alt="Produit 1">
                    <h2><?= $p['name_product']?></h2>
                    <p>Prix : <?= $p['prix']?> Ar</p>
                </a>
            </article>
            <?php
            }
        ?>
            <!-- <article class="product-card">
                <a href="/produit">
                    <img src="assets/images/2.jpg" alt="Produit 1">
                    <h2>Produit 1</h2>
                    <p>Prix : 160 000Ar</p>
                </a>
            </article>
            <article class="product-card">
                <a href="/produit">
                    <img src="assets/images/3.jpg" alt="Produit 1">
                    <h2>Produit 1</h2>
                    <p>Prix : 160 000Ar</p>
                </a>
            </article>
            <article class="product-card">
                <a href="/produit">
                    <img src="assets/images/1.jpg" alt="Produit 1">
                    <h2>Produit 1</h2>
                    <p>Prix : 160 000Ar</p>
                </a>
            </article>
            <article class="product-card">
                <a href="/produit">
                    <img src="assets/images/1.jpg" alt="Produit 1">
                    <h2>Produit 1</h2>
                    <p>Prix : 160 000Ar</p>
                </a>
            </article>
            <article class="product-card">
                <a href="/produit">
                    <img src="assets/images/1.jpg" alt="Produit 1">
                    <h2>Produit 1</h2>
                    <p>Prix : 160 000Ar</p>
                </a>
            </article>
            <article class="product-card">
                <a href="/produit">
                    <img src="assets/images/1.jpg" alt="Produit 1">
                    <h2>Produit 1</h2>
                    <p>Prix : 160 000Ar</p>
                </a>
            </article>
            <article class="product-card">
                <a href="/produit">
                    <img src="assets/images/1.jpg" alt="Produit 1">
                    <h2>Produit 1</h2>
                    <p>Prix : 160 000Ar</p>
                </a>
            </article>
            <article class="product-card">
                <a href="/produit">
                    <img src="assets/images/1.jpg" alt="Produit 1">
                    <h2>Produit 1</h2>
                    <p>Prix : 160 000Ar</p>
                </a>
            </article>
            <article class="product-card">
                <a href="/produit">
                    <img src="assets/images/1.jpg" alt="Produit 1">
                    <h2>Produit 1</h2>
                    <p>Prix : 160 000Ar</p>
                </a>
            </article> -->
            <!-- Ajoutez d'autres produits ici -->
        </section>
    </main>
    <footer>
        <p>&copy; 2025 E-Varotra</p>
    </footer>
</body>
</html>