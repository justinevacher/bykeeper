<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ByKeeper - Votre alarme connectée</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="img/fav.png" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/forms.css">
    </head>
    <body>
        <form class="modal-content" action="tableau-bord.html">
            <div class="formulaire">
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer un nom d'utilisateur" name="login" required>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer un mot de passe" name="mdp" required>
                <button type="submit">Connexion</button>
                <input type="checkbox" checked="checked"> Se souvenir de moi
            </div>
            <div class="footer-formulaire">
                <a href="index.html" class="btnAnnuler">Annuler</a>
                <span class="mdpOublie"><a href="#">Mot de passe oublié ?</a></span>
            </div>
        </form>
    </body>
</html>
        