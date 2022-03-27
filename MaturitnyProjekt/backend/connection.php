<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prihlasovacie_udaje";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($con===false)
{
    die("Pripojenie zlyhalo");
}



$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbnameU = "ziadosti_o_prijatie";

$conU = new mysqli($dbhost, $dbuser, $dbpass, $dbnameU);