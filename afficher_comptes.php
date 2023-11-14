<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestion des Comptes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Gestion des Comptes</h2>
    <!-- Affichage des comptes -->
    <?php // Connexion à la base de données
    $host = "localhost";
    $user = "root";
    $pw = "";
    $ndb = "contactme";
    $con = mysqli_connect($host, $user, $pw, $ndb);

    // Vérifier la connexion
    if (!$con) {
        die("La connexion a échoué : " . mysqli_connect_error());
    }

    // Requête pour récupérer la liste des comptes
    $query = "SELECT * FROM contact";
    $result = mysqli_query($con, $query);

    // Vérifier si la requête a réussi
    if ($result) {
        // Afficher la liste des comptes
        echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>prenom</th>
            </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['prenom']}</td>
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