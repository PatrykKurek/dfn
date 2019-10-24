<?php
$servername = "localhost";
$username = "srv1860";
$password = isset($_POST['haslo']) ? $_POST['haslo'] : '';
$dbname = "srv1860_pkurek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$imie=$_POST["imie1"];
$nazwisko=$_POST["nazwisko1"];
$wiek=$_POST["wiek1"];
$waga=$_POST["waga1"];
$wzrost=$_POST["wzrost1"];
$dfn_record=$_POST["dfn_record1"];
$mma_record=$_POST["mma_record1"];

$image1 =$_FILES["image"]["tmp_name"];

$file = addslashes(file_get_contents($image1)); 

$sql = "INSERT INTO zawodnicy (imie,nazwisko,wiek,waga,wzrost,dfn_record,mma_record,foto) VALUES ('$imie','$nazwisko','$wiek','$waga','$wzrost','$dfn_record','$mma_record','$file')";


if ($conn->query($sql) === TRUE) {
    echo "Dodano zawodnika";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>