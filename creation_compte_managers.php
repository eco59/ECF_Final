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
                    <a href="./connexion.html">Se connecter</a>
                    <a href="./global_jeux.html">Tous les jeux vidéo</a>
                    <a href="#">Favori</a>
                    <a href="./global_articles.html">Tous les articles</a>
                </div>
            </nav>
        </div>
    </section>
    <section class="description_de_la_page">
        <p>Création de compte
        </p>
    </section>
    <section>
        <form action="" method="POST">
            <input type="text" id="email" name="email" placeholder="Entrer votre adresse mail"  required>
            <input type="password" id="pass" name="pass" placeholder="Entrer le mot de passe"  required>
            <input class="button" type="submit"value="creer" name="ok">
            <?php
        $servername = "localhost";
        $username = "root";
        $password = "";

        try{
            $bdd = new PDO("mysql:host=$servername;dbname=utilisateurs", $username, $password);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "connexion reussie !";
        }
        catch(PDOExeption $e){
            echo"Erreur : ".$e->getMessage();
        }
        // TOUT EST OK AU DESSUS
        if(isset($_POST['ok'])){
            $mdp = $_POST['pass'];
            $email = $_POST['email'];

            $requete = $bdd->prepare("INSERT INTO manager VALUES (0, MD5(:mdp), :email, '')");
            $requete->execute(
                array(
                    "mdp" => $mdp,
                    "email" => $email
                )
            );
            echo "inscription réussie";
        }
        ?>
        </div>
        </form>
        
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