<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once'vendor/autoload.php';  

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
$query = htmlspecialchars($_POST['query']);
$email = htmlspecialchars($_POST['email']);
$sono = "hellosonomorphia@outlook.com";

if (isset($query)) {
    echo "<script type='text/javascript'>alert('$_POST[query] a été créé');</script>";
}

$stmt = $conn->prepare("INSERT INTO formulaire (question) values(?)");
$stmt->bind_param("s", $query);
$execval = $stmt->execute();

if ($execval) {
    echo "Question enregistrée...";
    // Send email
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 
        $mail->isSMTP();                                      
        $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               
        $mail->Username = 'user@example.com';                 // SMTP username
        $mail->Password = 'secret';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            
        $mail->Port = 587; 

        //Recipients
        $mail->setFrom($email, 'Mailer');
        $mail->addAddress($sono, 'Joe User');     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Confirmation de la question';
        $mail->Body    = 'Une question a été enregistrée : ' . $query;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

} else {
    echo "Erreur, nous n'avons pas pu enregistrer votre question : " . $stmt->error;
}

$stmt->close();
$conn->close();

?>








