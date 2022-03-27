<?php
$conn1=mysqli_connect("localhost", "root", "", "ziadosti_o_prijatie");
$conn2=mysqli_connect("localhost", "root", "", "ziadosti_o_prijatie");


if(!$conn1){
    die("Error: Nepodarilo sa pripojit ku databaze!");
}
if(!$conn2){
    die("Error: Nepodarilo sa pripojit ku databaze!");
}

    $id_pouzivatel=$data_pouzivatela['id_ziak'];
    $query=mysqli_query($conn1, "SELECT * FROM `ziak` WHERE `id_ziak`='$id_pouzivatel'" ) or die(mysqli_error());
    while($fetch=mysqli_fetch_array($query)){
        echo"<tr><td>".$fetch['meno']."</td><td>".$fetch['priezvisko']."</td><td>".$fetch['trieda']."</td><td>".$fetch['rocnik']."</td><td>".$fetch['adresa_bydliska']."</td><td>".$fetch['mesto_bydliska']."</td><td>".$fetch['psc']."</td><td>".$fetch['vzdialenost_od_internatu']."</td></tr>";
    }

?>