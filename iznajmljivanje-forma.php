<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Iznajmljivanje</title>
</head>

<body>

    <div class="div-glavni">


        <div class="div-iznajmljivanje-forma">

            <h3>Iznajmljivanje automobila</h3>

            <form method="post">

                <div class="form-group">
                    <label for="ime" class="form-label">Ime: </label>
                    <input type="text" class="form-control" name="ime">
                </div>

                <div class="form-group">
                    <label for="prezime" class="form-label">Prezime: </label>
                    <input type="text" class="form-control" name="prezime">
                </div>

                <div class="form-group">
                    <label for="jmbg" class="form-label">JMBG: </label>
                    <input type="text" class="form-control" name="jmbg">
                </div>

                

                <div class="form-group">
                    <label for="" class="form-label">Broj dana: </label>
                    <select class="form-select" name="brojdana">
                        <option value="1">1 dan</option>
                        <option value="3">3 dana</option>
                        <option value="7">5 dana</option>
                        <option value="10">10 dana</option>
                        <option value="14">14 dana</option>
                        <option value="21">21 dan</option>
                        <option value="30">30 dana</option>
                    </select>
                </div>

                

                <button type="submit" name="dodaj-rent-button" class="btn btn-primary" id="rent-button">Iznajmi automobil</button>
                
            </form>
            <a href="index.php"><button class="btn btn-light" id="iznajmljivanja">POCETNA</button></a>


            <?php

            include('Database.php');
            include('models/Rent.php');

            if (isset($_POST['dodaj-rent-button']) && isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['jmbg']) && isset($_POST['brojdana'])) {
                $rent = new Rent(null, $_POST['ime'], $_POST['prezime'], $_POST['jmbg'], $_GET['car_id'],  $_POST['brojdana']);

                $rent->dodajIznajmljivanje($rent, $conn);
            }
            ?>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>

</body>

</html>