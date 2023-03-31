<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    header {
        background-color: #fff;
        box-shadow: 1px 2px 10px 3px #d4d4d4;
    }

    #mainNavbar {
        margin-left: 250px;
        margin-right: 250px;
        padding: 36px 0px;
        font-size: 16px;
    }

    li {
        display: table-cell;
        position: relative;
        padding: 0px 25px;
    }

    .padNavbarTxt {
        display: inline-block;
        padding: 0px 5px;
        transition: 0.25s;
        position: relative;
    }

    .padNavbarTxt:hover {
        color: #41b79d;
        cursor: pointer;
    }

    .padNavbarTxt:after {
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 2px;
        top: 18px;
        left: 0px;
        background-color: #41b79d;
        transform-origin: bottom;
        transition: transform 0.25s ease-out;
    }


    .padNavbarTxt:hover:after {
        transform: scaleX(1);
        transform-origin: bottom;
        width: 100%;
    }

    .borderZoeken {
        border: 1px solid;
        padding: 5px 10px 7px 10px;
        border-radius: 50px;
        background-color: #fff;
    }

    .txtZoeken {
        border: none;
        border-radius: 50px;
        font-size: 15px;
        font-family: sans-serif;
        color: #424242;
        font-weight: 500;
    }

    .txtZoeken:focus {
        outline: none;
    }
</style>

<body>
    <header>
        <nav id="mainNavbar">
            <li><a class="padNavbarTxt" href="index.php" style="color: inherit;">Home</a></li>
            <li><a class="padNavbarTxt">Recepten</a></li>
            <li><a class="padNavbarTxt">Categorieen</a></li>
            <li><a class="borderZoeken"><input class="txtZoeken" type="text" placeholder="Zoek recepten.."></a></li>
            <li><a class="padNavbarTxt">Ingredienten</a></li>
            <li><a class="padNavbarTxt" href="kookBoekSorteer.php" style="color: inherit;">Tabel</a></li>
            <li><a class="padNavbarTxt">Contact</a></li>
        </nav>
    </header>
</body>

</html>