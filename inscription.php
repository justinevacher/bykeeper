<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ByKeeper - Votre alarme connectée</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/fav.png" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forms.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
    <form class="modal-content" action="verification.php">
        <div class="formulaire">
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer un nom d'utilisateur" name="login" required>
            <label><b>Adresse mail</b></label>
            <input type="email" placeholder="Entrer une adresse mail" name="mail" required>
            <label><b>Numéro de téléphone</b></label>
            <input type="tel" placeholder="Entrer un numéro de téléphone" name="login" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" required>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer un mot de passe" name="mdp" required>
            <input type="password" placeholder="Renseigner une nouvelle fois le mot de passe" name="mdpConfirm" required>
            <label><b>Numéro d'identification du boîtier</b></label>
            <input type="text" placeholder="Entrer le numéro fourni avec le boîtier Keeper" name="numBoitier" required>
            <div class="g-recaptcha" data-sitekey="6Ldw2goUAAAAAEAUpMSSiYblcX-Mnytjs2mhBSye"></div>
            <input type="checkbox" required> En cochant cette case, vous acceptez les <a href="#">Conditions d'Utilisation</a> du boîtier Keeper
            <button type="submit">Inscription</button>
        </div>
        <div class="footer-formulaire">
            <a href="vitrine.html" class="btnAnnuler">Annuler</a>
        </div>
    </form>
</body>
</html>