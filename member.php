<?php 
    include_once "./src/header.inc.php";
    include_once "./src/connexion_bdd.inc.php";
?>
<body>
    <header>
        <ul class="menu">
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="fighters.php">Combattants</a></li>
            <li><a href="categorie.php">Divisions</a></li>
            <li><a href="contact.php">Contact</a></li>
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
                    '<h2> Heureux de vous revoir '.$_user['firstname'].' '.$_user['names'].'</h2>' .
                    '<table class="table_user">'
                        .'<tr>'
                            .'<th>Nom</th>'
                            .'<th>Prénom</th>'
                            .'<th>Email</th>'
                            .'<th>Catégorie favorite</th>'
                        .'</tr>'
                        .'<tr>'
                            .'<td>'.$_user['names'].'</td>'
                            .'<td>'.$_user['firstname'].'</td>'
                            .'<td>'.$_user['mail'].'</td>'
                            .'<td>'.$_user['fav'].'</td>'
                        .'</tr>'
                    .'</table>';
                }
            }
        ?>
        </section>
        <section class="film">
            <ul class="grid-picture-large">
                <li data-image="./asset/flyweight_champ.png"
                data-title="Deiveson Figueiredo" 
                data-description="Actuel champion de la catégorie poids mouches de l'UFC" 
                data-dates="Début du reigne le 22 janvier 2022">
                    <figure>
                        <img src="./asset/flyweight_champ.png" alt="Deiveson Figueiredo">
                    </figure>
                </li>
                <li data-image="./asset/bantamweight_champ.png"
                data-title="Aljamain Sterling" 
                data-description="Actuel champion de la catégorie poids coqs de l'UFC" 
                data-dates="Début du reigne le 6 mars 2021">
                    <figure>
                        <img src="./asset/bantamweight_champ.png" alt="Aljamain Sterling">
                    </figure>
                </li>
                <li data-image="./asset/featherweight_champ.png"
                data-title="Alexander Volkanovski" 
                data-description="Actuel champion de la catégorie poids plumes de l'UFC" 
                data-dates="Début du reigne le 14 décembre 2019">
                    <figure>
                        <img src="./asset/featherweight_champ.png" alt="Alexander Volkanovski">
                    </figure>
                </li>
                <li data-image="./asset/lightweight_champ.png"
                data-title="Charles Oliveira" 
                data-description="Actuel champion de la catégorie poids légers de l'UFC" 
                data-dates="Début du reigne le 16 mai 2021">
                    <figure>
                        <img src="./asset/lightweight_champ.png" alt="Charles Oliveira">
                    </figure>
                </li>
                <li data-image="./asset/welteirweight_champ.png"
                data-title="Kamaru Usman" 
                data-description="Actuel champion de la catégorie poids mi-moyens de l'UFC" 
                data-dates="Début du reigne le 2 mars 2019">
                    <figure>
                        <img src="./asset/welteirweight_champ.png" alt="Kamaru Usman">
                    </figure>
                </li>
                <li data-image="./asset/middleweight_champ.png"
                data-title="Israël Adesanya" 
                data-description="Actuel champion de la catégorie poids moyens de l'UFC" 
                data-dates="Début du reigne le 5 octobre 2019">
                    <figure>
                        <img src="./asset/middleweight_champ.png" alt="Israël Adesanya">
                    </figure>
                </li>
                <li data-image="./asset/light-heavyweight_champ.png"
                data-title="Glover Teixeira" 
                data-description="Actuel champion de la catégorie poids mi-lourds de l'UFC" 
                data-dates="Début du reigne le 30 octobre 2021">
                    <figure>
                        <img src="./asset/light-heavyweight_champ.png" alt="Glover Teixeira">
                    </figure>
                </li>
                <li data-image="./asset/heavyweight_champ.png"
                data-title="Francis Ngannou" 
                data-description="Actuel champion de la catégorie poids lourds de l'UFC" 
                data-dates="Début du reigne le 27 mars 2021">
                    <figure>
                        <img src="./asset/heavyweight_champ.png" alt="Francis Ngannou">
                    </figure>
                </li>
            </ul>
        </section>
        <!-- <section>
            <a href="form.php">
                <button aria-label="">Cliquez ici pour Commencer</button>
            </a>
        </section> -->
    </main>
    <footer>
        <p>@ - Streaming - 2022</p>
    </footer>
    <div class="parent-modale" role="dialog">
        <figure class="modale">
            <button aria-label="closed">
                <i class="material-icons" aria-hidden="true">close</i>
            </button>
            <img src="https://via.placeholder.com/500" alt="picture">
            <figcaption class="desc">
                <h3>title</h3>
                <p>
                   
                </p>
                <time>Years : </time>
            </figcaption>
            <a href="">BUTTON</a>
        </figure>
    </div>
</body>
</html>