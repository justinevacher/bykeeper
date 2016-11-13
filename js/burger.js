(function() {
  var body = document.body;
  var burgerMenu = document.getElementsByClassName('b-menu')[0];
  var burgerContain = document.getElementsByClassName('b-container')[0];
  var burgerNav = document.getElementsByClassName('b-nav')[0];

  

  burgerMenu.addEventListener('click', function toggleClasses() {
      if (typeof burgerEstOuvert == "undefined") { // Si la variable existe pas, on veut ouvrir le burger pour la première fois
      body.classList.add('open'); // Le burger était fermé, on l'ouvre
      burgerContain.classList.add('open'); 
      burgerNav.classList.add('open');
      burgerEstOuvert = true; // Au premier clic, on ouvre le burger
  } else {
    if(burgerEstOuvert == true){
      body.classList.remove('open'); // On supprime la classe d'ouverture
      burgerContain.classList.remove('open'); 
      burgerNav.classList.remove('open');

      body.classList.add('closeNav'); // Le burger était ouvert, on le ferme
      burgerContain.classList.add('closeNav'); 
      burgerNav.classList.add('closeNav');
      burgerEstOuvert = false;
    }else{
      body.classList.remove('closeNav'); // On supprime la classe de fermeture
      burgerContain.classList.remove('closeNav'); 
      burgerNav.classList.remove('closeNav');
      burgerEstOuvert = false;

      body.classList.add('open'); // Le burger était fermé, on l'ouvre
      burgerContain.classList.add('open'); 
      burgerNav.classList.add('open');
      burgerEstOuvert = true;
  }
}
  }, false);
})();