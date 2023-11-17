<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestion des Transactions</title>
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
        <h2>Gestion de Comptes</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            id client: <br> <input type="number" name="idClient" placeholder="id Client"><br>
            balance:<br> <input type="text" name="balance" placeholder="balance"><br>
            device: <br> <input type="text" name="device" placeholder="device"><br>
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
            $balance = $_POST['balance'];
            $device = $_POST['device'];
            $date = date('Ymdhis') ;
            $RIB = $date.substr($date,0,16);
            

            if ($idClient && $balance && $device && $RIB) {
                $query = "INSERT INTO comptes(RIB,balance,device,idClient)values('$RIB','$balance','$device','$idClient')";
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