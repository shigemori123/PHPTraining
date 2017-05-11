<?php
    $data[0][0]="A";
    $data[0][1]="B";
    $data[0][2]="C";
    $data[0][3]="D";
    $data[0][4]="E";
    $data[1][0]="F";
    $data[1][1]="G";
    $data[1][2]="H";
    $data[1][3]="I";
    $data[1][4]="J";
    $data[2][0]="K";
    $data[2][1]="L";
    $data[2][2]="M";
    $data[2][3]="N";
    $data[2][4]="O";
    $data[3][0]="P";
    $data[3][1]="Q";
    $data[3][2]="R";
    $data[3][3]="S";
    $data[3][4]="T";
    $data[4][0]="U";
    $data[4][1]="V";
    $data[4][2]="W";
    $data[4][3]="X";
    $data[4][4]="Y";


    for($i=0;$i<5;$i++){
        for($j=0;$j<5;$j++){
            if($data[$i][$j] == "B" or $data[$i][$j] == "F" or $data[$i][$j] == "X"){
                continue;
            }
            echo $data[$i][$j];
        }

    }








?>
