<?php include ('connect.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $id = $_GET['id'];
    /*$connect = mysqli_connect("localhost", "root", "root", "entreprise"); //Je me connecte à my sql
    mysqli_set_charset($connect, 'UTF8');*/
    $db = new Database();

    $requete = 'SELECT nom, prenom, pays FROM divers WHERE id=?';
    $tab = $db->query($requete,[$id])->fetch();
    /*$requete = "SELECT nom, prenom, pays FROM divers WHERE id=$id";
    $query = mysqli_query($connect, $requete);
    $tab = mysqli_fetch_assoc($query);*/
    
    $nom = $tab['nom'];
    $prenom = $tab['prenom'];
    $pays = $tab['pays'];



    ?>
    <table border=1>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>pays</th>
            <th>action</th>
        </tr>
        <form action="update.php" method="post">
            <td><input type=hidden name="id" id="id" value="<?php echo $id ?>"><?php echo $id ?></td>
            <td><input type=text name="nom" id="nom" value="<?php echo $nom ?>"></td>
            <td><input type=text name="prenom" id="prenom" value="<?php echo $prenom ?>"></td>
            <td><input type=text name="pays" id="pays" value="<?php echo $pays ?>"></td>
            <td><input type="submit" value="ok"></td>
        </form>
    </table>
</body>

</html>