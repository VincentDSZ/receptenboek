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
    <title>Kookboek - Sorteer pagina</title>
    <link rel="stylesheet" href="kookBoekSorteer.css">
</head>

<body>

    <?php include "header.php" ?>

    <table class="table-sortable">
        <thead>
            <tr class="borderKiezen">
                <th>Receptennummer</th>
                <th>Naam</th>
                <th>Duur (min)</th>
                <th>Moeilijkheidsgraad</th>
                <th>Aantal ingredienten</th>
            </tr>
        </thead>
        <tbody>
            <tr class="borderAntwoorden">
                <td>1</td>
                <td>Nasi goreng</td>
                <td>25</td>
                <td>normaal</td>
                <td>14</td>
            </tr>
            <tr class="borderAntwoordenMiddel">
                <td>4</td>
                <td>Pisang goreng</td>
                <td>20</td>
                <td>makelijk</td>
                <td>5</td>
            </tr>
            <tr class="borderAntwoorden">
                <td>2</td>
                <td>Gado gado</td>
                <td>30</td>
                <td>zeer moeilijk</td>
                <td>20</td>
            </tr>
        </tbody>
    </table>

    <?php include "footer.php" ?>

    <script src="kookBoekSorteer.js"></script>

</body>

</html>