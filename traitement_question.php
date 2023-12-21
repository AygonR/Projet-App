<!DOCTYPE html>
<html>
  <head>
    <title>Php bdd</title>  
    <meta charset="utf-8">
  </head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "outsound";
// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

//Vérifier la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 echo "Connected successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question = $_POST['question_posee'];

    // Préparer et lier
    $stmt = $conn->prepare("INSERT INTO formulaire (Question) VALUES (?)");
    $stmt->bind_param("s", $question);

    // Exécuter
    if ($stmt->execute() === TRUE) {
      echo "Question ajoutée avec succès";
  } else {
      echo "Error: " . $stmt->error;
  }
    echo "Question ajoutée avec succès";
    $stmt->close();
    $conn->close();
}
?>
</html>









