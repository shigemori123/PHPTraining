<?php
$j=1;
    echo "<table border=1>";
    for($i=1;$i<=10;$i++){
        echo "<tr>";
        if($j<=10){
            //print $j;
            $a = $i*$j;
            print "<td>$a</td>";
            $j++;
        }
    echo "</tr>";

    }
    echo "</table>";
    ?>
