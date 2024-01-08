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
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email != "" && $password != ""){
            //connexion de la bdd
            $req = $bdd->query("SELECT * FROM visiteurs WHERE email = '$email' AND mdp = '$password'");
            $rep = $req->fetch();
            if($rep['id'] != false){
            //c'est ok
                setCookie("username", $email, time() + 3600);
                setCookie("password", $password, time() + 3600);
                echo "vous êtes connecté avec vos accès :" .$_COOKIE['username'].' - '.$_COOKIE['password'];
                
                
                //header("Location: dashboard_visiteurs.html");
                exit();
            }
            else{
                echo "email ou mdp incorrect !";
            }
        }
    }
?>