<!DOCTYPE html>
<html>
<?php
    $num1 = $_POST['bil1'];
    $num2 = $_POST['bil2'];

    function funct_plus($num1, $num2){
        $eq_plus = $num1 + $num2;
        return $eq_plus;
    }

    function funct_min(){
        $eq_min = $num1 - $num2;
        return $eq_min;
    }

    function funct_div(){
        $eq_div = $num1 / $num2;
        return $eq_div;
    }

    function funct_tim(){
        $eq_tim = $num1 * $num2;
        return $eq_tim;
    }

    function funct_mod(){
        $eq_mod = $num1 % $num2;
        return $eq_mod;
    }
?>

<body>
    <form action="Latihan1_119140194.php" method="post">
        bilangan 1: <input type="number" name="Bilangan1"><br></br>
        bilangan 2: <input type="number" name="Bilangan2"><br>
        <br></br>
        <input type="submit" value="Hitung">
    </form>
</body>

<html>
