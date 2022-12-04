<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Rent a car</title>
</head>

<body class="">

    <div class="div-home">

        <h1 class="text-center text-light">Rent a car</h1>

        
        <div class="btnshow">
        <a href="svaIznajmljivanja.php"><button class="btn btn-light" id="iznajmljivanja">PRIKAZI IZNAJMLJIVANJA</button></a>

        </div>

        <?php
            include('sviAutomobili.php');
        ?>
        

    </div>

</body>

</html>