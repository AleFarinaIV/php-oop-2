<?php

    include './partials/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>OOP Animals Shop</title>
</head>

<body>

    <div class="container py-5">
        <div class="text-center">
            <h1>OOP Animals Shop</h1>
            <p class="fs-5 py-4 text-danger">Il primo E-Commerce esclusivo per la cura dei tuoi animali domestici!</p>
        </div>
        <div class="row">
            <?php
                foreach ($instancesArray as $randomEl) {?>
                <div class="col-3 gy-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $randomEl->getImage(); ?>" class="card-img-top" alt="<?php echo $randomEl->getTitle(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $randomEl->getTitle(); ?></h5>
                            <p class="card-text">Price: <?php echo $randomEl->getPrice(); ?>$</p>
                            <p class="card-text"><small>Category: <?php echo $randomEl->getCategory(); ?></small></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>