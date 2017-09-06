<?php
//on crée une classe
class Personnage{
    //on définit des propriétés = variables spécifiques
    public $vie = 80;
    public $atk = 20;
    protected $nom;//définir une propriété sans lui donner de valeur

    //et ensuite on crée des méthodes
    public function __construct($nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom(){
        $this->nom=$nom;
    }
    public function getVie(){
        return $this->vie;
    }
    public function regenerer($vie = null){
        if (is_null($vie)) {
            $this->vie = 100;
       } else {
            $this->vie += $vie;
        }
    }
    public function mort(){
        return $this->vie <= O;
    }
    private function empecher_negatif (){
        if ($this->vie<0) {
            $this->vie=0;
        }
    }
    public function attaque($cible){
    $cible->vie-=$this->atk;
    $cible->empecher_negatif();
    }
}
?>