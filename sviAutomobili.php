<?php

include('Database.php');

$query = "SELECT * FROM car";

$data = $conn->query($query);

?>


<div class="div-automobili">
<h3 class="text-left text-secondary">Lista automobila na raspolaganju:</h3>
            <table class="table table-bordered table-striped border border-2 border-dark" id="table-cars">
                <thead>
                    <tr>
                        <th>Proizvodjac</th>
                        <th>Model</th>
                        <th>Godiste</th>
                        <th>Cena</th>
                        <th>Rezervisi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include('Database.php');
                    include('models/Car.php');

                    $data = Car::getAllCars($conn);

                    while ($car = $data->fetch_object()) {
                    ?>

                        <tr>
                            <td><?php echo $car->proizvodjac;  ?></td>
                            <td><?php echo $car->model;  ?></td>
                            <td><?php echo $car->godiste;  ?></td>
                            <td><?php echo $car->cena; ?></td>
                            <td><button class="btn btn-success" id="iznajmi-button">Iznajmi automobil</button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

</div>