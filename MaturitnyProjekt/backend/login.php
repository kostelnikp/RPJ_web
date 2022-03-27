<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $meno = $_POST['meno'];
    $heslo = $_POST['heslo'];

    if (!empty($meno) && !empty($heslo) && !is_numeric($meno)) {

        $sql = "select * from pouzivatel where meno = '$meno' limit 1";


        $result = mysqli_query($con, $sql);


        $row = mysqli_fetch_array($result);


        if ($row["typ_pouzivatela"] == "ziak") {
            if ($row['heslo'] === $heslo) {

                $_SESSION['id_pouzivatel'] = $row['id_pouzivatel'];


                header("location:../backend/pouzivatel.php");

                die;
            } else {
                header("location:../backend/pouzivatel.php");
                die;
            }


        } elseif ($row["typ_pouzivatela"] == "admin") {


            if ($row['heslo'] === $heslo) {

                $_SESSION['id_pouzivatel'] = $row['id_pouzivatel'];


                header("location:../backend/admin.php");

                die;
            } else {
                header("location:../html/Ubytovanie.php");

                die;
            }

        } else {

            header("location:../html/Ubytovanie.php");
            die;
        }


    }
}

?>

