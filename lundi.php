<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>La méthode orientée objet</title>
</head>
<body>
<h1>Exercices POO Solo</h1>

<?php
require "Personnage.php";

$merlin=new Personnage("merlin");

$harry=new Personnage("harry");
$merlin->attaque($harry);
if ($harry->mort()){
    echo 'Harry est mort :(';
} else {
    echo 'harry a survécu avec '.$harry->vie.' vies';
}

var_dump($merlin->getNom());
//var_dump($harry);
?>

</body>
</html>
