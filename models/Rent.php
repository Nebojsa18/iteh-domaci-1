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

    public static function getAllRent($conn){
        $query= "SELECT rent.rent_id,rent.ime, rent.prezime, rent.jmbg, car.proizvodjac, car.model, rent.broj_dana FROM rent JOIN car ON rent.car_id=car.car_id";

        return $conn->query($query);

    }

    public static function searchRent($proizvodjac, $conn)
    {
        $query = "SELECT rent.ime, rent.prezime, rent.jmbg, car.proizvodjac, car.model, rent.broj_dana FROM rent JOIN car ON rent.car_id=car.car_id WHERE car.proizvodjac LIKE '%" . $proizvodjac . "%'";

        return $conn->query($query);
    }

    public static function deleteRent($id, $conn)
    {
        $query= "DELETE FROM rent WHERE rent_id=$id";

        return $conn->query($query);
    }

    public static function sortRent($type, $conn)
    {
        $query = "SELECT rent.rent_id,rent.ime, rent.prezime, rent.jmbg, car.proizvodjac, car.model, rent.broj_dana FROM rent JOIN car ON rent.car_id=car.car_id ORDER BY rent.broj_dana $type";
   
        return $conn->query($query);
    }

    // public static function sortRentAsc($conn)
    // {
    //     $query = "SELECT rent.rent_id,rent.ime, rent.prezime, rent.jmbg, car.proizvodjac, car.model, rent.broj_dana FROM rent JOIN car ON rent.car_id=car.car_id ORDER BY rent.broj_dana ASC";
   
    //     return $conn->query($query);
    // }

    // public static function sortRentDesc($conn)
    // {
    //     $query = "SELECT rent.rent_id,rent.ime, rent.prezime, rent.jmbg, car.proizvodjac, car.model, rent.broj_dana FROM rent JOIN car ON rent.car_id=car.car_id ORDER BY rent.broj_dana DESC";
   
    //     return $conn->query($query);
    //}

}


