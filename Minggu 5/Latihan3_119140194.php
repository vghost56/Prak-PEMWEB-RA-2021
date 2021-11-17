<?php 
    function prima($data){
        for($n=1; $n <= $data; $n++){
            $temp = true;

            if($n == 2){
                echo " $n ";
            }

            else if($n != 1){
                $limit = ($n-1);
                for($j=2; $j < $limit; $j++){
                    if($n%$j == 0){
                        $temp = false;
                        break;
                    }
                }

                if($temp == true){
                    echo " , $n ";
                }
            }

        }
    }

    echo "<p> Bilangan prima dari 1 - 50 adalah : ";
    echo "<br>";
    prima(50);
?>