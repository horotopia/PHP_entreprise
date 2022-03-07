<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <table border=1>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>pays</th>
            <th>action</th>
        </tr>
        <tr>
            <form action="insert.php" method="post">
                <td></td>
                <td><input type=text name="nom" id="nom"></td>
                <td><input type=text name="prenom" id="prenom"></td>
                <td><input type=text name="pays" id="pays"></td>
                <td><input type="submit" value="ok"></td>
            </form>
        </tr>
        <?php
        $db = new Database();

        $requete = "SELECT id, prenom, nom, pays FROM divers";
        $query = $db->query($requete);

        while ($tab = $query->fetch(PDO::FETCH_ASSOC)) {

            $id = $tab['id'];
            $nom = $tab['nom'];
            $prenom = $tab['prenom'];
            $pays = $tab['pays'];

            echo "<tr>
                <td>$id</td>
                <td>$nom</td>
                <td>$prenom</td>
                <td>$pays</td>
                <td><a href=\"edit.php?id=$id\"><img src=\"img/pencil-square.svg\"></a>
                <a href=\"suppr.php?id=$id\"><img src=\"img/trash.svg\"></a></td>
                </tr>";
        }
        ?>
    </table>

</body>

</html>