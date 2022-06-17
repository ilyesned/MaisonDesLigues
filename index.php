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
            <li><a href="form.php">Inscription</a></li>
            <li><a href="connec.php">Connexion</a></li>
        </ul>
        <h1>Ultimate Fighting Championship</h1>
    </header>
    <main class="main">
        <section class="entete">
            <h2>Entrez dans la cage avec le formulaire ci-dessous !</h2>
            <br>
            <p>Entrez dans la cage avec le formulaire ci-dessous ! Chaque semaine retrouver des combats différents, 
                des combattants différents, des divisions différentes. Vous pourrez ainsi visualiser la 
                cage et supporter vos combattants et divisions préféré.</p>

            </p>
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
        <section>
            <a href="form.php">
                <button aria-label="">Cliquez ici pour Commencer</button>
            </a>
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
        </figure>
    </div>
</body>
</html>