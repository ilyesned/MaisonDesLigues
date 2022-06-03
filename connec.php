<?php
    include_once "./src/header.inc.php";
?>
<body>
    <header>
        <ul class="menu">
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="fighters.php">Combattants</a></li>
            <li><a href="categorie.php">Divisions</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="connec.php">Connexion</a></li>
        </ul>
        <h1>Ultimate Fighting Championship</h1>
    </header>
    <main>
        <form id="connexion" class="connexion" action="#" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="passwords">Mot de passe</label>
            <input type="password" name="passwords" id="passwords">
            <button type="submit" name="connexion">Cliquez ici pour vous connecter</button>
        </form>
        <?php
        include_once "./src/connexion.inc.php";
        ?>
    </main>
    <footer>

    </footer>
</body>
</html>