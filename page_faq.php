<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Outsound";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_faq.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,h1,h2,h3,h4,p,#myButton, .connexion {font-family: "Raleway", sans-serif}
    </style>
    <title>Sonomorphia | FAQ et Questions Récurrentes </title>
</head>
<body>
    <header>
        <div class = "conteneur" id="home">
            <div class="partie1">
                <a href="accueil.html">
                <img src="logo_sonomorphia.png" alt="logo" class="logo-image" width="370" height="70">
                </a>
            </div>
            <div class="partie3">                                                                                                                         
                <button class="connexion"><a href="Login.html">Connexion</a></button>
                <button class="connexion"><a href="Register.html">S'inscrire</a></button>
                <button alt="EN" class="connexion"><a href="page_faq_en.php">ENG</a></button>
            </div>
        </div>
    </header>
    <h2>Vous avez des questions ? Bienvenue sur la FAQ !</h2><!--<span class="highlight"> </span>-->
    <div class="container-faq">
        <div class="questions">
            <div class="visible-pannel">
                <h3>Quelle est l'autonomie moyenne d'OutSound ?</h3>
                <img src="croix.png" alt="croix animation">
            </div>
            <div class="toggle-pannel">
                <h4>Réponse de l'équipe</h4>
                <p>L'autonomie prévue avec une utilisation normale du produit est de 4 à 5 heures.</p>
            </div>
        </div>
        <div class="questions">
            <div class="visible-pannel">
                <h3>Quelle est la période de retour du produit après récéption ?</h2>
                <img src="croix.png" alt="croix animation">
            </div>
            <div class="toggle-pannel">
                <h4>Réponse de l'équipe</h4>
                <p>La période de retour du produit s'élève à 2 semaines après réception du colis.</p>
            </div>
        </div>
        <div class="questions">
            <div class="visible-pannel">
                <h3>Quelles sont les lignes prises en charge par l'appareil en fonctionnement ?</h2>
                <img src="croix.png" alt="croix animation">
            </div>
            <div class="toggle-pannel">
                <h4>Réponse de l'équipe</h4>
                <p>Nous avons conçu OutSound pour qu'il fonctionne sur l'ensemble des lignes de métros du territoire, les personnalisations permettent néanmoins d'adapter très précisément l'atténuation à la ligne en question.</p>
            </div>
        </div>
    </div>
    <div class="interaction">
        <p>Vous avez une question autre que celles ci-desssus ?</p>
        <div class="input-container">
            <form action="q_posee.php" method="post" id="formu" name ="q_posee">
                <label for="query">Saisissez votre question :</label>
                <input type="text" id="query" placeholder='Entrez votre question' name="query" required>
                <br>
                <label for="email">Votre adresse email :</label>
                <input type="email" id="email" placeholder='Entrez votre email' name="email" required>
                <input type="submit" value="Envoyer">
            </form>
        </div>
        <div id="message">Nous avons bien reçu votre question, vous recevrez une réponse dans les plus brefs délais !</datagrid>
        </div>
    </div>
    <div class="emoji-bar">
        <button class="image-button" id="myButton1">
            <img class='tee' src="LinkIn.png" alt="Page_LinkedIn" width="30" height="23">
        </button>
        <button class="image-button instagram-button" id="myButton2">
            <img class='tee' src="Insta.png" alt="Page_Insta" width="30" height="23">
        </button>
        <button class="image-button" id="myButton3">
            <img class='tee' src="FaceB.png" alt="Page_Facebook" width="30" height="23">
        </button>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>
<script src="script_faq.js"></script>
</html>
