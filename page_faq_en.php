<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Outsound";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} else {
//    echo "Connection successful!";
//}  
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
    <title>Sonomorphia | Q&A and recurring questions</title>
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
                <button class="connexion"><a href="Login.html">Log in</a></button>
                <button class="connexion"><a href="Register.html">Sign in</a></button>
            </div>
        </div>
    </header>
    <h2>Do you have a question ? Welcome on our Q&A ! </h1><!--<span class="highlight"> </span>-->
    <div class="container-faq">
        <div class="questions">
            <div class="visible-pannel">
                <h3>What's the average battery life of OutSound ?</h2>
                <img src="croix.png" alt="croix animation">
            </div>
            <div class="toggle-pannel">
                <h4>Team's answer</h4>
                <p>The average battery life of our product is 4-5 hours.</p>
            </div>
        </div>
        <div class="questions">
            <div class="visible-pannel">
                <h3>How much time do I have to return the product after receiving it?</h2>
                <img src="croix.png" alt="croix animation">
            </div>
            <div class="toggle-pannel">
                <h4>Team's answer</h4>
                <p>You have up to 2 weeks to return the product after it's been delivered.</p>
            </div>
        </div>
        <div class="questions">
            <div class="visible-pannel">
                <h3>What are the metro lines on which the product functions ?</h2>
                <img src="croix.png" alt="croix animation">
            </div>
            <div class="toggle-pannel">
                <h4>Team's answer</h4>
                <p>We've conceived OutSound to work on all metro lines in the country, but the customizations allow you to precisely adapt the attenuation to the line you're on.</p>
            </div> 
        </div>
    </div>
    <div class = "interaction">
        <p>You've got another question than the ones above ?</p>
        <div class="input-container">
            <form action="q_posee.php" method="post" id="formu" name ="q_posee">
                <label for="query">Enter your question :</label>
                <input type="text" id="query" placeholder='Write your question' name="query" required>
                <input type="submit" value="Envoyer">
            </form>
        </div>
        <div id="message">We've received your question, you'll get your answer as soon as possible !</datagrid>
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
