(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-86548692-1','auto');ga('send','pageview');


$(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
    });

    var nav = document.querySelector("nav");
    function scrolled() {
        var windowHeight = document.body.clientHeight, currentScroll = document.body.scrollTop || document.documentElement.scrollTop;
        nav.className = (currentScroll >= windowHeight + 50 - nav.offsetHeight) ? "fixed" : "";
    }
    addEventListener("scroll", scrolled, false);
});

    function afficherFenetre(idFenetre) {
        document.getElementById(idFenetre).style.visibility = 'visible';
    }


