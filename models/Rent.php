<?php


class Rent
{
    public $rent_id;
    public $ime;
    public $prezime;
    public $jmbg;
    public $car_id;
    public $broj_dana;
    
    public function __construct($rent_id=null,$ime=null, $prezime=null, $jmbg=null,$car_id=null,$broj_dana){
        $this->rent_id=$rent_id;
        $this->ime=$ime;
        $this->prezime=$prezime;
        $this->jmbg=$jmbg;
        $this->car_id=$car_id;
        $this->broj_dana=$broj_dana;

    }

    public function dodajIznajmljivanje($rent, $conn){
        $query= "INSERT INTO rent VALUES(NULL, '$rent->ime','$rent->prezime','$rent->jmbg','$rent->car_id', '$rent->broj_dana')";

        return $conn->query($query);
    }

}
