<?php 
include("./connexion.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <link href="./sytle.css" rel="stylesheet">
</head>

<body>
<h2>Ajouter un joueur de tennis</h2>
    <form action="./save_agenda.php" method="post">
        <label for="date">date :</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="matiere">matière :</label>
        <input type="text" id="matiere" name="matiere" required><br><br>

        <label for="contenu">contenu :</label>
        <input type="text" id="cotnenu" name="contenu" required><br><br>

        <label for="date2">à rendre pour :</label>
        <input type="date" id="date2" name="date2" required><br><br>


        <input type="submit" value="Ajoutez à l'angenda">
    </form>
</body>

</html>