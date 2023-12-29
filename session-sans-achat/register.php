<?php

include 'config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $select = mysqli_query($conn, "SELECT * FROM `users_list` WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'User already exists';
    } else {
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
        $insert = mysqli_query($conn, "INSERT INTO `users_list`(name, email, password) VALUES('$name', '$email', '$hashed_password')") or die('query failed');

        if ($insert) {
            $message[] = 'Registered successfully!';
            header('location:enregistrer.php');
        } else {
            $message[] = 'Registration failed!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="css/style_register.css">

</head>

<body>

    <div class="register-container">

        <form action="" method="post" enctype="multipart/form-data">
            <h2>Inscription</h2>
            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<div class="message">' . $message . '</div>';
                }
            }
            ?>

            <label for="username">Nom d'utilisateur :</label>
            <input type="text" name="name" placeholder="enter username" class="box" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" name="email" placeholder="enter email" class="box" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" placeholder="enter password" class="box" required>

            <button type="submit" name="submit" value="register now" class="btn">S'inscrire</button>

            <p>Vous avez déjà un compte ? <a href="login.php">Se connecter</a></p>
        </form>
    </div>

</body>

</html>