// recuperer un element html
// a- recuperer un element par son id : document.methode(document.getElementById('id'))
let loader = document.getElementById('load')
let news = document.getElementById('news');
let message = document.getElementById('msg');
let email = document.querySelector("input[name='email']");
console.log(email);
// ecouter un evenement lié au formulaire(addEventListener)
news.addEventListener('submit',function(e){
	//gestionnaire d'evenement qui annule le comportement par defaut
	e.preventDefault();
	//disparition du formulaire
	this.classList.add('d-none');
	console.log(this)
	//apparition du loader
	loader.classList.replace('d-none','d-block');
	// afficher le msg 3s apres
	setTimeout(function(){ 
		loader.classList.replace('d-block','d-none');
		message.textContent = 'Merci d’avoir souscrit à notre newsletter.'
	}, 3000);
});
//validation de l'email
email.addEventListener('input', function(){
	let erreur = this.nextSibling;
	let regex = /^[a-z]+([0-9]+)?[@][a-z]{2,6}[.][a-z]{2,5}/;
	let regex1 = regex.test(this.value, regex);
	console.log(regex1);
	if(regex1 == false){
	 erreur.classList.replace('d-none','d-block');
	 erreur.textContent = 'Erreur de saisie';
	}
	else{
	  erreur.classList.replace('d-block','d-none')
	}
	console.log(regex1)
});
