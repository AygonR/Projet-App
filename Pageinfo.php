<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Profil Utilisateur</title>
  <link rel="stylesheet" href="stylepi.css">
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
<?php session_start(); ?>
  
  <?php
$image_url = 'uploaded_img/' . $_SESSION['image'];
$timestamp = time();
?>
<img class="profile-img" src="<?php echo $image_url . '?t=' . $timestamp; ?>" alt="Photo de profil">
  <div class="profile-container">
    <h1>Profil Utilisateur</h1>
    <p><strong>Nom :</strong> <?php echo $_SESSION['lastname']; ?></p>
    <p><strong>Prénom :</strong> <?php echo $_SESSION['firstname']; ?></p>
    <p><strong>Adresse de livraison :</strong> <?php echo $_SESSION['adresse_livraison']; ?></p>
    <p><strong>Date de naissance :</strong> <?php echo $_SESSION['date_naissance']; ?></p>
    <p><strong>Adresse email :</strong> <?php echo $_SESSION['email']; ?></p> 
    <p><strong>Numéro de téléphone :</strong> <?php echo $_SESSION['numero_de_tel']; ?></p>
    <button class="edit-btn" onclick="redirect()">Modifier les informations</button>
  </div>

  <script>
    function redirect() {
      window.location.href = "pp2.php";
    }
  </script>
  <a href="Pageinfo_EN.html" style="position: fixed; bottom: 0; right: 0;">
    <img src="Ukflag.jpg" alt="UK Flag" style="width: 50px;">
  </a>
</body>

</html>
