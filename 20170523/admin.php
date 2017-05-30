<html>
    <head>
        <!--
            管理画面
            count.csvの内容をもとに問合せ一覧を表示。
        -->
        <title>管理</title>
        <link rel="stylesheet" type="text/css" href="stylecss.css">
    </head>

    <body>
        <center>

            <h1>管理画面</h1>


                <lavel>お問い合わせ一覧</lavel>
                <table border=1 class="type11">
                <tr class="sample">
                    <th align="center">No.</th>
                    <th align="center">氏名</th>
                    <th align="center">性別</th>
                    <th align="center">住所</th>
                    <th align="center">電話番号</th>
                    <th align="center">メールアドレス</th>
                    <th align="center" colspan="2">どこで知ったか</th>
                    <th align="center">質問カテゴリ</a></th>
                    <th align="center">質問内容</th>
                </tr>

            <?php
                $fp = fopen( "count.csv", "r+" );
                while(($line=fgets($fp))!=false){
                    $data = explode(",",$line);
                    ?><tr><?php
                    for($i=0;$i<10;$i++){?>
                        <td><?php echo $data[$i]; ?></td><?php
                    }?>
                </tr><?php
                }
                fclose( $fp );
            ?>

            </table>
        <center>
    </body>
</html>
