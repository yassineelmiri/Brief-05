<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ajouter un Client</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
    
</body>

</html>