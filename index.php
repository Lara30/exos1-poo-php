<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>La méthode orientée objet</title>
</head>
<body>
<h1>Exercices POO</h1>

<!--## Exercice 1
* Écrire une classe PHP simple qui affiche le message suivant « Bonjour tout le monde !».
* Utiliser une méthode __contstruc() publique.--!>

<?php
class Exercice1{//on crée la classe
//le constructeur est une méthode de la classe qui est
//automatiquement appelée à la création d'un objet = on initialise
//les paramètres d'un objet au moment de le créer
public function __construct(){//on crée une méthode construct
//qui s'initialisera automatiquement
echo 'Bonjour tout le monde!"<br>';// elle renvoie un echo
    }
}
    $monObjet = new Exercice1; //je crée un nouvel objet
//(une nouvelle instance)
echo "<hr>";
?>

<h1>Exercice 2</h1>
<!--Ecrire une classe PHP contenant la propriété $chaine suivante: "Bonjour Tout Le Monde, moi c'est "
Créer la méthode presentation qui permet d'afficher la chaine suivi de VotreNom".
VotreNom est un argument(paramètre) de la méthode presentation.!-->

<?php
class Exo2
{
    //déclaration des attributs et méthodes ici
    private $message = "bonjour tout le monde, moi c'est ";
    public function presentation($VotreNom)
    {
        return $this->message . $VotreNom . "<br>";
    }
}
$MonObjet=new Exo2();
echo $MonObjet->presentation ('Nad');
echo "<hr>";
?>

<!-- ## Exercice 3
* Définissez la classe **Phrase** qui contient :

- Une propriété private nommée "chaine"
- Quatre méthodes de type public nommées gras(), italique(), souligne() et majuscules()
qui retournent respectivement la chaîne passée en argument mise en gras, en italique,
soulignée et mise en majuscules(voir le résultat image1.png)!-->
<?php
class Phrase {
    private $chaine; //propriété définie

    public function __construct ($laChaine){
        //on crée la méthode
        $this->chaine=$laChaine;
    }
    public function gras(){
        return "<b>".$this->chaine."</b><br>";
    }
    public function italique(){
    return "<i>".$this->chaine."</i><br>";
    }
    public function souligne (){
    return "<u>".$this->chaine."</u><br>";
    }
    public function maj (){
        return strtoupper ($this->chaine)."<br>";
    }
}
$phrase=new Phrase ("Program Orientee Objet en PHP");
echo "Gras :".$phrase->gras();
echo "Italique :".$phrase->italique();
echo "Souligné :".$phrase->souligne();
echo "Maj :".$phrase->maj();

echo "<hr>";
?>
<?php
//# Exercice 4 :
//* Écrivez une classe PHP qui trie un tableau d'entiers dans l'ordre croissant en utilisant la fonction **sort()** de PHP.
//* Créer une méthode __construc() qui prend en argument le tableau.
//* Créer la méthode **tri** qui renvoie le tableau trié.
//* Afficher le tableau trié à l'aide de **var_dump** ou **print_r**

//Exemple:
//Tableau d'entiers : array(11, -2, 4, 35, 0, 8, -9)
//Résultat : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
class Tri {
    private $tab;
    public function __construct ($tab)
    {
        $this->tab=$tab;
    }
    public function trier()
    {
        $Atrier=$this->tab;
        sort ($Atrier);
        return $Atrier;
    }
}
$monTab=new Tri (array (12, -1,6,35,0,80,-25,42));
var_dump ($monTab->trier());
echo "<hr>";
?>

<?php

## Exercice 5
/* Réaliser une calculatrice:
* Ecrire une classe PHP avec un constructeur qui possède deux arguments,
* Écrire les méthodes qui permettent de calculer l'addition, la soustraction , la multiplication,  ou la division des deux arguments.

Exemple d'exécution:
$calc = new MaCalculatrice( 8, 4);
echo $calc- > ajout(); // affichera 12
echo $calc- > produit(); // affichera32
*/
class Calcul {
    private $number1;
    private $number2;
    public function __construct ($param1,$param2){
        $this->number1=$param1;
        $this->number2=$param2;
    }
    public function ajout(){
        return $this->number1+$this->number2.'<br>';
    }
    public function soust(){
        return $this->number1-$this->number2.'<br>';
    }
    public function produit(){
        return $this->number1*$this->number2.'<br>';
    }
    public function div(){
        return $this->number1/$this->number2.'<br>';
    }
}
$calculatrice=new Calcul(56,4);
echo $calculatrice->ajout();
echo $calculatrice->produit();
echo $calculatrice->soust();
echo $calculatrice->div();

echo "<hr>";
?>
</body>
</html>