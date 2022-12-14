<?php


class Car
{
    public $car_id;
    public $proizvodjac;
    public $model;
    public $godiste;
    public $cena;

    public function __construct($car_id=null, $proizvodjac=null, $model=null,$godiste=null,$cena=null){
        $this->car_id=$car_id;
        $this->proizvodjac=$proizvodjac;
        $this->model=$model;
        $this->godiste=$godiste;
        $this->cena=$cena;

    }

    public static function getAllCars($conn)
    {
        $query = "SELECT * FROM car";
        return $conn->query($query);
    }

    public static function sortCarsByPrice($type, $conn)
    {
        $query = "SELECT * FROM car ORDER BY cena $type";
        return $conn->query($query);
    }

    public static function sortCarsByYear($type, $conn)
    {
        $query = "SELECT * FROM car ORDER BY godiste $type";
        return $conn->query($query);
    }
    
    
   
    
}