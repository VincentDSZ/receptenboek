<?php

// Dit is het startpunt van je applicatie.


require 'database.php';

$sql = "SELECT * FROM recept";

$result = mysqli_query($conn, $sql);

$recept = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kookboek</title>
    <link rel="stylesheet" href="kookBoek.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>

    <?php include "header.php" ?>

    <main>
        <div class="txtRecepten">
            <a>Indonesische recepten</a>
        </div>
        <?php foreach ($recept as $recepten) : ?>
            <div class="borderAroundRecept">
                <div class="imgClass">
                    <a href="kookBoekDetail.php?id=<?php echo $recepten["id"] ?>"><img width="473" height="205" src="<?php echo $recepten["foto"] ?>"></>
                </div>
                <div class="borderOffTxt">
                    <div class="borderInfoTxt">
                        <a class="padInfoTxt"><a class="material-symbols-outlined md-19">schedule</a><a><?php echo $recepten["duur"] ?> min</a></a>
                        <a class="padInfoTxt"><a class="material-symbols-outlined md-19">local_fire_department</a><a><?php echo $recepten["kcal"] ?> kcal</a></a>
                        <a class="padIngTxt"><?php echo $recepten["categorieen"] ?></a>
                        <a class="padInfoTxt"><a class="material-symbols-outlined md-19">person</a><a><?php echo $recepten["aantal_personen"] ?></a></a>
                    </div>
                    <div class="txtNasi">
                        <a><?php echo $recepten["titel"] ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <?php include "footer.php" ?>

</body>

</html>