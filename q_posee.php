<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OutSound";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!";
}    

// Récupérer les valeurs du formulaire
$query = $_POST['query'];

if (isset($query)) {
    echo "<script type='text/javascript'>alert('$_POST[query] a été créé');</script>";
}

$stmt = $conn->prepare("INSERT INTO formulaire (question) values(?)");
$stmt->bind_param("s", $query);
$execval = $stmt->execute();

if ($execval) {
    echo "Question enregistrée...";
} else {
    echo "Erreur, nous n'avons pas pu enregistrer votre question : " . $stmt->error;
}

$stmt->close();
$conn->close();

?>








