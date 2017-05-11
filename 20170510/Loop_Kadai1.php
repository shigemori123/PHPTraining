<?php
    echo "<table border=100>";
    for($i=1;$i<=10;$i++){
        echo "<tr>";
        for($j=1;$j<=10;$j++){
            //print $j;
            $a = $i*$j;
            print "<td>$a</td>";
        }
    echo "</tr>";

    }
    echo "</table>";
    ?>
