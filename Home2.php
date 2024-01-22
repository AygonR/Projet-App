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
    <div id="home">
        <header>
            <nav class="navbar">
                <a class="logo">
                    <img src="logo_sonomorphia.png" alt="logo" class="logo-image" width="300" height="90">
                </a>
                <div>
                    <input type="text" id="input" onkeyup="searchTable();" placeholder="Search...">
                </div>
                <div class="nav-links">
                    <ul>
                        <li class="active"><a href="#about">ABOUT US</a></li>
                        <li><a href="OutSound_presentation.php">OUTSOUND</a></li>
                        <li><a href="page_faq_en.php">FAQ</a></li>
                        <li><a href="#contact" class="button1">CONTACT US</a></li>
                        <li><a href="ur_profile.php">PROFILE</a></li>
                        <li><a href="Home1.php">LOG OUT</a></li>
                        <li><a href="AccueilFR2.php">FR</a></li>
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
            <h1 style="text-align: center;">ABOUT US</h1>
            <h3 style="text-align: center;">Our identity, our values</h3>
            <div class="conteneurs">
                <div class="part">
                    <h4 style="text-align: center;">OutSound</h4>
                    <img src="headphones.png" class="align" width="115" height="104">
                    <p id="p" class="description"> Introducing our flagship product: the OutSound wireless noise-canceling headphones. At SonoMoprhia, we're redefining the audio landscape with our cutting-edge headphones that harmoniously combine cutting-edge technology with elegant design. Immerse yourself in an immersive world of sound, free from the distractions of the outside world. Our wireless earphones feature advanced noise reduction functions, so you can enjoy your music, calls and entertainment with unrivalled clarity. Enhance your audio experience with SonoMoprhia's signature blend of performance and sophistication.
                    </p>
                    <button id="myButton">Learn more about OutSound</button>
                    <script>
                        document.getElementById("myButton").addEventListener("click", function() {
                            window.location.href = "OutSound_presentation_fr.php";
                        });
                    </script>
                </div>
                <div class="part">
                    <h4 style="text-align: center;">Serenity</h4>
                    <img src="feelcalmbg.png" class="align" width="115" height="104">
                    <p id="p" class="description"> In the fast-paced, noisy world we live in, finding moments of serenity is a rare luxury. At SonoMorphia, we understand the importance of tranquility in your life. Our products don't just deliver exceptional performance; they're designed to provide a sanctuary of peace in the midst of chaos. Immerse yourself in the serenity of uninterrupted, high-quality sound that transports you to a realm of calm with OutSound. We believe that technology should not only uplift your senses, but also bring serenity to your everyday moments.
                    </p>
                </div>
                <div class="part">
                    <h4 style="text-align: center;">Performance</h4>
                    <img src="perfbg.png" class="align" width="115" height="104">
                    <p id="p" class="description">At SonoMorphia, we pride ourselves on our unwavering commitment to performance excellence. Our cutting-edge technology is meticulously engineered to deliver an unparalleled audio experience. We strive to set new industry benchmarks, ensuring that our customers benefit from crystal-clear sound, robust connectivity and innovative features. Our dedication to performance is the driving force behind every product we create, pushing the boundaries of what's possible in the world of audio technology.
                    </p>
                </div>
            </div>
        </div>

        <!-- Promo Section "Statistics" -->

        <div id="number">
            <h1 style="text-align: center;">KEY FIGURES</h1>
            <h3 style="text-align: center;">Since our creation...</h3>
            <div class="conteneur" id="bg">
                <div class="partie" style="text-align: center;">
                    <p>+10</p>
                    <p id="p">Partners</p>
                </div>
                <div class="partie" style="text-align: center;">
                    <p>+98%</p>
                    <p id="p">Sound reduction</p>
                </div>
                <div class="partie" style="text-align: center;">
                    <p>+89k</p>
                    <p id="p">Satsfied clients</p>
                </div>
                <div class="partie" style="text-align: center;">
                    <p>+23</p>
                    <p id="p">Countries in which we operate</p>
                </div>
            </div>
        </div>





        <!-- Contact Section -->
        <div id="contact">
            <h1 style="text-align: center;">CONTACT</h1>
            <h3 style="text-align: center;">Let's get in touch ! Send us a message :</h3>
            <div style="text-align: center;">
                <form action="contacthome.php" method="post">
                    <p>
                        <input type="text" placeholder="Name" required name="Name"><br>
                        <input type=" text" placeholder="Lastname" required name="Lastname"><br>
                        <input type=" text" placeholder="Email" required name="Email"><br> <!-- pattern=" [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"-->
                        <input type="text" placeholder="Objet" required name="Subject"><br>
                        <textarea placeholder="Message" required name="Message" rows="7"></textarea>
                    </p>
                    <button type="submit" class="envoyer-bouton" id="submitBtn">
                        Send a message
                        <img src="avion1.png" alt="Avion en papier" width="20" height="20">
                    </button>
                </form>
            </div>

        </div>

        <div style="position: relative; margin-top: 20px;">
            <img src="localisation_SonoMorphia.png" style="width: 100%;" alt="Localisation SonoMorphia">
            <p id="p" style="position: absolute; top: 90%; left:12%; transform: translate(-50%, -50%); font-weight: bold; font-size: 23px; color: #ffffff;">
                Washington D.C., États-Unis <br>
                Phone: +(703) 879-7725 <br>
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