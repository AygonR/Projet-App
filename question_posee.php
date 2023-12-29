<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faq";


// Récupérer les valeurs du formulaire
$query = $_POST['query'];

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into question(query) values(?)");
    $stmt->bind_param("s", $query);
    $execval = $stmt->execute();

    if ($execval) {
        echo "Question enregistrée...";
    } else {
        echo "Erreur, nous n'avons pas pu enregistrer votre question : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
