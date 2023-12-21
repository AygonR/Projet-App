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


document.getElementById('monFormulaire').addEventListener('submit', function(event) {
    event.preventDefault(); //On empêche l'envoi

    //On récupère le contenu du champ
    var message = document.getElementById('monTxt').value;

    //On vérifie si le champ est vide
    if (!message.trim()) {
        return; //On arrête l'exécution de la fonction si le champ est vide
    }

    //On crée une nouvelle div pour la bannière
    var banner = document.createElement('div');

    //On applique le contenu de la bannière
    var message = document.getElementById('message').textContent;
    banner.textContent = message;

    banner.style.backgroundColor = 'rgba(198,255,170,0.8)';
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
        document.body.removeChild(banner);
    }, 5000);
    this.reset();
});

document.getElementById('monTxt').addEventListener('focus',function(){this.placeholder = '';})
document.getElementById('monTxt').addEventListener('blur',function(){
    if(this.value ===''){
        this.placeholder = 'Saisissez votre question';
    }
}); 
