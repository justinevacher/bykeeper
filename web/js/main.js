(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-86548692-1','auto');ga('send','pageview');


function afficherFenetre(idFenetre) {
    document.getElementById(idFenetre).style.visibility = 'visible';
}

function afficherMenuProfil(){
    
    var liste = document.getElementById('menuProfil'); // récupération de l'<ul>
    var img = document.querySelector('section.col-xs-6:nth-child(1) > img:nth-child(1)');
    var arrow = document.getElementsByClassName('glyphicon');
    var profil = document.querySelector('section.col-xs-6:nth-child(1) > p:nth-child(2)');

    if (liste.className == 'profil')
    {
        liste.classList.remove('profil');
        img.src = 'img/Profil.svg';
        arrow[0].style.color='white';
        profil.style.color = 'white';
    }
    else 
    {
        liste.className='profil';
        img.src = 'img/profilBlue.svg';
        arrow[0].style.color='#72bbf9';
        profil.style.color = '#72bbf9';
    }

}
