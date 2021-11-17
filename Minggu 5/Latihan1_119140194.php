<!DOCTYPE html>
<html>
<?php
    $num1 = $_POST['bil1'];
    $num2 = $_POST['bil2'];

    function funct_plus($num1, $num2){
        $eq_plus = $num1 + $num2;
        echo $eq_plus;
    }

    function funct_min(){
        $eq_min = $num1 - $num2;
        echo $eq_min;
    }

    function funct_div(){
        $eq_div = $num1 / $num2;
        echo $eq_div;
    }

    function funct_tim(){
        $eq_tim = $num1 * $num2;
        echo $eq_tim;
    }

    function funct_mod(){
        $eq_mod = $num1 % $num2;
        echo $eq_mod;
    }
?>

<body>
    <form action="Latihan1_119140194.php" method="post">
        bilangan 1: <input type="number" name="Bilangan1"><br><br>
        bilangan 2: <input type="number" name="Bilangan2"><br>
        <input type="submit" value="Hitung">
    </form>

    <br><h3>Berikut merupakan hasil dari setiap operasi</h3><br>

    <br><h3>PENJUMLAHAN</h3>
    <br><h3>Operator : +</h3>
    <br><h3>Hasil : </h3>
    <h3><?php funct_plus() ?><h3><br><br>

    <br><h3>PENGURANGAN</h3>
    <br><h3>Operator : -</h3>
    <br><h3>Hasil : </h3>
    <h3><?php funct_min() ?><h3><br><br>

    <br><h3>PERKALIAN</h3>
    <br><h3>Operator : *</h3>
    <br><h3>Hasil : </h3>
    <h3><?php funct_tim() ?><h3><br><br>

    <br><h3>PEMBAGIAN</h3>
    <br><h3>Operator : /</h3>
    <br><h3>Hasil : </h3>
    <h3><?php funct_div() ?><h3><br><br>

    <br><h3>MODULUS</h3>
    <br><h3>Operator : %</h3>
    <br><h3>Hasil : </h3>
    <h3><?php funct_mod() ?><h3>
</body>

<html>
