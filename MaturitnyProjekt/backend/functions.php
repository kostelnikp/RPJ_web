<?php

function check_login($con)
{

    if(isset($_SESSION['id_pouzivatel']))
    {

        $id = $_SESSION['id_pouzivatel'];
        $query = "select * from pouzivatel where id_pouzivatel = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $data_pouzivatela = mysqli_fetch_assoc($result);
            return $data_pouzivatela;
        }
    }

    //redirect to login
    header("Location: ../html/Ubytovanie.php");
    die;

}


