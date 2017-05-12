<?php
if( empty($_SERVER["HTTP_REFERER"]) ){ // HTTP_REFERERの値がなければ以下の文を出力
  echo "リファラ値がありません。";
} else{ // HTTP_REFERERの値があればそれを出力
  echo $_SERVER["HTTP_REFERER"];
};
?>
