<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ajouter un Client</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header" id="header">
        <div class="containerr">
            <div class="logo">
                <a href="index.php"><img src="Design_sans_titre-removebg-preview.png" alt=""></a>
            </div>
            <ul class="main-nav">
                <li>
                    <a href="#">Afficher</a>
                    <!-- Start Megamenu -->
                    <div class="mega-menu">

                        <ul class="links">
                            <li>
                                <a href="afficher_clients.php"></i>Affiche des Clients</a>
                            </li>
                            <li>
                                <a href="afficher _compt.php"></i>Affiche des Comptes</a>
                            </li>
                            <li>
                                <a href="afficher_transactions.php"></i>Affiche des Transactions</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="adminclients.php">Gestion des Clients</a></li>
                <li><a href="admincompt.php">Gestion des Comptes</a></li>
                <li><a href="admintransactions.php">Gestion des Transactions</a></li>

            </ul>
        </div>
    </div>
    <section>
        <h2>Ajouter un Client</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            Nom: <br> <input type="text" name="name" placeholder=" Nom"><br>
            Prénom:<br> <input type="text" name="prenom" placeholder="Prénom"><br>
            Date de Naissance: <br> <input type="date" name="date"><br>
            Nationalité: <br> <input type="text" name="nationalite" placeholder="Nationalité"><br>
            Genre: <br> <input type="text" name="genre" placeholder="Genre"><br>
            <input name="submit" type="submit" class="submit" value="envoyer">
        </form>
        <?php
        $host = "localhost";
        $user = "root";
        $pw = "";
        $ndb = "contactme";
        $con = mysqli_connect($host, $user, $pw, $ndb);

        // if ($con) {
        //     echo "connected";
        // } else {
        //     echo "no connected";
        // }
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $prenom = $_POST['prenom'];
            $date = $_POST['date'];
            $nationalite = $_POST['nationalite'];
            $genre = $_POST['genre'];
            if ($name && $prenom && $date && $nationalite && $genre) {
                $query = "INSERT INTO contact(name,prenom,date,nationalite,genre)values('$name','$prenom','$date','$nationalite','$genre')";
                mysqli_query($con, $query);
                echo "valid";
            } else {
                echo "il faut saisir tout les champs";
            }
        }
        ?>

    </section>

    <button><a href="index.php">return</a></button>


</body>

</html>