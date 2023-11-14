<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestion des Transactions</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Gestion des Transactions</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        id: <br> <input type="number" name="id" placeholder=" id"><br>
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
        $id = $_POST['id'];
        $montant = $_POST['montant'];
        $type = $_POST['type'];
        
        if ($id && $montant && $type) {
            $query = "INSERT INTO transactions(id,montant,type)values('$id','$montant','$type')";
            mysqli_query($con, $query);
            echo "valid";
        } else {
            echo "il faut saisir tout les champs";
        }
    } ?>
</body>

</html>
