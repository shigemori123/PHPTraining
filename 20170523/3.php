問合せ完了

<!DOCTYPE html>
<html>
    <head>
        <!--
            問合せ完了

            問合せフォーム → (入力内容を初期化して)問合せフォーム Web01.php
        -->
        <title>お問い合わせ終了</title>
        <link rel="stylesheet" type="text/css" href="Web_design.css">
    </head>

    <body>
        <center>
                <!--問い合わせ内容表示-->


                <hr>
                <div class="ttt">
                <h1>お問い合わせ完了</h1><hr>

            <!--問合せ番号カウンタ・問い合わせ内容保存(csv形式)-->
            <?php
                $fp = fopen( "count.csv", "r+" );
                //$str=trim(fgets($fp));
                $count = -1;
                while(($tmp=fgets($fp))!=false){
                    $str = $tmp;
                    $str = trim($str);
                    $count = explode(",",$str)[0];
                }
                $count++;
                $output = $count;
                $data = $_POST;
                $data['last_name'] = $data['last_name']." ".$data['first_name'];
                unset($data['first_name']);
                //print $data['question'];
                foreach($data as $key => $p){
                    if(isset($p) and is_array($p)){
                        $output .= ",";
                        foreach($p as $a){
                            if($key == "question"){
                                $output .= $a."<br>";
                            }else{
                                $output .= $a." ";
                            }
                        }
                        $output = rtrim($output);
                        $output = rtrim($output,"<br>");
                    }elseif($key != "submit" and $p != "送信"){
                        $output .= ",".$p;
                    }
                }

                fputs( $fp, $output."\n");
                fclose( $fp );
            ?>


            お問い合わせ番号：<?= $count?><br>

            <hr>
            <a href="Web01.php">問合せフォーム</a>
        </div>
        <center>
    </body>
</html>
