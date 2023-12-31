<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

// Récupérer les valeurs du formulaire
$firstname = $_POST['Name'];
$lastname = $_POST['Lastname'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO contacting(firstname, lastname, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $email, $subject, $message);
    $execval = $stmt->execute();

    if ($execval) {
        echo "Votre message a été réceptionné...";
        header('location:messageok.php');
    } else {
        echo "Erreur, nous n'avons pas pu réceptionner votre message : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
