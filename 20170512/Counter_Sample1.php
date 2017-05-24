<?php
    date_default_timezone_set('Asia/Tokyo');
    $fp = fopen( "count.txt", "r+" ); // ファイル開く
    $count = fgets( $fp, 100 ); // 9桁分値読み取り
    $count = trim($count);
    $pieces = explode(",",$count);
    $pieces[0]++; // 値+1（カウントアップ）
    $kanma = ",";

    echo "あなたは".$pieces[0]."人目のお客様です<br>";
    $weekday = array( "日", "月", "火", "水", "木", "金", "土" );


    print(date('Y m/d　('.$weekday[date("w")].date(')h:i<br>')));
    echo "<br>";
    echo "{$pieces[1]}　{$pieces[2]}/{$pieces[3]}　(".$weekday[date("w")].")　{$pieces[5]}:{$pieces[6]}";


    rewind( $fp ); // ファイルポインタを先頭に戻す
    $pieces[1]=date('Y');
    $pieces[2]=date('m');
    $pieces[3]=date('d');
    $pieces[4]=date('w');
    $pieces[5]=date('h');
    $pieces[6]=date('i');
    //echo $pieces[0];

    fputs( $fp, $pieces[0].$kanma.$pieces[1].$kanma.$pieces[2].$kanma.$pieces[3].$kanma.$pieces[4].$kanma.$pieces[5].$kanma.$pieces[6]); // 値書き込み

    fclose( $fp ); // ファイル閉じる
?>
