<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestion des Transactions</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header" id="header">
        <div class="container">
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
        <h2>Gestion des Transactions</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            id: <br> <input type="number" name="idClient" placeholder="idClient"><br>
            Montant:<br> <input type="number" name="montant" placeholder="montant"><br>
            Type: <br> <input type="text" name="type" placeholder="type"><br>
            <input name="submit" type="submit" class="submit" value="envoyer">
        </form>
        <!-- Affichage des transactions -->
        <?php $host = "localhost";
        $user = "root";
        $pw = "";
        $ndb = "contactme";
        $con = mysqli_connect($host, $user, $pw, $ndb);

        if (isset($_POST['submit'])) {
            $idClient = $_POST['idClient'];
            $montant = $_POST['montant'];
            $type = $_POST['type'];

            if ($idClient && $montant && $type) {
                $query = "INSERT INTO transactions(idClient,montant,type)values('$idClient','$montant','$type')";
                mysqli_query($con, $query);
                echo "valid";
            } else {
                echo "il faut saisir tout les champs";
            }
        } ?>
    </section>
    <button><a href="index.php">return</a></button>

</body>

</html>