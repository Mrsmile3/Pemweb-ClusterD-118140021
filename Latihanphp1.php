<!DOCTYPE html>
<html>
<head><title>Latihan Calculator</title></head>
<body>
    <form method="POST" action="Latihanphp1.php">
    Bilangan 1 = <input type="number" name="bil1"><br>
    Bilangan 2 = <input type="number" name="bil2"><br>
    <input type="submit" name="hasil" value="hasil">
    </form>    
</body>
</html>
<?php
if(isset($_POST['hasil'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    echo "bilangan 1 = ".$bil1."<br>";
    echo "bilangan 2 = ".$bil2."<br>";
    echo "<br>";
    echo "Berikut merupakan hasil dari setiap operasi<br>";
    echo "PENJUMLAHAN<br>";
    echo "Operator : +<br>";
    echo "Hasil :".$bil1 + $bil2."<br>";
    echo "<br>";
    echo "PENGURANGAN<br>";
    echo "Operator : -<br>";
    echo "Hasil :".$bil1 - $bil2."<br>";
    echo "<br>";
    echo "PERKALIAN<br>";
    echo "Operator : *<br>";
    echo "Hasil :".$bil1 * $bil2."<br>";
    echo "<br>";
    echo "PEMBAGIAN<br>";
    echo "Operator : /<br>";
    echo "Hasil :".$bil1 / $bil2."<br>";
    echo "<br>";
    echo "MODULUS<br>";
    echo "Operator : %<br>";
    echo "Hasil :".$bil1 % $bil2."<br>";
}?>