<?php

include('../Database.php');
include('../models/Car.php');


$data = Car::sortCarsByYear($_POST['sort_type'], $conn);
?>

<?php

    while ($car = $data->fetch_object()) {
?>

<tr>
    <td><?php echo $car->proizvodjac;  ?></td>
    <td><?php echo $car->model;  ?></td>
    <td><?php echo $car->godiste;  ?></td>
    <td><?php echo $car->cena; ?></td>
    <td><a href="iznajmljivanje-forma.php?car_id=<?php echo $car->car_id ?>"><button class="btn btn-primary" id="iznajmi-button">Iznajmi automobil</button></a></td>
</tr>
<?php } ?>