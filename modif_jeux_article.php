<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media_query.css">
    <title>GameSoft</title>
</head>
<body>
    <section class="haut_de_page">
        <div class="logo">
            <a href="accueil.html">
                <img src="./asset/logo.png" alt="logo">
            </a>
        </div>
        <div class="menu">
            <nav>
                <label for="toggle"><img src="./asset/menu.png" alt="menu"></label>
                <input type="checkbox" id="toggle">
                <div class="main_pages">
                    <a href="./accueil.html">Accueil</a>
                    <a href="./connexion.html">Se connecter</a>
                    <a href="./global_jeux.html">Tous les jeux vidéo</a>
                    <a href="#">Favori</a>
                    <a href="./global_articles.html">Tous les articles</a>
                </div>
            </nav>
        </div>
    </section>
    <section class="description_de_la_page">
        <p>Crée/modifier un article/jeux vidéo
        </p>
    </section>
    <section>
        <div>
            <form action="creation_contenu.php" method="POST">
                <input type="text" placeholder="Titre" name="titre" required>
                <input type="text" placeholder="Description" name="description" required>
                <input type="date" placeholder="date de création" name="date_de_creation" required>
                <input type="number" placeholder="nombre de joueur" name="nombre_de_joueur" required>
                <input type="text" placeholder="Gamesoft" name="Gamesoft" required>
                <input type="text" placeholder="Type de jeu" name="type_de_jeu" required>
                <input type="number" placeholder="Poids de dev" name="poids_de_dev">
                <input type="date" placeholder="date estimé de fin" name="date_fin" required>
                <input type="number" placeholder="budget" name="budget">
                <input type="text" placeholder="statut du jeu" name="statut_du_jeu" required>
                <input type="button" value="ajouter des images">
                <input type="button" value="créer l'article">
                <input type="button" value="créer le jeu">
            </form>
        </div>
    </section>
    <footer>
        <div class="mentions_obligatoire">
            <a href="nous_contacter.html">NOUS CONTACTER</a>
            <a href="mentions_legales.html">MENTIONS LEGALES</a>
            <a href="politique_de_confidentialite.html">POLITIQUE DE CONFIDENTALITE</a>
        </div>
        <div class="logo_reseaux">
            <img src="./asset/facebook-min.jpg" alt="faceboook">
            <img src="./asset/TIKTOK-min.jpg" alt="tiktok">
            <img src="./asset/twitter-min.jpg" alt="twitter">
            <img src="./asset/youtube-min.jpg" alt="youtube">
            <img src="./asset/linkedin-min.jpg" alt="linkedin">
        </div>
    </footer>
</body>
</html>
