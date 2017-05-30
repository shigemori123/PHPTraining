<?php
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを各変数に格納
    if($_POST["know"]=="なし"){
        $know = "なし";
    }else{
        $know  = $_POST["know"];
    }
    //$name_sei = $_POST["name_sei"];
    //$name_mei = $_POST["name_mei"];
    $gender = $_POST["gender"];
    $streeAddress = $_POST["streeAddress"];
    $tell = $_POST["tell"];
    $mail  = $_POST["mail1"];
    //$know  = $_POST["know"];
    $questionCategory  = $_POST["questionCategory"];
    $question  = $_POST["question"];

    /*$arr_file = file("count.dat" FILE_IGNORE_NEW_LINES);
    $fp = fopen("count.data", "a");
    $num = count($arr_file);

}*/






 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body>
<div>
        <div>
		<h1>お問い合わせ 送信完了</h1>
        <?php
                $fp = fopen( "count.csv", "r+" );
                //$str=trim(fgets($fp));
                $count = 0;
                while(($tmp=fgets($fp))!=false){
                    $str = $tmp;
                    $str = trim($str);
                    $count = explode(",",$str)[0];
                }
                $count++;
                $output = $count;
                $data = $_POST;
                $data['name_sei'] = $data['name_sei']." ".$data['name_mei'];
                unset($data['name_mei']);
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
		<a href="webkadai.php">
			<button type="button">お問い合わせに戻る</button>
		</a>
	</div>
</div>
</body>
</html>
