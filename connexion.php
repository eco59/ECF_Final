<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media_query.css">
    <link rel="stylesheet" href="./css/form.css">
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
                    <a href="./connexion.php">Se connecter</a>
                    <a href="./global_jeux.html">Tous les jeux vidéo</a>
                    <a href="#">Favori</a>
                    <a href="./global_articles.html">Tous les articles</a>
                </div>
            </nav>
        </div>
    </section>
    <section class="description_de_la_page se_connecter">
        <p>Se connecter
        </p>
    </section>
    <section>
        <div class="login">
        <form action="verification.php" method="POST">
            <input class="user" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
            <input class="mdp" type="password" placeholder="Entrer le mot de passe" name="password" required>
            <input class="button" type="submit" id="submit" value="Se connecter">
            <?php
        if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1 || $err==2)
        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
        </form>
        </div>
        <div class="inscription">
        <form action="verification.php" method="POST">
            <input class="mail" type="mail" placeholder="Entrer votre adresse mail" name="mail" required>
            <input class="mdp" type="password" placeholder="Entrer le mot de passe" name="password" required>
            <input class="button" type="submit" id="submit" value="S'inscrire">
            <?php
        if(isset($_GET['erreur'])){
        $err = $_GET['erreur'];
        if($err==1 || $err==2)
        echo "<p style='color:red'>Mail déjà utilisé</p>";
        }
        ?>
        </form>
        </div>
    </section>
    <section>
        <div class="reinit">
            <input class="button_rouge" type="submit" id="submit" value="Mot de passe oublié">
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
