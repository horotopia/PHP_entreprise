    <?php

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pays = $_POST['pays'];

    include('connect.php');

    $db = new Database();

    $requete = "UPDATE divers SET prenom = '$prenom', nom = '$nom', pays = '$pays' WHERE id=$id";
    $db->query($requete);

    header('Location: index.php');
    ?>