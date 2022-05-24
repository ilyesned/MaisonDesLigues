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
        <a href="index.html"><img class="logo" src="./asset/8d6074851b4ded8fe9fc46e294bbff5f - Copie.png" alt=""></a>
        <h1>Films series TV et bien plus en illimite</h1>
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
        <fieldset class="form">
            <!-- A faire -->
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="email">N° de téléphone</label>
            <input type="tel" name="phone" id="phone" pattern="^0[1-9]{1}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}">
            <label for="preference">Quelle catégorie préférez-vous ?</label>
            <select name="preference" id="preference">
                <option value="">Poids Mouches (flyweight)</option>
                <option value="">Poids Coqs (bantamweight)</option>
                <option value="">Poids Plumes (featherweight)</option>
                <option value="">Poids Légers (lightweight)</option>
                <option value="">Poids Mi-Moyens (welterweight)</option>
                <option value="">Poids Moyens (middleweight)</option>
                <option value="">Poids Mi-Lourds (light heavyweight	)</option>
                <option value="">Poids Lourds (heavyweight)</option>
            </select>
            <!-- <label for="country">Pays</label>
            <select name="country" id="country">
                <option value="france">France</option>
                <option value="italie">Italie</option>
                <option value="algerie">Algérie</option>
            </select> -->
            <label for="city">Ville</label>
            <select name="city" id="city">
                <option value="paris">Paris</option>
                <option value="milan">Milan</option>
                <option value="Alger">Alger</option>
            </select>
        </fieldset>
        <section>
            <button type="submit">Cliquez ici pour envoyer</button>
        </section>
    </main>
    <footer>
        
    </footer>
</body>
</html>