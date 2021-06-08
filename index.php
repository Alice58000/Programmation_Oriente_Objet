
<?php
    class Film {
        private $id;
        private $nom;
        private $realisateur;
        private $annee; 
    
    public function __construct($id, $nom, $realisateur, $annee) {

        $this->id = $id;
        $this->nom = $nom;
        $this->realisateur = $realisateur;
        $this->annee = $annee;
    }


    public function getId() {
        return $this->id;
    }
    
    public function getNom() {
        return $this->nom;
    }
    
    public function getRealisateur() {
        return $this->realisateur;
    }
    
    public function getAnnee() {
        return $this->annee;
    }
    
    
    public function setId($id) {
        $this->id=$id;
    }
    
    public function setNom($nom) {
        $this->nom=$nom;
    }
    
    public function setRealisateur($realisateur) {
        $this->realisateur=$realisateur;
    }
    
    public function setAnnee($annee) {
        $this->annee=$annee;
    }
    
}
 
    
$utilisateur = new Film("1", "ted", "robert", "2022");

    echo $utilisateur->getId();
    echo $utilisateur->getNom();
    echo $utilisateur->getRealisateur();
    echo $utilisateur->getAnnee();

//Exercice2

class calculatrice {
    public function addition($chiffre, $chiffre2) {
        return $chiffre + $chiffre2;
    }

    public function soustraction($chiffre, $chiffre2) {
        return $chiffre - $chiffre2;
    }

    public function multiplication($chiffre, $chiffre2) {
        return $chiffre * $chiffre2;
    }

    public function division($chiffre, $chiffre2) {
        return $chiffre / $chiffre2;
    }

    public function modulo($chiffre, $chiffre2) {
        return $chiffre % $chiffre2;
    }

}
echo "<br>";

echo ((new calculatrice) -> addition(2, 2)); echo "<br>";
echo ((new calculatrice) -> soustraction(2, 2));echo "<br>";
echo ((new calculatrice) -> multiplication(2, 2));echo "<br>";
echo ((new calculatrice) -> division(2, 2));echo "<br>";
echo ((new calculatrice) -> modulo(2, 2));



//exercice 3

class Animal {
     public function respire() {
         echo "je respire";
     }
   
}

class Oiseau extends Animal {

    private $nom2;
    private $age;
    function __construct($nom2, $age) {
        $this->nom2=$nom2;
        $this->age=$age;
    }
    function voler() {
        echo "je vole";
        
    }
}

class Aigle extends Oiseau {
    function __construct($nom2, $age) {
        parent::__construct($nom2, $age);
    }
}

class Faucon extends Oiseau {
    function __construct($nom2, $age) {
        parent::__construct($nom2, $age);
    }
}



class Reptile extends Animal {
   
    private $nom2;
    private $age;
    function __construct($nom2,$age) {
        $this->nom2=$nom2;
        $this->age=$age;
    }
    function ecaille() {
        echo "avoir des écailles";
    }
}

 class Tortue extends Reptile {
     function __construct($nom2, $age) {
         parent::__construct($nom2, $age); 

         
     }
 }

 class Crocodile extends Reptile {
    function __construct($nom2, $age) {
        parent::__construct($nom2, $age); 

        
    }
 }

  $aigle = new Aigle('Robert', 25) ; echo "<br>";
  $aigle->voler(); 

  $tortue = new Tortue('Roberta' , 80) ; echo "<br>"; 
  $tortue->ecaille();












