<?php 
include_once './src/header.inc.php';
include_once './src/connexion_bdd.inc.php';
//search a word in the database

?>

    <body>
        <header>
            <ul class="menu">
                <li><a href="member.php">Espace</a></li>
                <li><a href="fighters.php">Combattants</a></li>
                <li><a href="categorie.php">Divisions</a></li>
                <li><a href="account.php">Compte</a></li>
                <li><a href="deconnexion.php">Deconnexion</a></li>
                <li><a href="recherche.php">Recherche</a></li>
            </ul>
            <h1>Ultimate Fighting Championship</h1>
        </header>
        <main class="main">
            <section class="entete">
                <h2>Recherche</h2>
                <form action="recherche.php" method="post">
                    <input type="text" name="search" placeholder="Rechercher un combattant">
                    <input type="submit" value="Rechercher">
                </form>
            </section>
            <section class="entete">
                <h2>Résultat de la recherche</h2>
                <?php
                    if(isset($_POST['search'])){
                        $search = $_POST['search'];
                        $req = $bdd->prepare("SELECT * FROM combats WHERE desc_combats LIKE :search");
                        $req->execute(array(
                            'search' => '%'.$search.'%'
                        ));
                        while($donnees = $req->fetchAll()){
                            foreach($donnees as $fighter){
                                //verify if the word exist in the description of the fighter
                                if(strpos($fighter['desc_combats'], $search) !== false){
                                    //message that say that the word does not exist in the description
                                    print '<p>Malheuresement on ne trouve pas ce que vous recherchez</p>';
                                }else{
                                    print
                                        '<table class="table_user">'
                                            .'<tr>'
                                                .'<th>Le mot apparait chez</th>'
                                                .'<th>Il apparait en tout</th>'
                                            .'</tr>'
                                            .'<tr>'
                                                .'<td>'.$fighter['nom_combats'].'</td>'
                                                .'<td>'.substr_count($fighter['desc_combats'], $search).'</td>'
                                            .'</tr>'
                                        .'</table>';
                                }
                            }
                        }
                    }