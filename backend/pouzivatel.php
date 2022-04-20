<?php

session_start();


include("connection.php");
include("functions.php");

$data_pouzivatela = check_login($con);

?>


<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Ubytovanie SPŠE PREŠOV</title>
    <link rel="icon" href="../Obrazky/Logo2.png">
    <link rel="stylesheet" type="text/css" href="../html/css/Main.css">
    <link rel="stylesheet" type="text/css" href="../html/css/Pouzivatel.css">
    <link rel="stylesheet" type="text/css" href="../html/css/Ubytovanie.css">
    <link rel="stylesheet" type="text/css" href="../html/css/Domov.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<!--MAIN NAV-->

<div class="section">
    <div class="logo">
        <a href="../backend/admin.php"><img src="../Obrazky/Group 5.svg"></a>
    </div>
    <nav class="navigation">
        <a href="logout.php">ODHLÁSIŤ SA</a>
    </nav>

    <div class="toggleBox">
        <a href="#" onclick="showMenu()">
            <img class="menu" src="https://icons-for-free.com/iconfiles/png/512/navicon-131965017486542289.png"
                 style="width: 40px;height: 40px;">
            <img class="close"
                 src="https://cdn0.iconfinder.com/data/icons/web-app-ui-1/64/menu-preset-interface-ui_icon-49-512.png"
                 style="width: 40px;height: 40px;"></a>
    </div>
</div>


<div class="disable">
    <div class="domov">
        <h1>Vitaj, <?php echo $data_pouzivatela['meno']; ?><br></h1>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-10 well">
        <div class="domov">
            <h2>Osobné údaje</h2>
        </div>
        <table class="table table-bordered" id="datatableid">
            <thead class="alert-info">
            <th>Meno</th>
            <th>Priezvisko</th>
            <th>Navštevovaná trieda</th>
            <th>Navštevovaný ročník</th>
            <th>Adresa bydliska</th>
            <th>Mesto bydliska</th>
            <th>PSČ</th>
            <th>Vzdialenosť od internátu</th>
            <th>Číslo OP</th>
            <th>Rodné číslo</th>
            <th>Číslo poisťovne</th>
            </thead>
            <thead>
            <?php include 'studentfilter.php' ?>
            </thead>
        </table>
        <div class="domov">
            <h2>Údaje o zákonnom zástupcovi</h2>
        </div>
        <table class="table table-bordered" id="datatableid">
            <thead class="alert-info">
            <th>Meno</th>
            <th>Priezvisko</th>
            <th>Zamestnávateľ</th>
            <th>Adresa zamestnávateľa</th>
            <th>Mesto zamestnávateľa</th>
            <th>Číslo telefónu</th>
            </thead>
            <thead>
            <?php include 'rodicfilter.php' ?>
            </thead>
        </table>

        <div class="domov">
            <h2>Údaje o ubytovaní</h2>
        </div>
        <table class="table table-bordered" id="datatableid">
            <thead class="alert-info">
            <th>Sektor</th>
            <th>Bunka</th>
            <th>Izba</th>
            <th>Poplatky</th>
            </thead>
            <thead>
            <?php /*include '#'*/ ?>
            </thead>
        </table>
    </div>
    <div class="domov">
        <h4>Prosíme vás o povinné doplnenie doposiaľ nezadaných údajov vo formulári nižšie.</h4>
    </div>
    <form method="post" action="../backend/signup.php">




        <div class="ziak">
            <h3>Žiak </h3>
            <label for="cislo_op">Číslo OP: </label>
            <input id="cislo_op" type="text" name="cislo_op"><br>
            <label for="rodne_cislo">Rodné číslo: </label>
            <input id="rodne_cislo" type="text" name="rodne_cislo"><br>
            <label for="cislo_poistovne">Číslo poisťovne: </label>
            <input id="cislo_poistovne" type="number" name="cislo_poistovne"><br>


        </div>
        <div class="zakonnyzastupca">
            <h3>Ubytovanie</h3>
            <label for="sektor">Sektor ubytovania: </label>
            <select  name="sektor">
                <option value="A">A</option>
                <option value="B">B</option>
            </select>
            <label for="bunka">Bunka ubytovania: </label>
            <select  name="bunka">
                <option value="AI1">AI1</option>
                <option value="AI2">AI2</option>
                <option value="AI3">AI3</option>
                <option value="AII1">AII1</option>
                <option value="AII2">AII2</option>
                <option value="AII3">AII3</option>
                <option value="AIII1">AIII1</option>
                <option value="AIII2">AIII2</option>
                <option value="AIII3">AIII3</option>
                <option value="AIV1">AIV1</option>
                <option value="AIV2">AIV2</option>
                <option value="AIV3">AIV3</option>
                <option value="AV1">AV1</option>
                <option value="AV2">AV2</option>
                <option value="AV3">AV3</option>
                <option value="AVI1">AVI1</option>
                <option value="AVI2">AVI2</option>
                <option value="AVI3">AVI3</option>

                <option value="BP1">BP1</option>
                <option value="BP2">BP2</option>
                <option value="BI1">BI1</option>
                <option value="BI2">BI2</option>
                <option value="BI3">BI3</option>
                <option value="BII1">BII1</option>
                <option value="BII2">BII2</option>
                <option value="BII3">BII3</option>
                <option value="BIII1">BIII1</option>
                <option value="BIII2">BIII2</option>
                <option value="BIII3">BIII3</option>
                <option value="BIV1">BIV1</option>
                <option value="BIV2">BIV2</option>
                <option value="BIV3">BIV3</option>
                <option value="BV1">BV1</option>
                <option value="BV2">BV2</option>
                <option value="BV3">BV3</option>
                <option value="BVI1">BVI1</option>
                <option value="BVI2">BVI2</option>
                <option value="BVI3">BVI3</option>
            </select>

            <label for="Izba">Izba ubytovania: </label>
            <select  name="Izba">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>


        </div>
        <input class="button" id="button" type="submit" name="submit" value="Uložiť údaje">



    </form>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>


<script>

    function showMenu() {
        document.querySelector('.navigation').classList.toggle('active');

        document.querySelector('.close').classList.toggle('show');
        document.querySelector('.disable').classList.toggle('hide');

    }


</script>

</body>
</html>

