<?php
	// フォームのボタンが押されたら
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
		$know  = $_POST["know"];
		$questionCategory  = $_POST["questionCategory"];
		$question  = $_POST["question"];
	}

	// 送信ボタンが押されたら
	if (isset($_POST["submit"])) {
		// 送信ボタンが押された時に動作する処理をここに記述する

		// 日本語をメールで送る場合のおまじない
        	mb_language("ja");
		mb_internal_encoding("UTF-8");

		//mb_send_mail("kanda.it.school.trial@gmail.com", "メール送信テスト", "メール本文");

        	// 件名を変数subjectに格納
        	$subject = "［自動送信］お問い合わせ内容の確認";

        	// メール本文を変数bodyに格納
		$body = <<< EOM
{$name}　様

お問い合わせありがとうございます。
以下のお問い合わせ内容を、メールにて確認させていただきました。

===================================================
【 お名前 】
{$name}

【 ふりがな 】
{$furigana}

【 メール 】
{$email}

【 電話番号 】
{$tel}

【 性別 】
{$sex}

【 項目 】
{$item}

【 内容 】
{$content}
===================================================

内容を確認のうえ、回答させて頂きます。
しばらくお待ちください。
EOM;

		// 送信元のメールアドレスを変数fromEmailに格納
		$fromEmail = "contact@dream-php-seminar.com";

		// 送信元の名前を変数fromNameに格納
		$fromName = "お問い合わせテスト";

		// ヘッダ情報を変数headerに格納する
		$header = "From: " .mb_encode_mimeheader($fromName) ."<{$fromEmail}>";

		// メール送信を行う
		mb_send_mail($email, $subject, $body, $header);

 		// サンクスページに画面遷移させる
		header("Location: http://testapp.hippy.jp/contact/thanks.php");
		exit;
	}
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" type="text/css" href="stylecss.css">
</head>
<body>
	<?php
	 var_dump($know[1]);
	?>



<div>
	<form action="confirm.php" method="post">
            <input type="hidden" name="name_sei" value="<?php echo $name_sei; ?>">
            <input type="hidden" name="name_mei" value="<?php echo $name_mei; ?>">
            <input type="hidden" name="gender" value="<?php echo $gender; ?>">
            <input type="hidden" name="streeAddress" value="<?php echo $streeAddress; ?>">
            <input type="hidden" name="tell1" value="<?php echo $tell1; ?>">
			<input type="hidden" name="tell2" value="<?php echo $tell2; ?>">
			<input type="hidden" name="tell3" value="<?php echo $tell3; ?>">
			<input type="hidden" name="mail1" value="<?php echo $mail1; ?>">
            <input type="hidden" name="mail2" value="<?php echo $mail2; ?>">
            <input type="hidden" name="know" value="<?php echo $know; ?>">
			<input type="hidden" name="questionCategory" value="<?php echo $questionCategory; ?>">
			<input type="hidden" name="question" value="<?php echo $question; ?>">
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
					<td><p><?php echo $know[0]?></p></td></tr>





                </div>
                <div>
                    <tr><td><label>質問カテゴリ</label></td>
                    <td><p><?php echo $questionCategory; ?></p></td></tr>
                </div>
                <div>
                    <tr><td><label>質問内容</label></td>
                    <td><p><?php echo $question; ?></p></td></tr>
                </div>
			</table>
            </div>
		<input type="button" value="内容を修正する" onclick="history.back(-1)">
		<button type="submit" name="submit">送信する</button>
	</form>
</div>
</body>
</html>
