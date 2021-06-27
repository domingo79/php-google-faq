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
    <script src="https://kit.fontawesome.com/2c30adbff5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./asset/css/style.css">
    <title>Faq</title>
</head>

<body>
    <h1>Domande Frequenti</h1>

    <div class="faq_container">
        <?php foreach ($FAQ as $value) : ?>

            <div class="faq active">
                <h3 class="faq_title">
                    <?= $value['domanda']; ?>
                </h3>
                <p class="faq_text">
                    <?= $value['risposta']; ?>
                </p>
                <button class="faq_toggle">
                    <i class="fas fa-chevron-down"></i>
                    <i class="fas fa-times"></i>
                </button>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="./asset/js/main.js"></script>
</body>

</html>