<?php
session_start();
require 'config.php'; 

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE users_list SET lastname = ?, firstname = ?, adresse_livraison = ?, date_naissance = ?, numero_de_tel = ?, email = ?, image = ? WHERE email = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param('ssssssss', $_POST['lastname'], $_POST['firstname'], $_POST['adresse_livraison'], $_POST['date_naissance'], $_POST['numero_de_tel'], $_POST['email'], $_POST['image'], $_SESSION['email']);

    if ($stmt->execute()) {
        // Mettre à jour les informations de session
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['adresse_livraison'] = $_POST['adresse_livraison'];
        $_SESSION['date_naissance'] = $_POST['date_naissance'];
        $_SESSION['numero_de_tel'] = $_POST['numero_de_tel'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['image'] = $_POST['image'];

        $message = "Les modifications ont été enregistrées avec succès.";
    } else {
        $message = "Erreur lors de l'enregistrement des modifications : " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="styleTrans.css">
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
            font-family: "Raleway", sans-serif
        }
    </style>

</head>

<body>
    <div class="message-container">
        <h1><?php echo $message; ?></h1>
    </div>
    <script>
        setTimeout(function () {
            window.location.href = "Pageinfo.php";
        }, 5000);
    </script>
</body>

</html>
