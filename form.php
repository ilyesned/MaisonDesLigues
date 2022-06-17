<?php 
    include_once "./src/connexion_bdd.inc.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style_form.css">
    <title>Document</title>
</head>
<body>
    <header>
        <ul class="menu">
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="fighters.php">Combattants</a></li>
            <li><a href="categorie.php">Divisions</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="form.php">Inscription</a></li>
            <li><a href="connec.php">Connexion</a></li>
        </ul>
        <h1>Ultimate Fighting Championship</h1>
    </header>
    <main>
        <section class="vedette">
            <ul class="affiche">
                <li><img src="./asset/article_1.webp"  alt=""></li>
                <li><img src="./asset/article_2.webp"  alt=""></li>
                <li><img src="./asset/article_3.webp"  alt=""></li>
                <li><img src="./asset/article_4.webp"  alt=""></li>
                <!-- <li><img src="./asset/salto_ufc.gif" alt=""></li> -->
            </ul>
        </section>
        <form class="form" action="#" method="post">
            <!-- A faire -->
            <label for="names">Nom</label>
            <input type="text" name="names" id="names">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="passwords">Mot de passe</label>
            <input type="password" name="passwords" id="passwords">
            <label for="phone">N° de téléphone</label>
            <input type="tel" name="phone" id="phone">
            <label for="preference">Quelle catégorie préférez-vous ?</label>
            <select name="preference" id="preference">
                <option value="Poids Mouches (flyweight)">Poids Mouches (flyweight)</option>
                <option value="Poids Coqs (bantamweight)">Poids Coqs (bantamweight)</option>
                <option value="Poids Plumes (featherweight)">Poids Plumes (featherweight)</option>
                <option value="Poids Légers (lightweight)">Poids Légers (lightweight)</option>
                <option value="Poids Mi-Moyens (welterweight)">Poids Mi-Moyens (welterweight)</option>
                <option value="Poids Moyens (middleweight)">Poids Moyens (middleweight)</option>
                <option value="Poids Mi-Lourds (light heavyweight)">Poids Mi-Lourds (light heavyweight)</option>
                <option value="Poids Lourds (heavyweight)">Poids Lourds (heavyweight)</option>
            </select>
            <label for="city">Ville</label>
            <select name="city" id="city">
                <option value="paris">Paris</option>
                <option value="milan">Milan</option>
                <option value="Alger">Alger</option>
            </select>
        <section>
            <button type="submit" name="envoyer">Cliquez ici pour envoyer</button>
        </section>
        </form>
        <?php
        include_once "./src/traitement.inc.php";
        ?>
    </main>
    <footer>
        
    </footer>
</body>
</html>