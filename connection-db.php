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
