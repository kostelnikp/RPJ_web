<?php
$conn = mysqli_connect("localhost", "root", "", "ziadosti_o_prijatie");

if (!$conn) {
    die("Error: Nepodarilo sa pripojit ku databaze!");
}
if (ISSET($_POST['filter'])) {
    $trieda = $_POST['trieda'];
    $rocnik = $_POST['rocnik'];

    if ($trieda == "null") {
        $query = mysqli_query($conn, "SELECT * FROM `ziak` WHERE `rocnik`='$rocnik'");

        while ($fetch = mysqli_fetch_array($query)) {
            echo "<tr><td>" . $fetch['id_ziak'] . "</td><td>" . $fetch['meno'] . "</td><td>" . $fetch['priezvisko'] . "</td><td>" . $fetch['trieda'] . "</td><td>" . $fetch['rocnik'] . "</td><td>" . $fetch['vzdialenost_od_internatu'] . "</td><td>" . $fetch['datum'] . "</td></tr>";
        }
    } else if ($rocnik == "null") {
        $query = mysqli_query($conn, "SELECT * FROM `ziak` WHERE trieda='$trieda'");
        while ($fetch = mysqli_fetch_array($query)) {
            echo "<tr><td>" . $fetch['id_ziak'] . "</td><td>" . $fetch['meno'] . "</td><td>" . $fetch['priezvisko'] . "</td><td>" . $fetch['trieda'] . "</td><td>" . $fetch['rocnik'] . "</td><td>" . $fetch['vzdialenost_od_internatu'] . "</td><td>" . $fetch['datum'] . "</td></tr>";
        }
    }
    else if ($rocnik == "null" && $trieda == "null") {
        $query = mysqli_query($conn, "SELECT * FROM `ziak`");
        while ($fetch = mysqli_fetch_array($query)) {
            echo "<tr><td>" . $fetch['id_ziak'] . "</td><td>" . $fetch['meno'] . "</td><td>" . $fetch['priezvisko'] . "</td><td>" . $fetch['trieda'] . "</td><td>" . $fetch['rocnik'] . "</td><td>" . $fetch['vzdialenost_od_internatu'] . "</td><td>" . $fetch['datum'] . "</td></tr>";
        }
    }
    else {
        $query = mysqli_query($conn, "SELECT * FROM `ziak` WHERE `rocnik`='$rocnik' and trieda='$trieda'");
        while ($fetch = mysqli_fetch_array($query)) {
            echo "<tr><td>" . $fetch['id_ziak'] . "</td><td>" . $fetch['meno'] . "</td><td>" . $fetch['priezvisko'] . "</td><td>" . $fetch['trieda'] . "</td><td>" . $fetch['rocnik'] . "</td><td>" . $fetch['vzdialenost_od_internatu'] . "</td><td>" . $fetch['datum'] . "</td></tr>";

        }
    }
}
else
    if (ISSET($_POST['reset'])) {
        $query = mysqli_query($conn, "SELECT * FROM `ziak`");
        while ($fetch = mysqli_fetch_array($query)) {
            echo "<tr><td>" . $fetch['id_ziak'] . "</td><td>" . $fetch['meno'] . "</td><td>" . $fetch['priezvisko'] . "</td><td>" . $fetch['trieda'] . "</td><td>" . $fetch['rocnik'] . "</td><td>" . $fetch['vzdialenost_od_internatu'] . "</td><td>" . $fetch['datum'] . "</td></tr>";
        }
    } else {
        $query = mysqli_query($conn, "SELECT * FROM `ziak`");
        while ($fetch = mysqli_fetch_array($query)) {
            echo "<tr><td>" . $fetch['id_ziak'] . "</td><td>" . $fetch['meno'] . "</td><td>" . $fetch['priezvisko'] . "</td><td>" . $fetch['trieda'] . "</td><td>" . $fetch['rocnik'] . "</td><td>" . $fetch['vzdialenost_od_internatu'] . "</td><td>" . $fetch['datum'] . "</td></tr>";
        }
    }
    ?>