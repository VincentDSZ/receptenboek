<?php

// Dit is het startpunt van je applicatie.


require 'database.php';

$sql = "SELECT * FROM recept";

$result = mysqli_query($conn, $sql);

$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo json_encode($recepten);
// die();
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

            foreach ($recepten as $index => $recept) {
                $class = ($index % 2) === 0 ? "borderAntwoorden" : "borderAntwoordenMiddel";
                printf(
                    '
                <tr class="%s">
                <td>%s</td>
                <td>%s</td>
                <td>%d</td>
                <td>%s</td>
                <td>%s</td>
                </tr>',
                    $class,
                    $recept['id'],
                    $recept['titel'],
                    $recept['duur'],
                    $recept['moeilijkheidsgraad'],
                    $recept['ingredienten']
                );
            }

            ?>
        </tbody>
    </table>

    <?php include "footer.php" ?>

    <script src="kookBoekSorteer.js"></script>

</body>

</html>