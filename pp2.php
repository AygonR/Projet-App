<?php
session_start();
require 'config.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE users_list SET lastname = ?, firstname = ?, adresse_livraison = ?, date_naissance = ?, numero_de_tel = ?, email = ?, password = ?, image = ? WHERE email = ?";

    $stmt = $conn->prepare($sql);

    // Hashage du mot de passe avec md5
    $hashed_password = ($_POST['password']);

    $stmt->bind_param('sssssssss', $_POST['lastname'], $_POST['firstname'], $_POST['adresse_livraison'], $_POST['date_naissance'], $_POST['numero_de_tel'], $_POST['email'], $hashed_password, $_POST['image'], $current_email);

    if ($stmt->execute()) {
        echo "Les modifications ont été enregistrées avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement des modifications : " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset='UTF-8'>
    <title>Modifier le profil </title>
    <link rel='stylesheet' href='stylepp2.css'>
    <style>
        .edit-btn {
  background-color: rgb(218, 125, 218);
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.edit-btn:hover {
  background-color: rgb(218, 125, 218);
}
</style>
</head>

<body>
    <div class='form-container'>
        <h1>Modifier le profil</h1>
        <form method="post" action="update.php">
            <div class='form-group'>
                <label for='lastname'>Nom :</label>
                <input type='text' id='lastname' name='lastname' value='<?php echo $_SESSION['lastname']; ?>'>
            </div>
            <div class='form-group'>
                <label for='firstname'>Prénom :</label>
                <input type='text' id='firstname' name='firstname' value='<?php echo $_SESSION['firstname']; ?>'>
            </div>
            <!-- Ajoutez le reste de vos champs de formulaire ici, en utilisant la même méthode pour afficher les informations actuelles de l'utilisateur -->
            <div class='form-group'>
                <label for='date_naissance'>Date de naissance :</label>
                <input type='date' id='date_naissance' name='date_naissance' value='<?php echo $_SESSION['date_naissance']; ?>'>
            </div>
            <div class='form-group'>
                <label for='adresse_livraison'>Adresse de livraison :</label>
                <input type='text   ' id='adresse_livraison' name='adresse_livraison' value='<?php echo $_SESSION['adresse_livraison']; ?>'>
            </div>
            <div class='form-group'>
                <label for='numero_de_tel'>Numéro de téléphone :</label>
                <input type='tel' id='numero_de_tel' name='numero_de_tel' value='<?php echo $_SESSION['numero_de_tel']; ?>'>
            </div>
            <div class='form-group'>
                <label for='email'>Adresse email :</label>
                <input type='email' id='email' name='email' value='<?php echo $_SESSION['email']; ?>'>
                
            <div class='form-group'>
            <br>
                <label for='image'>Image :</label>
                <input type='file' id='image' name='image' value='<?php echo $_SESSION['image']; ?>'>
            </div>

            
            <a href='pp2_ENG.html' style='position: fixed; bottom: 0; right: 0;'>
                <img src='Ukflag.jpg' alt='French Flag' style='width: 50px;'>
            </a>
            <div class='form-group'>
                <input type='submit' value='Enregistrer les modifications'>
            </div>
        </form>
        </div>

        
        <button class="edit-btn" onclick="window.location = 'update_mdp.php'">Modifier le mot de passe</button>

            <script>
    function redirect() {
      ;
    }
  </script>
</body>

</html>
