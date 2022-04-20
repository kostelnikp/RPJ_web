<?php

session_start();

if(isset($_SESSION['id_pouzivatela']))
{
	unset($_SESSION['id_pouzivatela']);

}

header("Location: ../html/Ubytovanie.php");
die;