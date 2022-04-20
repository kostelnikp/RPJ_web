<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ziadosti_o_prijatie";

$conU = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect("localhost","root","","ziadosti_o_prijatie")) {
    if(isset($_POST['delete']))
    {
        $id_pouzivatel = $_POST['delete_id'];
        $query = "DELETE FROM `ziak` WHERE `id_ziak`='$id_pouzivatel'";
        $result=mysqli_query($conU,$query);
        header("location:../backend/admin.php");
        $conU->close();
    }
}
else
{
    error_log("Failed to connect to database!", 0);
}







