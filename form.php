<?php
/**
 * class Form
 * permet de générer un formulaire rapidement et simplement
 * /
 */
class Form
{//on veut créer un formulaire avec plusieurs champs
    //on va créer d'abord les propriétés privées :
    public $data;
    //on crée notre constructeur
    public function __construct($data = array())
        //prend un tableau en paramètre
    {
        $this->data=$data;
    }
//fonction input = permet de générer un champ
    public function input($text)
    {
        return $this->$text(
            '<input type="text" name ="' . $text . '" value="' . $this->getValue($text) . '">');
    }
// fonction submit qui permet de soumettre
    public function submit()
    {
        return '<button type="submit">Envoyer</button>';
    }
}
?>