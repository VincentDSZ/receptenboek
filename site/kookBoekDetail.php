<?php

require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM recept WHERE id = $id";

$result = mysqli_query($conn, $sql);

$recept = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kookboek - Detail pagina</title>
    <link rel="stylesheet" href="kookBoekDetail.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://kit.fontawesome.com/db1f6bf93f.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <div class="allInfoDetailPagina">
            <div>
                <div class="NasiTxt">
                    <a><?php echo $recept["titel"] ?></a>
                </div>
                <div class="nasiGorengInfo">
                    <a><?php echo $recept["samenvatting"] ?></a>
                </div>
                <div class="centerCategorieen">
                    <a class="padInfoTxt"><span class="material-symbols-outlined md-23">local_fire_department</span><span><?php echo $recept["kcal"] ?> kcal</span></a>
                    <a class="padInfoTxt"><span class="material-symbols-outlined md-23">schedule</span><span><?php echo $recept["duur"] ?> min</span></a>
                    <a class="padInfoTxt"><span class="material-symbols-outlined md-23">hourglass_empty</span><span><?php echo $recept["wachten"] ?> wachten</span></a>
                    <a class="padInfoTxt"><span class='fas fa-pepper-hot' style='font-size:23px'></span><span> <?php echo $recept["pittig"] ?></span></a>
                </div>
            </div>
            <div class="categorieenButton">
                <a class="txtButtonCat"><?php echo $recept["categorieen"] ?></a>
                <a class="txtButtonCat">indonesisch</a>
                <a class="txtButtonCat">aziatisch</a>
            </div>
            <div class="categorieenButtonBottom">
                <a class="txtButtonCat">budget</a>
                <a class="txtButtonCat">ingredienten</a>
            </div>
        </div>
        <div class="imgLabel">
            <img height="585,5" width="709" src="<?php echo $recept["plaatje_detail"] ?>">
        </div>
        <div class="aanDeSlagInfoTXT">
            <div class="txtAandeslag">
                <a>Aan de slag</a>
            </div>
            <div class="allInfoAanDeSlag">
                <div class="txtSymbol">
                    <a class="material-symbols-outlined md-63">counter_1</a>
                </div>
                <div class="txtStapEen">
                    <a><?php echo $recept["stap1"] ?></a>
                </div>
            </div>
            <div class="allInfoAanDeSlag">
                <div class="txtSymbol">
                    <a class="material-symbols-outlined md-63">counter_2</a>
                </div>
                <div class="txtStapEen">
                    <a><?php echo $recept["stap2"] ?></a>
                </div>
            </div>
            <div class="allInfoAanDeSlag">
                <div class="txtSymbol">
                    <a class="material-symbols-outlined md-63">counter_3</a>
                </div>
                <div class="txtStapEen">
                    <a><?php echo $recept["stap3"] ?></a>
                </div>
            </div>
            <div class="allInfoAanDeSlag">
                <div class="txtSymbol">
                    <a class="material-symbols-outlined md-63">counter_4</a>
                </div>
                <div class="txtStapEen">
                    <a><?php echo $recept["stap4"] ?></a>
                </div>
            </div>
        </div>
    </main>

    <?php include "footer.php" ?>

</body>

</html>