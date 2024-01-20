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

$stmt = $conn->prepare("INSERT INTO formulaire (question, mail_user) values(?, ?)");
$stmt->bind_param("ss", $query, $email);
$execval = $stmt->execute();

if ($execval) {
    echo "Question enregistrée...";
    // Send email
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'hellosonomorphia@outlook.com';                 // SMTP username
    $mail->Password = 'Adminsonosound';                           // SMTP password
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 
        $mail->isSMTP();                                      
        $mail->Host = 'smtp.outlook.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               
        $mail->SMTPSecure = 'tls';                            
        $mail->Port = 587; 

        //Recipients
        $mail->setFrom('hellosonomorphia@outlook.com', 'Sonomorphia');
        $mail->addAddress($email);     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contact - Sonomorphia';
        $mail->Body = 'Nous avons bien reçu votre message !</br>Pour rappel, vous nous avez envoyé : ' . $query . '</br>Nous vous répondrons dans les plus brefs délais !</br>L\'équipe Sonomorphia';

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

