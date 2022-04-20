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
    <link rel="stylesheet" type="text/css" href="../html/css/Domov.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!--TOP NAV-->

<div class="header">
    <ul>
        <li><a href="../html/Tlaciva.html">TLAČIVÁ</a></li>
        <li><a href="../Tlaciva/Informácie o poplatoch 2020_2021.docx">INFORMÁCIE O POPLATKOCH</a></li>
        <li><a href="../Tlaciva/S-63-1 Vnútorný poriadok školského internátu.pdf">PREDPISY</a></li>
    </ul>
</div>

<!--MAIN NAV-->

<div class="section">
    <div class="logo">
        <a href="../html/Main.html"><img src="../Obrazky/Group 5.svg"></a>
    </div>
    <nav class="navigation">
        <p class="line">|</p>
        <a href="../html/Main.html">DOMOV</a>
        <a href="../html/Ubytovanie.php">UBYTOVANIE</a>
        <a href="https://www.spse-po.sk/" target="_blank">STRÁNKA ŠKOLY</a>
        <a href="../html/Kontakt.html">KONTAKT</a>
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

<h1>INDEX STRANKA</h1>

<br>
Vitaj, <?php echo $data_pouzivatela['meno']; ?><br>

<?php
$sql = "select * from ziak;";
$vysledok = mysqli_query($conU,$sql);
$vysledokKontrola = mysqli_num_rows($vysledok);


if($vysledokKontrola > 0) {
    while ($row = mysqli_fetch_assoc($vysledok)) {
        echo $row['meno'] . "  ";
        echo $row['priezvisko'] . "  ";
        echo $row['rocnik'] . ".";
        echo $row['trieda'] . "  ";
        echo $row['vzdialenost_od_internatu'] . "<br>";


    }
}
?>






<!--FOOTER-->

<div class="footer">
    <ul>
        <li><h1>STREDNÁ PRIEMYSELNÁ<br>ŠKOLA<br>ELEKTROTECHNICKÁ</h1><br></li>
        <li><p>Plzenská 1<br>Prešov 080 47</p></li>
        <li>
            <a href="https://www.facebook.com/Stredn%C3%A1-priemyseln%C3%A1-%C5%A1kola-elektrotechnick%C3%A1-v-Pre%C5%A1ove-430678573666576"
               target="_blank"><img class="flex-container-footer-left-icons" src="../Icons/facebook.png"></a></li>
        <li><a href="https://twitter.com/spse_presov" target="_blank"><img class="flex-container-footer-left-icons"
                                                                           src="../Icons/twitter.png"></a></li>
        <li><a href="https://www.youtube.com/channel/UC73Gnx46wN4CBrvatJ8k1VA/featured" target="_blank"><img
                        class="flex-container-footer-left-icons" src="../Icons/youtube.png"></a></li>
    </ul>


    <ul class="odkazy">
        <li><h2>ĎALŠIE ODKAZY</h2></li>
        <li><a href="../html/Tlaciva.html">TLAČIVÁ</a></li>
        <li><a href="../Tlaciva/Informácie o poplatoch 2020_2021.docx">INFORMÁCIE O POPLATKOCH</a></li>
        <li><a href="../Tlaciva/S-63-1 Vnútorný poriadok školského internátu.pdf" target="_blank">PREDPISY</a></li>
        <li><a href="https://www.stravnici.sk/" target="_blank">STRAVOVANIE</a></li>
        <li><a href="../html/PersonalneObsadenie.html">PERSONÁLNE OBSADENIE</a></li>
    </ul>

    <ul class="logo">
        <li><img src="../Obrazky/Logo2.png"></li>
    </ul>

</div>

<script>
    function showMenu() {
        document.querySelector('.navigation').classList.toggle('active');
        document.querySelector('.menu').classList.toggle('hide');
        document.querySelector('.close').classList.toggle('show');
        document.querySelector('.domov').classList.toggle('hide');
        document.querySelector('.footer').classList.toggle('hide');
    }
</script>

</body>
</html>

