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
    <title>Kookboek - Sorteer pagina</title>
    <link rel="stylesheet" href="kookBoekSorteer.css">
</head>

<body>
    <header>
        <nav id="mainNavbar">
            <li><a class="padNavbarTxt">Home</a></li>
            <li><a class="padNavbarTxt">Recepten</a></li>
            <li><a class="padNavbarTxt">Categorieen</a></li>
            <li><a class="borderZoeken"><input class="txtZoeken" type="text" placeholder="Zoek recepten.."></a></li>
            <li><a class="padNavbarTxt">Ingredienten</a></li>
            <li><a class="padNavbarTxt">Tabel</a></li>
            <li><a class="padNavbarTxt">Contact</a></li>
        </nav>
    </header>
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

    <footer>
        <div class="footer-bottom">
            <p>copyright &copy;2023 Receptenboek. designed by <span>Vincent</span></p>
        </div>
    </footer>

    <script src="kookBoekSorteer.js"></script>

</body>

</html>