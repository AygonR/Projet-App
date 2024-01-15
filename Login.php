<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outsound";


// Récupérer les valeurs du formulaire
$ue_nom = $_POST['ue_nom'];
$a_mail = $_POST['a_mail'];
$mdp = $_POST['mdp'];

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into ues(ue_nom, a_mail, mdp) values(?, ?, ?)");
    $stmt->bind_param("sss", $ue_nom, $a_mail, $mdp);
    $stmt->execute();
    echo "Profil enregistré...";
    $stmt->close();
    $conn->close();
}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="LoginStyles.css">
</head>

<body>

    <div class="login-container">
        <h2>Connexion</h2>
        <form action="/votre-page-de-traitement" method="post">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Se Connecter</button>
        </form>
        <p>Vous n'avez pas de compte ? <a href="register.html">S'Inscrire</a></p>
    </div>

</body>

</html>
