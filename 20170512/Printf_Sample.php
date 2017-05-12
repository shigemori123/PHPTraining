<?php
date_default_timezone_set('Asia/Tokyo');
//フォーマット部分（ここでは%d）が２つ目の引数と交換されて出力されます。
$score = 95;
$name = "しげ";


printf( "%sの得点は%d点です<br>", $name,$score );
echo date('l jS \of F Y h:i:s A');

?>
