(function() {
  var body = document.body;
  var burgerMenu = document.getElementsByClassName('b-menu')[0];
  var burgerContain = document.getElementsByClassName('b-container')[0];
  var burgerNav = document.getElementsByClassName('b-nav')[0];

  

  burgerMenu.addEventListener('click', function toggleClasses() {
    [body, burgerContain, burgerNav].forEach(function (el) {
      if (typeof burgerEstOuvert == "undefined") { // Test si variable existe => utile lors de la première initialisation
  		burgerEstOuvert = true; // Au premier clic, on ouvre le burger
	} else {
		if(burgerEstOuvert == true){
			el.classList.toggle('closeNav'); // Le burger était ouvert, on le ferme
			burgerEstOuvert = false;
		}else{
			el.classList.toggle('open'); // Le burger était fermé, on l'ouvre
			burgerEstOuvert = true;
	}
}
    });
  }, false);
})();