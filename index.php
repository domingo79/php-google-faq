<?php
include './server.php';

#var_dump($FAQ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Faq</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php foreach ($FAQ as $value) { ?>
        <div class="card" style="width: 18rem; margin: 1rem;">
            <img style="widt: 180px; height: 150px" src='<?= $value['url'] ?>' class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $value['domanda']; ?></h5>
                <p><?= $value['risposta']; ?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php } ?>
</body>

</html>