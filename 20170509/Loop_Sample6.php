<?php
    for($i=0;$i<10;$i++){
        if($i==5){
            echo "5に着いた<br>";
            continue;
        }
        echo $i."<br>";
    }
    echo "<hr>";

    for($i=0;$i<10;$i++){
        if($i==5){
            echo "最後になった<br>";
            break;
        }
        echo $i."<br>";
    }
?>
