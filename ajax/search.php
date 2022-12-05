<?php

include('../Database.php');
include('../models/Rent.php');

$data = Rent::searchRent($_POST['proizvodjac_car'], $conn);


?>
<table class="table table-bordered table-striped border border-2 border-dark">
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>JMBG</th>
                        <th>Proizvodjac</th>
                        <th>Model</th>
                        <th>Period iznajmljivanja</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        while ($obj = mysqli_fetch_object($data)) {
                    ?>
                        <tr>
                            <td><?php echo $obj->ime;  ?></td>
                            <td><?php echo $obj->prezime;  ?></td>
                            <td><?php echo $obj->jmbg;  ?></td>
                            <td><?php echo $obj->proizvodjac;?></td>
                            <td><?php echo $obj->model; ?></td>
                            <td><?php echo $obj->broj_dana; ?></td>
                            <td><button class="btn btn-light" id="brisanje">OBRISI</button></td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>





