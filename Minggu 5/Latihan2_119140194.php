<?php
    function sortd($ar_data){
        $tot = count($ar_data);
        for($i=1; $i < $tot; $i++){
            for($j=0; $j < $tot-$i; $j++){
                if( $ar_data[$j] > $ar_data[$j+1]){
                    $temp = $ar_data[$j];
                    $ar_data[$j] = $ar_data[$j+1];
                    $ar_data[$j+1] = $temp;
                }
            }
        }
        return $ar_data;
    }
    
    function cout($ar_data){
        $tot = count($ar_data);
        for($i=0; $i < $tot; $i++){
            echo "$ar_data[$i] ";
            if($i != $tot-1){
                echo "- ";
            }
        }
        echo "</p>";
    }
    

    $ar_data = array('larine', 'aduh', 'qifuat', 'toda', 'anevi', 'samid', 'kifuat');
    
    echo "<p>Sebelum sorting : <br>";
    cout($ar_data);
    echo "<br>"
    echo "<p>Sesudah sorting : <br>";
    $ar_data = sortd($ar_data);
    cout($ar_data);
?>