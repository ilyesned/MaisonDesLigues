<?php
    include_once "./src/header.inc.php";
    include_once "./src/connexion_bdd.inc.php";
    include_once "./src/reservation.inc.php";
    include_once "./src/users_reservation.inc.php";
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
            isset($_SESSION['id']) ? $_idUser = $_SESSION['id'] : $id = 0;
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

            print '<h2>Vos réservations</h2>'
                .'<table class="table_user">'
                    .'<tr>'
                        .'<th>Combattant</th>'
                        .'<th>Qui est-il </th>'
                        .'<th>Date</th>'
                        .'<th>Date de réservation</th></tr>';

            foreach($reservation as $reservation){
                
                print
                '<tr>'.
                        '<td>'.$reservation['nom_combats'].'</td>'
                        .'<td>'.$reservation['desc_combats'].'</td>'
                        .'<td>'.$reservation['date_combats'].'</td>'
                        .'<td>'.$reservation['date_reservation'].'</td>'
                .'</tr>';
                    
            }
            print '</table>';

            
            

        ?>
        </section>
        <section class="film">
            <ul class="grid-picture-large">
                <li data-image="./asset/flyweight_champ.png"
                data-title="Deiveson Figueiredo" 
                data-description="Actuel champion de la catégorie poids mouches de l'UFC. Prochain combat le " 
                data-dates=": 22 janvier 2023"
                data-id="1">
                    <figure>
                        <img src="./asset/flyweight_champ.png" alt="Deiveson Figueiredo">
                    </figure>
                </li>
                <li data-image="./asset/bantamweight_champ.png"
                data-title="Aljamain Sterling" 
                data-description="Actuel champion de la catégorie poids coqs de l'UFC. Prochain combat le " 
                data-dates=": 6 mars 2023"
                data-id="2">
                    <figure>
                        <img src="./asset/bantamweight_champ.png" alt="Aljamain Sterling">
                    </figure>
                </li>
                <li data-image="./asset/featherweight_champ.png"
                data-title="Alexander Volkanovski" 
                data-description="Actuel champion de la catégorie poids plumes de l'UFC. Prochain combat le " 
                data-dates=": 14 décembre 2023"
                data-id="3">
                    <figure>
                        <img src="./asset/featherweight_champ.png" alt="Alexander Volkanovski">
                    </figure>
                </li>
                <li data-image="./asset/lightweight_champ.png"
                data-title="Charles Oliveira" 
                data-description="Actuel champion de la catégorie poids légers de l'UFC. Prochain combat le " 
                data-dates=": 16 mai 2023"
                data-id="4">
                    <figure>
                        <img src="./asset/lightweight_champ.png" alt="Charles Oliveira">
                    </figure>
                </li>
                <li data-image="./asset/welteirweight_champ.png"
                data-title="Kamaru Usman" 
                data-description="Actuel champion de la catégorie poids mi-moyens de l'UFC. Prochain combat le " 
                data-dates=": 2 mars 2023"
                data-id="5">
                    <figure>
                        <img src="./asset/welteirweight_champ.png" alt="Kamaru Usman">
                    </figure>
                </li>
                <li data-image="./asset/middleweight_champ.png"
                data-title="Israël Adesanya" 
                data-description="Actuel champion de la catégorie poids moyens de l'UFC. Prochain combat le " 
                data-dates=": 5 octobre 2023"
                data-id="6">
                    <figure>
                        <img src="./asset/middleweight_champ.png" alt="Israël Adesanya">
                    </figure>
                </li>
                <li data-image="./asset/light-heavyweight_champ.png"
                data-title="Glover Teixeira" 
                data-description="Actuel champion de la catégorie poids mi-lourds de l'UFC. Prochain combat le " 
                data-dates=": 30 octobre 2023"
                data-id="7">
                    <figure>
                        <img src="./asset/light-heavyweight_champ.png" alt="Glover Teixeira">
                    </figure>
                </li>
                <li data-image="./asset/heavyweight_champ.png"
                data-title="Francis Ngannou" 
                data-description="Actuel champion de la catégorie poids lourds de l'UFC. Prochain combat le " 
                data-dates=": 27 juin 2023"
                data-id="8">
                    <figure>
                        <img src="./asset/heavyweight_champ.png" alt="Francis Ngannou">
                    </figure>
                </li>
            </ul>
        </section>
    </main>
    <footer>
        <section class="footer_navigation">
            <ul class="navigation_footer">
                <li>
                    <a href="https://www.facebook.com/UFC/" target="_blank">
                        <img src="./asset/facebook.webp" alt="Facebook">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/ufc" target="_blank">
                        <img src="./asset/twitter.png" alt="Twitter">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/ufc/" target="_blank">
                        <img src="./asset/instagram.webp" alt="Instagram">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/user/UFC" target="_blank">
                        <img src="./asset/youtube.webp" alt="Youtube">
                    </a>
                </li>
                <li>

                </li>
            </ul>
        </section>
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
            <form action="#" method="POST">
                <input class="reservation_button" type="submit" name="reservation" value="S'inscrire à ses prochains combats">
                            
            </form>
        </figure>
    </div>
</body>
</html>