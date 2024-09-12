<?php
include("./connexion.php");
$date=$_POST["date"];
$matiere=$_POST["matiere"];
$contenu=$_POST["contenu"];
$date2=$_POST["date2"];
require 'autoloader.php';
require 'Matiere.php';
Autoloader::register();
Matiere::from($matiere); 
// var_dump($date,$matiere,$contenu,$date2);
if ($date>=$date2){
    header("./index.php");
}
elseif ($matiere!=Matiere){
    header("./index.php");
}
else{
    $sql = $conn->prepare("INSERT INTO agenda (date, matiere, contenu, date2) VALUES ('$date', '$matiere', '$contenu','$date2')");
    $sql->execute();
    if ($sql->execute() === TRUE) {
        echo "Votre devoir a bien été inséré dans le tableau.";
    } else {
        echo "Erreur : " . $sql->error;
    }
    $sql->close();
    $conn->close();
}