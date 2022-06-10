<?php
    include_once "./src/header.inc.php";
    include_once "./src/connexion_bdd.inc.php";
?>
<body>
    <header>
        <ul class="menu">
            <li><a href="member.php">Espace</a></li>
            <li><a href="fighters.php">Combattants</a></li>
            <li><a href="categorie.php">Divisions</a></li>
            <li><a href="account.php">Compte</a></li>
            <li><a href="deconnexion.php">Deconnexion</a></li>
        </ul>
        <h1>Ultimate Fighting Championship</h1>
    </header>
    <main class="main">
        <section class="entete">
        <?php
            $_idUser = $_SESSION['id'];
            $_req = $bdd->prepare("SELECT * FROM users WHERE id = :idUser");
            $_req -> execute(array(
                'idUser' => $_idUser,
            ));
            while ($_donnees = $_req->fetchAll()) {

                foreach ($_donnees as $_user)
                {
                    print
                    '<h2> Modifier votre compte '.$_user['firstname'].' '.$_user['names'].'</h2>' .
                    '<form id="modification_user" class="modification_user" action="./src/modification_user.inc.php" method="post">'
                        .'<label for="firstname">Prénom</label>'
                        .'<input type="text" name="firstname" id="firstname" value="'.$_user['firstname'].'">'
                        .'<label for="names">Nom</label>'
                        .'<input type="text" name="names" id="names" value="'.$_user['names'].'">'
                        .'<label for="mail">Email</label>'
                        .'<input type="email" name="mail" id="mail" value="'.$_user['mail'].'">'
                        .'<label for="passwords">Mot de passe</label>'
                        .'<input type="password" name="passwords" id="passwords value="'.$_user['passwords'].'">'
                        .'<label for="phone">N° de téléphone</label>'
                        .'<input type="tel" name="phone" id="phone" value="'.$_user['phone'].'">'
                        .'<label for="fav">Catégorie favorite</label>'
                        .'<select name="fav" id="fav">
                            <option value="Poids Mouches (flyweight)">Poids Mouches (flyweight)</option>
                            <option value="Poids Coqs (bantamweight)">Poids Coqs (bantamweight)</option>
                            <option value="Poids Plumes (featherweight)">Poids Plumes (featherweight)</option>
                            <option value="Poids Légers (lightweight)">Poids Légers (lightweight)</option>
                            <option value="Poids Mi-Moyens (welterweight)">Poids Mi-Moyens (welterweight)</option>
                            <option value="Poids Moyens (middleweight)">Poids Moyens (middleweight)</option>
                            <option value="Poids Mi-Lourds (light heavyweight)">Poids Mi-Lourds (light heavyweight)</option>
                            <option value="Poids Lourds (heavyweight)">Poids Lourds (heavyweight)</option>
                        </select>'
                        .'<input type="submit" name="modifier" value="Modifier">'
                    .'</form>';
                }
            }
            
        ?>
        </section>
</body>