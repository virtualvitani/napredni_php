<?php

// OOP -> Object Oriented Programing

function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

class Korisnik {

   // Svojstva objekta -> Properties
   public $ime;
   public $godine;
   public $spol;
   public $adresa;

   // Metode objekta -> Methods
   public function posudjujefilm(){
        // Pomocu kljucne rijeci $this pristupamo svojstvima i metodama unutar klase
        $this->ime = 'Alex';

        // Varijabla $godine lokalna je unutar metode posudujefilm()
        $godine = 39;

        $this->seuclanjuje();
        
        echo $this->ime . ' je posudio Film, on ima ' . $godine . ' godina :-D ';
    }

    private function seuclanjuje(){
        echo 'Korisnik je uclanjen';
    }


}

$tena = new Korisnik();
$tena->ime = 'Tena';
$tena->spol = 'Zensko';
$tena->posudjujefilm();

$ari = new Korisnik();
$ari->ime = 'Arijan';
$ari->spol = 'Musko';
$ari->posudjujefilm();

$korisnik = new Korisnik();
$korisnik->ime = 'Alex';
$korisnik->spol = 'Musko';
$korisnik->posudjujefilm();

dd($korisnik);