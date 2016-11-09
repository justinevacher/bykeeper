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
        <form class="modal-content" action="index.html">
            <section class="row">
                <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer un nom d'utilisateur" name="login" required>
                    <label><b>Adresse mail</b></label>
                    <input type="email" placeholder="Entrer une adresse mail" name="mail" required>
                    <label><b>Numéro de téléphone</b></label>
                    <input type="tel" placeholder="Entrer un numéro de téléphone" name="login" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" required>
                </section>
                <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer un mot de passe" name="mdp" required>
                    <input type="password" placeholder="Renseigner une nouvelle fois le mot de passe" name="mdpConfirm" required>
                    <label><b>Numéro d'identification du boîtier</b></label>
                    <input type="text" placeholder="Entrer le numéro fourni avec le boîtier Keeper" name="numBoitier" required>
                </section>
            </section>
            <section class="row">
                <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="g-recaptcha" data-sitekey="6Ldw2goUAAAAAEAUpMSSiYblcX-Mnytjs2mhBSye"></div>
                    <input type="checkbox" required> En cochant cette case, vous acceptez les <a href="#">Conditions d'Utilisation</a> du boîtier Keeper
                    <button type="submit">Inscription</button>
                    <a href="index.html" class="btnAnnuler">Annuler</a>
                </section>
             </section>
        </form>
    </body>
</html>