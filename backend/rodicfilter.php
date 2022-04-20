<?php
$conn1=mysqli_connect("localhost", "root", "", "ziadosti_o_prijatie");



if(!$conn1){
    die("Error: Nepodarilo sa pripojit ku databaze!");
}


$id_rodic=$data_pouzivatela['id_ziak'];
$query=mysqli_query($conn1, "SELECT * FROM `zakonny_zastupca` WHERE `id_zakonny_zastupca`='$id_rodic'" );
while($fetch=mysqli_fetch_array($query)){
    echo"<tr><td>".$fetch['meno']."</td><td>".$fetch['priezvisko']."</td><td>".$fetch['zamestnavatel']."</td><td>".$fetch['adresa_zamestnavatela']."</td><td>".$fetch['mesto_zamestnania']."</td><td>".$fetch['cislo_telefonu']."</td></tr>";
}

?>