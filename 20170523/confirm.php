<?php
	// フォームのボタンが押されたら
		if(isset($_POST['know1'])){

	        $know1 = $_POST['know1'];

	    }else{
	        $know1 = "";
			$_POST['know1']="";

	    }
	    if(isset($_POST['know2'])){
	        $know2 = $_POST['know2'];

	    }else {
			$_POST['know2']="";
	        $know2 = "";

	    }
		// フォームから送信されたデータを各変数に格納
		$name_sei = $_POST["name_sei"];
		$name_mei = $_POST["name_mei"];
		$gender = $_POST["gender"];
		$streeAddress = $_POST["streeAddress"];
		$tell1 = $_POST["tell1"];
		$tell2 = $_POST["tell2"];
		$tell3 = $_POST["tell3"];
		$mail1  = $_POST["mail1"];
		$mail2  = $_POST["mail2"];
		//$know  = $_POST["know"];
		$questionCategory  = $_POST["questionCategory"];
		$question  = $_POST["question"];


		/*$arr_file = file("count.dat" FILE_IGNORE_NEW_LINES);
		$fp = fopen("count.data", "a");
		$num = count($arr_file);
	}


	// 送信ボタンが押されたら
	if (isset($_POST["submit"])) {
		// 送信ボタンが押された時に動作する処理をここに記述する
		//$arr_file = file("count.dat" FILE_IGNORE_NEW_LINES);
		/*$fp = fopen("count.data", "a");
		//$num = count($arr_file);
			$count = count( file( "count.data") );

			fwrite($fp, $count." ".$name_sei." ".$name_mei." ".$gender." ".$streeAddress." ".$tell1."-".$tell2."-".$tell3." ".$mail1."@".$mail2." ".$questionCategory." ".$question."\n");
		fclose($fp);
		header("Location: http://localhost/PHPTraining/20170523/thanks.php");
		exit;*/

?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" type="text/css" href="stylecss.css">
</head>
<body>

	<?php
	 //var_dump($know[1]);
	?>



<div>
	<form action="thanks.php" method="post">
		<input type="hidden" name="name_sei" value=<?= $_POST['name_sei']?>>
        <input type="hidden" name="name_mei" value=<?= $_POST['name_mei']?>>
        <input type="hidden" name="gender" value=<?= $_POST['gender']?>>
        <input type="hidden" name="streeAddress" value=<?= $_POST['streeAddress']?>>
        <input type="hidden" name="tell" value=<?= $_POST['tell1']."-".$_POST['tell2']."-".$_POST['tell3']?>>
        <input type="hidden" name="mail1" value=<?= $_POST['mail1']."@".$_POST['mail2']?>>
        <input type="hidden" name="know1" value=<?= $_POST['know1']?>>
		<input type="hidden" name="know2" value=<?= $_POST['know2']?>>
        <input type="hidden" name="questionCategory" value=<?= $_POST['questionCategory']?>>
		<?php
		$line=str_replace(" ","&nbsp",$_POST['question']);
        $line_explode=explode("\n",$line);
            for($i=0; $i < count($line_explode); $i++){
                print "<input type=\"hidden\" name=\"question[]\" value=".$line_explode[$i].">";

			}
		?>

            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
				<table>
					<tr>
                <div>
                    <td><label>性</label></td>
                    <td><p><?php echo $name_sei; ?></p></td>

                </div>
				</tr>
				<div>
                    <tr><td><label>名</label></td>
                    <td><p><?php echo $name_mei; ?></p></td></tr>
                </div>
                <div>
                    <tr><td><label>性別</label></td>
                    <td><p><?php echo $gender; ?></p></td></tr>
                </div>
				<div>
                    <tr><td><label>住所</label></td>
                    <td><p><?php echo $streeAddress; ?></p></td></tr>
                </div>
				<div>
                    <tr><td><label>電話番号</label></td>
                    <td><p><?php echo $tell1."-".$tell2."-".$tell3; ?></p></td></tr>
                </div>
                <div>
                    <tr><td><label>メールアドレス</label></td>
                    <td><p><?php echo $mail1."@".$mail2; ?></p></td></tr>
                </div>
                <div>
					<tr><td><label>どこで知ったか</label></td>


				<td><p><p><?= $know1." ".$know2; ?></p></td></tr>


					<!--<input type="hidden" name="questionCategory" value="<?php //echo $questionCategory; ?>">-->
					<!--<input type="hidden" name="question" value="<?php //echo $question; ?>">-->








                </div>
                <div>
                    <tr><td><label>質問カテゴリ</label></td>
                    <td><p><?php echo $questionCategory; ?></p></td></tr>
                </div>
                <div>
                    <tr><td><label>質問内容</label></td></tr>
					</table>
					<table>
                    <tr><td><text class="nodes" cols=50 rows=10>
						<p><?php echo str_replace("\n","<br>",$question) ?></p>
  					</textarea></td></tr>
                </div>
			</table>
            </div>
		<input type="button" value="内容を修正する" onclick="history.back(-1)">
		<button type="submit" name="submit">送信する</button>
	</form>
</div>
</body>
</html>
