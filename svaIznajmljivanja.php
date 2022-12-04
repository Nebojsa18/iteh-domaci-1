<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Rent</title>
</head>

<body>

    <div class="div-home">

        <h1 class="text-center ">Rent a car</h1>



        <div class="div-reservations">

            <table class="table table-bordered table-striped border border-2 border-dark">
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>JMBG</th>
                        <th>Proizvodjac</th>
                        <th>Model</th>
                        <th>Period iznajmljivanja</th>
                    </tr>
                </thead>

                <tbody>
                    <?php


                    include('Database.php');
                    include('models/Rent.php');

                    $data = Rent::getAllRent($conn);

                    while ($obj = $data->fetch_object()) {
                    ?>
                        <tr>
                            <td><?php echo $obj->ime;  ?></td>
                            <td><?php echo $obj->prezime;  ?></td>
                            <td><?php echo $obj->jmbg;  ?></td>
                            <td><?php echo $obj->proizvodjac;?></td>
                            <td><?php echo $obj->model; ?></td>
                            <td><?php echo $obj->broj_dana; ?></td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>

</body>

</html>