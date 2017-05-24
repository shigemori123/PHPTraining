<!DOCTYPE html>
<link rel="stylesheet" href="stylecss.php">
<html lang="ja">


<head>

    <meta charset="UTF-8">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="stylecss.css">

</head>
<body>

	<h5>お問い合わせ</h5>
    <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
        <table>
		<tr><td align="left">姓</td>
		            <td align="left"><input type="text" name="name_sei" id="name_sei" size="5"></td></tr>


		<tr><td align="left">名</td>
		            <td align="left"><input type="text" name="name_mei" id="name_mei" size="5"></td></tr>
		<tr><td align="left">性別</td>
		            <td align="left">
			<label><input type="radio" name="gender" value="man">男性</label>
			<label><input type="radio" name="gender" value="woman">女性</label>
			<label><input type="radio" name="gender" value="unknown">不明</label></td></tr>

		<tr><td align="left">住所</td>
		            <td align="left">
			<input type="text" name="streeAddress" id="streeAddress" size="10"></td></tr>

		<tr><td align="left">電話番号</td>
		            <td align="left">
		<input type="tell" name="tell1" id="tell1" size="4">
		<label for="tell2">-</label>
		<input type="tell" name="tell2" id="tell2" size="4">
		<label for="tell3">-</label>
		<input type="tell3" name="tell3" id="tell3" size="4"></td></tr>
        <tr><td align="left">
			<label for="mail1">メールアドレス
        </td>
                    <td align="left">
            <input type="text" name="mail1" id="mail1" size="5">
			<label>@</label>
            <input type="text" name="mail2" id="mail1" size="5"></td></tr>
            <tr><td align="left">
        どこで知ったか</td>
                    <td align="left">
        <input type="checkbox" name="know[]" value="magazine"> 雑誌　
        <input type="checkbox" name="know[]" value="newspaper"> 新聞　</td></tr>
        <tr><td align="left">
        質問カテゴリ</td>
                    <td align="left">
		<input type="text" name="questionCategory" id="questionCategory" size="4"></td></tr>

        <tr><td align="left">質問内容</td></tr>
        </table>
        <table>
        <tr><td align="left"><textarea name="question" cols="50" rows="10"></textarea></td>

    </tr>
    <tr><td><input type="submit" value="送信"></td><tr>
        <tr><td><input type="reset" value="リセット"></td></tr>
    </table>



</div>
</form>
</body>
</html>
