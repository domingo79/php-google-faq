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
    <link rel="stylesheet" href="./style.css">
    <title>Faq</title>
</head>

<body>

    <div class="container">
        <?php foreach ($FAQ as $value) { ?>
            <div class="panel active" style="background-image: url('<?= $value['url'] ?>');">
                <h3><?= $value['domanda']; ?></h3>
                <p><?= $value['risposta']; ?></p>
            </div>
        <?php } ?>
    </div>
    <script>
        const panels = document.querySelectorAll('.panel');
        // crea un array
        //console.log(panels[2]);

        panels.forEach(panel => {
            panel.addEventListener('click', () => {
                removeActiveClass()
                panel.classList.add('active')
            })
        })

        // funzione per rimuovere la classe attiva
        function removeActiveClass() {
            panels.forEach(panel => {
                panel.classList.remove('active')
            })
        }
    </script>
</body>

</html>