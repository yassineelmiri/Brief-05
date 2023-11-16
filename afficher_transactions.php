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
    <section class="affi">
        <h2>Gestion des Transactions</h2>
        <!-- Affichage des transactions -->
        <?php
        // Connexion à la base de données
        $host = "localhost";
        $user = "root";
        $pw = "";
        $ndb = "contactme";
        $con = mysqli_connect($host, $user, $pw, $ndb);

        // Vérifier la connexion
        if (!$con) {
            die("La connexion a échoué : " . mysqli_connect_error());
        }

        // Requête pour récupérer la liste des transactions
        $query = "SELECT * FROM transactions";
        $result = mysqli_query($con, $query);

        // Vérifier si la requête a réussi
        if ($result) {
            // Afficher la liste des transactions
            echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Montant</th>
                <th>Type</th>
                <th>idClient</th>
            </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['montant']}</td>
                <td>{$row['type']}</td>
                <td>{$row['idClient']}</td>
              </tr>";
            }

            echo "</table>";
        } else {
            echo "Erreur lors de l'exécution de la requête : " . mysqli_error($con);
        }

        // Fermer la connexion
        mysqli_close($con); ?>
    </section>
    <button><a href="index.php">return</a></button>

</body>

</html>