<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $meno = $_POST['meno'];
    $heslo = $_POST['heslo'];

    if (!empty($meno) && !empty($heslo) && !is_numeric($meno)) {

        $sql = "select * from pouzivatel where meno = '$meno' limit 1";


        $result = mysqli_query($con, $sql);


        $row = mysqli_fetch_array($result);


        if ($row["id_pouzivatel"] === "1") {
            if ($row['heslo'] == $heslo) {

                $_SESSION['id_pouzivatel'] = $row['id_pouzivatel'];


                header("location:../backend/admin.php");

                die;
            }
            else if (!empty($heslo)) header("location:../html/Ubytovanie.php");

            else {
                header("location:../html/Ubytovanie.php");
                die;
            }

        }
        else if ($row["typ_pouzivatela"] != "1") {
            if ($row['heslo'] == $heslo) {

                $_SESSION['id_pouzivatel'] = $row['id_pouzivatel'];


                header("location:../backend/pouzivatel.php");

                die;
            }
            else {
                header("location:../html/Ubytovanie.php");

                die;
            }
        }
        else {
            header("location:../html/Ubytovanie.php");
            die;
        }


    }
}



