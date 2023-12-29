<?php

include 'config.php';
session_start();

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $select = mysqli_query($conn, "SELECT * FROM `users_list` WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        if (password_verify($pass, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header('location:home.php');
        } else {
            $message[] = 'Incorrect email or password!';
        }
    } else {
        $message[] = 'Incorrect email or password!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style_login.css">

</head>

<body>

    <div class="login-container">

        <form action="" method="post" enctype="multipart/form-data">
            <h2>Connexion</h2>
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                }
            }
            ?>
            <label for="email">Adresse e-mail :</label>
            <input type="email" name="email" placeholder="enter email" class="box" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" placeholder="enter password" class="box" required>

            <button type="submit" name="submit" value="login now" class="btn">Se connecter</button>

            <p>Vous n'avez pas de compte ? <a href="register.php">S'inscrire</a></p>
        </form>
    </div>
</body>

</html>