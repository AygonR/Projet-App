<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="css/style_enregistrer.css">
    <meta charset="UTF-8">
    <title>Confirmation de modification</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        p {
            font-family: "Raleway", sans-serif;
        }
    </style>
</head>

<body>
    <div class="message-container">
        <?php
        session_start(); // Assurez-vous de démarrer la session
        if (isset($_SESSION['username'])) {
            echo "Hello " . $_SESSION['username'] . "!";
        } else {
            echo "Hello!";
        }
        ?>
    </div>
</body>
<script>
    setTimeout(function() {
        window.location.href = "accueil.html";
    }, 3000);
</script>

</html>