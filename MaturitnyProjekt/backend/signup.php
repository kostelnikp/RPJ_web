<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ziadosti_o_prijatie";


//ZIAK
$meno = $_POST['meno'];
$priezvisko = $_POST['priezvisko'];
$rocnik = $_POST['rocnik'];
$trieda = $_POST['trieda'];
$adresa_bydliska = $_POST['adresa_bydliska'];
$mesto_bydliska = $_POST['mesto_bydliska'];
$psc = $_POST['psc'];
$vzdialenost_od_internatu = $_POST['vzdialenost_od_internatu'];

//ZAKONNY ZASTUPCA
$menoZ = $_POST['menoZ'];
$priezviskoZ = $_POST['priezviskoZ'];
$zamestnavatel = $_POST['zamestnavatel'];
$adresa_zamestnavatela = $_POST['adresa_zamestnavatela'];
$mesto_zamestnania = $_POST['mesto_zamestnania'];
$cislo_telefonu = $_POST['cislo_telefonu'];

// Spojenie
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn === false) {
    die("Pripojenie zlyhalo");
}


if (isset($_POST['submit'])) {
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Spojenie zlyhalo : " . $conn->connect_error);
    } else {
        if (!empty($meno) && !empty($priezvisko) && !empty($rocnik) && !empty($trieda) &&
            !empty($adresa_bydliska) && !empty($mesto_bydliska) && !empty($psc) &&
            !empty($vzdialenost_od_internatu) && !empty($menoZ) && !empty($priezviskoZ)
            && !empty($adresa_zamestnavatela) && !empty($zamestnavatel) && !empty($mesto_zamestnania)
            && !empty($cislo_telefonu) && is_numeric($psc) && is_numeric($cislo_telefonu)) {
            $stmt = $conn->prepare("insert into ziak(meno, priezvisko, rocnik, trieda, adresa_bydliska, mesto_bydliska, psc, vzdialenost_od_internatu) values(?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssisssii", $meno, $priezvisko, $rocnik, $trieda, $adresa_bydliska, $mesto_bydliska, $psc, $vzdialenost_od_internatu);
            $execval = $stmt->execute();
            $stmt = $conn->prepare("insert into zakonny_zastupca(meno, priezvisko, zamestnavatel, adresa_zamestnavatela, mesto_zamestnania, cislo_telefonu) values(?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssi", $menoZ, $priezviskoZ, $zamestnavatel, $adresa_zamestnavatela, $mesto_zamestnania, $cislo_telefonu);
            $execval = $stmt->execute();
            echo $execval;
            print "Registrácia úspešná!";

        } else {
            print "Zadajte platné údaje!";
        }

        $conn->close();
    }
}


?>



