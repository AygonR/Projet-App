<?php

include 'config.php';
session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Page d'accueil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="style1.css">

    <style>
        #input {
            border: 1px solid #ccc;
            border-radius: 4px;
            margin: 10px auto;
            display: block;
            width: 150px;
            box-sizing: border-box;
        }

        #p mark {
            background-color: rgba(101, 216, 255, 0.868);

            #userTable tr[style="display: none;"] {
                display: none !important;
            }
        }
    </style>
</head>

<body>

    <body>
        <div id="home">
            <header>
                <nav class="navbar">
                    <a class="logo">
                        <img src="logo_sonomorphia.png" alt="logo" class="logo-image" width="300" height="90">
                    </a>
                    <div>
                        <input type="text" id="input" onkeyup="searchTable();" placeholder="Rechercher...">
                    </div>
                    <div class="nav-links">
                        <ul>
                            <li class="active"><a href="#about">À PROPOS DE NOUS</a></li>
                            <li><a href="OutSound_presentation_fr.php">OUTSOUND</a></li>
                            <li><a href="page_faq.php">FAQ</a></li>
                            <li><a href="#contact" class="button1">NOUS CONTACTER</a></li>
                            <li><a href="login.php">CONNEXION</a></li>
                            <li><a href="register.php">INSCRIPTION</a></li>
                            <li><a href="Home1.php">EN</a></li>
                        </ul>
                    </div>
                    <img src="menu-btn.png" , alt="liste deroulante menu" class="menu-hamburger">
                </nav>
            </header>

            <div id="home1">
                <div class="div-banniere">
                    <img src="banniere-fr.png" alt="fond" width="100%" height="100%">
                </div>
            </div>

            <!-- About Section -->
            <div id="about">
                <h1 style="text-align: center;">À PROPOS DE NOUS</h1>
                <h3 style="text-align: center;">Notre identité et nos valeurs</h3>
                <div class="conteneurs">
                    <div class="part">
                        <h4 style="text-align: center;">OutSound</h4>
                        <img src="headphones.png" class="align" width="115" height="104">
                        <p class="description" id="p"> Nous vous présentons notre produit phare : le casque sans fil OutSound à réduction de bruit. Chez SonoMoprhia, nous redéfinissons le paysage audio avec nos écouteurs de pointe qui allient harmonieusement technologie de pointe et design élégant. Plongez dans un univers sonore immersif, à l'abri des distractions du monde extérieur. Nos écouteurs sans fil sont dotés de fonctions avancées de réduction du bruit, ce qui vous permet de profiter de votre musique, de vos appels et de vos divertissements avec une clarté inégalée. Améliorez votre expérience audio grâce au mélange de performance et de sophistication propre à SonoMoprhia.
                        </p>
                        <button id="myButton">En savoir plus sur OutSound</button>
                        <script>
                            document.getElementById("myButton").addEventListener("click", function() {
                                window.location.href = "OutSound_presentation_fr.php";
                            });
                        </script>
                    </div>
                    <div class="part">
                        <h4 style="text-align: center;">Sérenité</h4>
                        <img src="feelcalmbg.png" class="align" width="115" height="104">
                        <p class="description" id="p"> Dans le monde rapide et bruyant dans lequel nous vivons, trouver des moments de sérénité est un luxe rare. Chez SonoMorphia, nous comprenons l'importance de la tranquillité dans votre vie. Nos produits ne se contentent pas de fournir des performances exceptionnelles ; ils sont conçus pour offrir un sanctuaire de paix au milieu du chaos. Plongez dans la sérénité d'un son ininterrompu de haute qualité qui vous transporte dans un royaume de calme avec OutSound. Nous pensons que la technologie ne doit pas seulement élever vos sens, mais aussi apporter la sérénité dans vos moments quotidiens.
                        </p>
                    </div>
                    <div class="part">
                        <h4 style="text-align: center;">Performance</h4>
                        <img src="perfbg.png" class="align" width="115" height="104">
                        <p class="description" id="p"> Chez SonoMorphia, nous sommes fiers de notre engagement inébranlable en faveur de l'excellence des performances. Notre technologie de pointe est méticuleusement conçue pour offrir une expérience audio inégalée. Nous nous efforçons d'établir de nouvelles références dans l'industrie, en veillant à ce que nos clients bénéficient d'un son cristallin, d'une connectivité robuste et de fonctions innovantes. Notre dévouement à la performance est la force motrice de chaque produit que nous créons, repoussant les limites de ce qui est possible dans le monde de la technologie audio.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Promo Section "Statistics" -->

            <div id="number">
                <h1 style="text-align: center;">CHIFFRES CLEFS</h1>
                <h3 style="text-align: center;">Depuis notre création...</h3>
                <div class="conteneur" id="bg">
                    <div class="partie" style="text-align: center;">
                        <p>+10</p>
                        <p id="p">Partenaires</p>
                    </div>
                    <div class="partie" style="text-align: center;">
                        <p>+98%</p>
                        <p id="p">Réduction de bruit</p>
                    </div>
                    <div class="partie" style="text-align: center;">
                        <p id="p">+89k</p>
                        <p>Clients satisfaits</p>
                    </div>
                    <div class="partie" style="text-align: center;">
                        <p id="p">+23</p>
                        <p id="p">Pays dans lequels nous sommes</p>
                    </div>
                </div>
            </div>





            <!-- Contact Section -->
            <div id="contact">
                <h1 style="text-align: center;">CONTACT</h1>
                <h3 style="text-align: center;">Restons en contact ! Envoyer nous un message :</h3>
                <div style="text-align: center;">
                    <form action="contacthome.php" method="post">
                        <p>
                            <input type="text" placeholder="Prénom" required name="Name"><br>
                            <input type=" text" placeholder="Nom" required name="Lastname"><br>
                            <input type=" text" placeholder="Email" required name="Email"><br> <!-- pattern=" [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"-->
                            <input type="text" placeholder="Objet" required name="Subject"><br>
                            <textarea placeholder="Message" required name="Message" rows="7"></textarea>
                        </p>
                        <button type="submit" class="envoyer-bouton" id="submitBtn">
                            Envoyer un message
                            <img src="avion1.png" alt="Avion en papier" width="20" height="20">
                        </button>
                    </form>
                </div>

                <div id="confirmationMessage" style="display: none; margin-top: 20px; background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px;">
                    Merci ! Votre message a été envoyé.
                </div>
            </div>

            <div style="position: relative; margin-top: 5vw;">
                <img src="localisation_SonoMorphia-Fr.png" style="width: 100%;" alt="Localisation SonoMorphia">
                <p id="p" style="position: absolute; top: 2%; left: 50%; transform: translate(-50%, -50%); font-weight: bold; font-size: 2vw; color: #ffffff;">
                    Paris, France <br>
                    Numéro: +(33) 1 78 93 33 57<br>
                    Email: hello@sonomorphia.com
                </p>
            </div>

        </div>



        <footer class="footer">
            <a href="#home" class="haut">Revenir en haut de la page</a>
            <div class="emoji-bar">
                <button class="image-button" id="myButton1">
                    <img class='tee' src="LinkIn.png" alt="Page_LinkedIn" width="30" height="23">
                </button>
                <script>
                    document.getElementById("myButton1").addEventListener("click", function() {
                        window.location.href = "https://fr.linkedin.com/school/institut-sup%C3%A9rieur-d'electronique-de-paris/";
                    });
                </script>
                <button class="image-button instagram-button" id="myButton2">
                    <img class='tee' src="Insta.png" alt="Page_Insta" width="30" height="23">
                </button>
                <script>
                    document.getElementById("myButton2").addEventListener("click", function() {
                        window.location.href = "https://www.instagram.com/isepparis/";
                    });
                </script>
                <button class="image-button" id="myButton3">
                    <img class='tee' src="FaceB.png" alt="Page_Facebook" width="30" height="23">
                </button>
                <script>
                    document.getElementById("myButton3").addEventListener("click", function() {
                        window.location.href = "https://fr-fr.facebook.com/ISEP.Paris/";
                    });
                </script>
            </div>
        </footer>

        </div>
        <script>
            const menuHamburger = document.querySelector(".menu-hamburger")
            const navLinks = document.querySelector(".nav-links")

            menuHamburger.addEventListener('click', () => {
                navLinks.classList.toggle('mobile-menu')
            })
        </script>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Function to check if the full name contains both numbers and characters
                function validateFullName() {
                    var fullNameInput = document.getElementById('Name', 'LastName');
                    var fullNameValue = fullNameInput.value;

                    // Regular expressions to check for characters and numbers
                    //var hasCharacters = /[a-zA-Z]/.test(fullNameValue);
                    //var hasNumbers = /\d/.test(fullNameValue);
                    var hasAlphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

                    // Check if both characters and numbers are present
                    if (!hasAlphabet) {
                        alert('Full name contains both characters and numbers. Submission not allowed.');
                        event.preventDefault();
                    }
                }
                // Adding event listener to the submit button
                var submitButton = document.getElementById('submitBtn');
                submitButton.addEventListener('click', validateFullName);

            });
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                function validateEmail() {
                    // Get the email input value
                    var email = document.getElementById('Email').value;

                    // Regular expression for email validation
                    var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                    // Check if the email matches the regex and satisfies the additional rule
                    if (email.match(emailRegex) && !email.startsWith('.') && !email.endsWith('.') && !email.includes('..')) {
                        // Valid email, allow form submission
                        return true;
                    } else {
                        // Invalid email, show an alert and prevent form submission
                        alert('Invalid email address. Please enter a valid email.');
                        return false;
                    }
                }

                // Adding event listener to the submit button
                var submitButton = document.getElementById('submitBtn');
                submitButton.addEventListener('click', validateFullName);
            });
        </script>

        <script>
            function submitForm() {
                document.getElementById("contactForm").style.display = "none";
                document.getElementById("confirmationMessage").style.display = "block";
            }
        </script>

        <script type="text/javascript">
            const p = document.getElementById("p");
            const special = /[\\[{().+*?|^$]/g;

            document.getElementById("input").addEventListener("input", function() {
                searchTable();
            });

            function searchTable() {
                let input = document.getElementById("input").value;

                if (input !== "") {
                    if (special.test(input)) input = input.replace(special, "\\$&");
                    let regExp = new RegExp(input, "gi");
                    p.innerHTML = p.textContent.replace(regExp, match => `<mark>${match}</mark>`);
                } else {
                    p.innerHTML = p.textContent;
                }
            }
        </script>
    </body>

</html>