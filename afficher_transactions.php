<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestion des Transactions</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['montant']}</td>
                <td>{$row['type']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Erreur lors de l'exécution de la requête : " . mysqli_error($con);
}

// Fermer la connexion
mysqli_close($con); ?>
</body>

</html>
