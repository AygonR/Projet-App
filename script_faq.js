const allCross = document.querySelectorAll('.visible-pannel img');
console.log(allCross);


allCross.forEach(element => {

    element.addEventListener('click', function(){

        const height = this.parentNode.parentNode.childNodes[3].scrollHeight;

        const currentChoice = this.parentNode.parentNode.childNodes[3];

        // console.log(this.src);

        if(this.src.includes('croix')){
            this.src = 'moins.png';
            gsap.to(currentChoice, {duration: 0.2, height: height + 40, opacity: 1, padding: '20px 15px'})
        } else if (this.src.includes('moins')){
            this.src = 'croix.png';
            gsap.to(currentChoice, {duration: 0.2, height: 0, opacity: 0, padding: '0px 15px'})
        }

    })

})


document.getElementById('formu').addEventListener('submit', function(event) {
    event.preventDefault(); //On empêche l'envoi
    //On récupère le contenu du champ
    var message = document.getElementById('query').value;
    //On vérifie si le champ est vide
    if (!message.trim()) {
        return; //On arrête l'exécution de la fonction si le champ est vide
    }
    //On crée une nouvelle div pour la bannière
    var banner = document.createElement('div');
    banner.className = 'banner'
    //On applique le contenu de la bannière
    var message = document.getElementById('message').textContent;
    banner.textContent = message;
    banner.style.backgroundColor = 'rgba(41, 122, 0, 0.5)';
    banner.style.color = "white";
    banner.style.position = 'fixed';
    banner.style.bottom = '0';
    banner.style.width = '100%';
    banner.style.padding = '10px';
    banner.style.textAlign = 'center';
    banner.style.fontSize = '40px';
    // On attache la bannière au body
    document.body.appendChild(banner);
    // On retire la bannière après 5 secondes
    setTimeout(function() {
        banner.style.animation = 'slideOut 1s forwards';
        setTimeout(function() {
            document.body.removeChild(banner);
    }, 1000);
    }, 6000);;
    // Retarder le reset de 3 secondes
    setTimeout(function() {
        this.reset();
    }.bind(this), 200); // 'this' est lié à la fonction pour conserver le contexte de l'élément du formulaire
    


document.getElementById('query').addEventListener('focus',function(){this.placeholder = '';})
document.getElementById('query').addEventListener('blur',function(){
    if(this.value ===''){
        this.placeholder = 'Saisissez votre question';
    }
})}) 


document.getElementById("myButton1").addEventListener("click", function() {
    window.location.href = "https://fr.linkedin.com/school/institut-sup%C3%A9rieur-d'electronique-de-paris/"; // Remplacez "nouvelle_page.html" par le chemin de la nouvelle page
});

document.getElementById("myButton2").addEventListener("click", function() {
    window.location.href = "https://www.instagram.com/isepparis/"; // Remplacez "nouvelle_page.html" par le chemin de la nouvelle page
});

document.getElementById("myButton3").addEventListener("click", function() {
    window.location.href = "https://fr-fr.facebook.com/ISEP.Paris/"; // Remplacez "nouvelle_page.html" par le chemin de la nouvelle page
});

    $(document).ready(function(){
        $("#formu").on("submit", function(event){
            event.preventDefault(); // Empêche le rechargement de la page
            var formData = new FormData(this);
            $.ajax({
                url: "q_posee.php", // L'URL de votre script PHP
                type: "post",
                data: formData, 
                processData: false,  // Indique à jQuery de ne pas traiter les données
                contentType: false   // Indique à jQuery de ne pas définir le type de contenu
            });
        });
    });
