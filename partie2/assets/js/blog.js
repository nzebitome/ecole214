// recuperer un element html
// a- recuperer un element par son id : document.methode(document.getElementById('id'))
let message = document.getElementById('msg');
let email = document.querySelector("input[name='email']");
let main = document.getElementsByTagName('main')[0];

// validation
let regex = /^[a-z]+([0-9]+)?[@][a-z]{2,6}[.][a-z]{2,5}/;

if(main.dataset.id == 'accueil'){

	let loader = document.getElementById('load')
	let news = document.getElementById('news');

	// ecouter un evenement lié au formulaire(addEventListener)
	news.addEventListener('submit',function(e){
		//gestionnaire d'evenement qui annule le comportement par defaut
		e.preventDefault();
		if(!email.value){
			erreur = email.nextElementSibling;
			erreur.classList.replace('d-none','d-block');
			erreur.textContent = 'Ce champs ne doit pas etre vide';
		}
		//disparition du formulaire
		else{

			this.classList.add('d-none');
			//apparition du loader
			loader.classList.replace('d-none','d-block');
			// afficher le msg 3s apres
			setTimeout(function(){ 
				loader.classList.replace('d-block','d-none');
				message.textContent = 'Merci d’avoir souscrit à notre newsletter.'
			}, 3000);
		}
	});
	//validation de l'email
	email.addEventListener('input', function(){
		let erreur = this.nextElementSibling;
		let regex1 = regex.test(this.value, regex);
		if(regex1 == false){
		 erreur.classList.replace('d-none','d-block');
		 erreur.textContent = 'Erreur de saisie';
		 this.classList.add('is-invalid')
		 news['envoyer'].setAttribute('disabled', '');
		}
		else{
		  erreur.classList.replace('d-block','d-none')
		  this.classList.add('is-valid');
		  news['envoyer'].removeAttribute('disabled');
		}
	});
}
// contact
else if (main.dataset.id == 'contact') {

		let formContact = document.forms[0];

	// ecouter un evenement lié au formulaire(addEventListener)

	formContact.addEventListener('submit',function(e){
		//gestionnaire d'evenement qui annule le comportement par defaut
		e.preventDefault();
		for(let valeur of this){
		if(!valeur.value){
			let erreur = valeur.nextElementSibling;
			erreur.classList.replace('d-none','d-block');
			erreur.textContent= 'champs obligatoire';
		}
		}
		
	

	});






	let regexNom =/^[A-Z]+([ A-Z]+)?[A-Z]$/;
	//recuperation du formulaire
	
	formContact['nom'].addEventListener('input', function(){
		let erreur = this.nextElementSibling;
		let regex2 = regexNom.test(this.value, regexNom);
		if(regex2==false){
			erreur.classList.replace('d-none','d-block');
			erreur.textContent= 'Erreur de saisie'
			this.classList.add('is-invalid')
		}
		else{
			erreur.classList.replace('d-block','d-none');
			this.classList.replace('is-invalid','is-valid');
		}
	});
	formContact['email1'].addEventListener('input', function(){
		let erreur = this.nextElementSibling;
		let regex3 = regex.test(this.value, regex);
		if(regex3==false){
			erreur.classList.replace('d-none','d-block');
			erreur.textContent= 'Erreur de saisie';
			this.classList.add('is-invalid');
		}
		else{
			erreur.classList.replace('d-block','d-none');
			this.classList.replace('is-invalid','is-valid');
		}
	});
}


console.log('message');
