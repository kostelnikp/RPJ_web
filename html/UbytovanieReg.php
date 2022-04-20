<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Ubytovanie SPŠE PREŠOV</title>
    <link rel="icon" href="../Obrazky/Logo2.png">
    <link rel="stylesheet" type="text/css" href="../html/css/Main.css">
    <link rel="stylesheet" type="text/css" href="../html/css/Ubytovanie.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
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
        <a href="Ubytovanie.php">UBYTOVANIE</a>
        <a href="https://www.spse-po.sk/" target="_blank">STRÁNKA ŠKOLY</a>
        <a href="../html/Kontakt.html">KONTAKT</a>
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

<!--REGISTRACIA-->

<div class="ubytovanie">
    <h2>Žiadosť o ubytovanie</h2>
        <form method="post" action="../backend/signup.php">

            <div class="ziak">
                <h3>Žiak </h3>
                <label for="meno">Meno: </label>
                <input id="meno" type="text" name="meno"><br>
                <label for="priezvisko">Priezvisko: </label>
                <input id="priezvisko" type="text" name="priezvisko"><br>
                <label for="rocnik">Ročník, ktorý bude navštevovať: </label>
                <input id="rocnik" type="number" min="1" max="4" name="rocnik"><br>
                <label for="trieda">Trieda, ktorú bude navštevovať: </label>
                <select  name="trieda">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="SA">SA</option>
                    <option value="SB">SB</option>
                    <option value="SC">SC</option>
                    <option value="F">F</option>
                </select>
                <label for="adresa_bydliska">Adresa bydliska: </label>
                <input id="adresa_bydliska" type="text" name="adresa_bydliska"><br>
                <label for="mesto_bydliska">Mesto bydliska: </label>
                <input id="mesto_bydliska" type="text" name="mesto_bydliska"><br>
                <label for="psc">PSČ: </label>
                <input id="psc" type="text" name="psc"><br>
                <label for="vzdialenost_od_internatu">Vzdialenosť od internátu(km): </label>
                <input id="vzdialenost_od_internatu" type="number" name="vzdialenost_od_internatu">
            </div>
            <div class="zakonnyzastupca">
                <h3>Zákonný zástupca</h3>
                <label for="menoZ">Meno: </label>
                <input id="menoZ" type="text" name="menoZ"><br>
                <label for="priezviskoZ">Priezvisko: </label>
                <input id="priezviskoZ" type="text" name="priezviskoZ"><br>
                <label for="zamestnavatel">Zamestnávateľ: </label>
                <input id="zamestnavatel" type="text" name="zamestnavatel"><br>
                <label for="adresa_zamestnavatela">Adresa zamestnávateľa: </label>
                <input id="adresa_zamestnavatela" type="text" name="adresa_zamestnavatela"><br>
                <label for="mesto_zamestnania">Mesto zamestnania: </label>
                <input id="mesto_zamestnania" type="text" name="mesto_zamestnania"><br>
                <label for="cislo_telefonu">Číslo telefónu: </label>
                <input id="cislo_telefonu" type="text" name="cislo_telefonu"><br><br><br>
            </div>
            <input class="button" id="button" type="submit" name="submit" value="Požiadať o ubytovanie">
            <a href="Ubytovanie.php">Prihlásiť sa</a><br><br>


        </form>

</div>


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
        document.querySelector('.ubytovanie').classList.toggle('hide');
        document.querySelector('.footer').classList.toggle('hide');
    }



</script>
</body>
</html>