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
    <title>Faq</title>
</head>

<body>
    <?php foreach ($FAQ as $value) { ?>
        <div class="box">
            <h2><?= $value['domanda']; ?></h2>
            <p><?= $value['risposta']; ?></p>
        </div>
    <?php } ?>
</body>

</html>