<?php

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
            <?php

            foreach ($recept as $recepten) {
                // printf voert een geformatteerde string uit
                printf(
                    // de parameters zijn ingevoerd met procenttekens
                    '<tr class="borderAntwoorden">
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                        <td>%s</td>
                    </tr>',

                    $recepten['id'],
                    $recepten['titel'],
                    $recepten['duur'],
                    $recepten['moeilijkheidsgraad'],
                    $recepten['ingredienten']
                );
            }

            ?>
        </tbody>
    </table>

    <?php include "footer.php" ?>

    <script src="kookBoekSorteer.js"></script>

</body>

</html>