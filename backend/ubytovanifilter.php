<?php
$conn1=mysqli_connect("localhost", "root", "", "prihlasovacie_udaje");



if(!$conn1){
    die("Error: Nepodarilo sa pripojit ku databaze!");
}


$query=mysqli_query($conn1, "SELECT * FROM `pouzivatel` WHERE `id_pouzivatel`>='2'" ) or die(mysqli_error());
while($fetch=mysqli_fetch_array($query)){
    echo"<tr><td>".$fetch['id_pouzivatel']."</td><td>".$fetch['id_ziak']."</td><td>".$fetch['meno']."</td><td>".$fetch['heslo']."</td></tr>";
}

?>