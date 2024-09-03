<?php
include("./connexion.php");
$date=$_POST["date"];
$matiere=$_POST["matiere"];
$contenu=$_POST["contenu"];
$date2=$_POST["date2"];
if ($date>=$date2):
    header("./index.php");
elseif ($matiere=="français"or"anglais"or"espagnol"or"nsi"or"histoire"or"géo"or"math"or"physique"or"chimie"or"ensc"):
    header("./index.php");
else:
    $sql = $conn->prepare("INSERT INTO agenda (date, matiere, contenu, date2) VALUES ('$date', '$matiere', '$contenu','$date2')");
    $sql->execute();
    if ($sql->execute() === TRUE) {
        echo "Votre joueur a bien été inséré dans le tableau.";
    } else {
        echo "Erreur : " . $sql->error;
    }
    $sql->close();
    $conn->close();