<?php
//関数の宣言
function local() {
    $var_local = "Hello ";
    // グローバル変数の参照宣言
    global $var_global;
    echo $var_local . $var_global ."\n";
}
$var_global = "world";
// 関数の呼び出し
local();
echo $var_local ;
 ?>
