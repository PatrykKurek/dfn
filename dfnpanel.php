<?php

session_start();
require_once('dbconnect.php');   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
                <form action="" method="post" enctype="multipart/form-data" class="dane">
                    <ul>
                        <li>                            
                            <input type="text" name="imie1" class="dane_input" placeholder="Imię" required />
                            <input type="text" name="nazwisko1" class="dane_input" placeholder="Nazwisko" required />
                            <input type="text" name="wiek1" class="dane_input" placeholder="rok urodzenia" required />
                            <input type="text" name="waga1" class="dane_input" placeholder="waga" required />
                            <input type="text" name="wzrost1" class="dane_input" placeholder="wzrost w cm" required />
                            <input type="text" name="dfn_record1" class="dane_input" placeholder="dfn rekord w formacie x-x-x" required />
                            <input type="text" name="mma_record1"class="dane_input" placeholder="mma rekord w formacie x-x-x" required />
                            <input type="submit" id="insert" class="dane_input" value="dodaj" />
                        </li>
                    </ul>
                </form>
    <?php  

        if(isset($imie))
        {
            $imie=$_POST["imie1"];
            $nazwisko=$_POST["nazwisko1"];
            $wiek=$_POST["wiek1"];
            $waga=$_POST["waga1"];
            $wzrost=$_POST["wzrost1"];
            $dfn_record=$_POST["dfn_record1"];
            $mma_record=$_POST["mma_record1"];            
            $sql = "INSERT INTO zawodnicy (imie,nazwisko,wiek,waga,wzrost,dfn_record,mma_record) VALUES ('$imie','$nazwisko','$wiek','$waga','$wzrost','$dfn_record','$mma_record')";


            if ($conn->query($sql) === TRUE) 
            {
                echo "Dodano zawodnika";
            } 
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
       
    ?>

</body>

</html>
