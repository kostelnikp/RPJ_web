<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "prihlasovacie_udaje";


//ZIAK
$id_ziak = $_POST['id_ziak'];
$meno = $_POST['meno'];
$heslo = $_POST['heslo'];

$conn=mysqli_connect("localhost", "root", "", "prihlasovacie_udaje");

if (isset($_POST['submit'])) {
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Spojenie zlyhalo : " . $conn->connect_error);
    } else {
        if (!empty($id_ziak) && !empty($meno) && !empty($heslo) ) {
            $stmt = $conn->prepare("insert into pouzivatel(id_ziak, meno, heslo) values(?, ?, ?)");
            $stmt->bind_param("iss", $id_ziak,$meno,$heslo);
            $execval = $stmt->execute();
            echo $execval;
            header("location:../backend/admin.php");

        } else {
            print "Zadajte platné údaje!";
        }

        $conn->close();
    }
}