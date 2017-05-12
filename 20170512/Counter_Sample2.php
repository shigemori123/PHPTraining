<?php
    $fp = fopen( "count.php", "r+" ); // ファイル開く
    $count = fgets( $fp, 10 ); // 9桁分値読み取り
    $count = trim($count);
    $count++; // 値+1（カウントアップ）
    $name = "しげ";
    rewind( $fp ); // ファイルポインタを先頭に戻す
    fputs( $fp, $count ); // 値書き込み
    fclose( $fp ); // ファイル閉じる
    printf("%".$count."人目のお客様です");
?>
