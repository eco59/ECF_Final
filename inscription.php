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

    $requete = $bdd->prepare("INSERT INTO visiteurs VALUES (0, :mdp, :email)");
    $requete->execute(
        array(
            "mdp" => $mdp,
            "email" => $email
        )
    );
    echo "inscription réussie";
}
?>