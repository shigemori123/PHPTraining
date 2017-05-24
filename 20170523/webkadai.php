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
		            <td align="left"><input type="text" name="name_sei"  size="5" required></td></tr>


		<tr><td align="left">名</td>
		            <td align="left"><input type="text" name="name_mei" id="name_mei" size="5" required></td></tr>
		<tr><td align="left">性別</td>
		            <td align="left">
			<label><input type="radio" name="gender" value="男性">男性</label>
			<label><input type="radio" name="gender" value="女性">女性</label>
			<label><input type="radio" name="gender" value="不明">不明</label></td></tr>

		<tr><td align="left">住所</td>
		            <td align="left">
			<input type="text" name="streeAddress" id="streeAddress" size="10"></td></tr>

		<tr><td align="left">電話番号</td>
		            <td align="left">
		<input type="text" name="tell1" required pattern="^[0-9]+$" size="4" required>
		<label for="tell2">-</label>
		<input type="text" name="tell2" required pattern="^[0-9]+$" size="4" required>
		<label for="tell3">-</label>
		<input type="text" name="tell3" required pattern="^[0-9]+$" size="4"  required></td></tr>
        <tr><td align="left">
			<label for="mail1">メールアドレス
        </td>
                    <td align="left">
            <input type="email" name="mail1" required pattern="/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/" size="5" required>
			<label>@</label>
            <input type="email" name="mail2" required pattern="/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/" size="5" required></td></tr>
            <tr><td align="left">
        どこで知ったか</td>
                    <td align="left">
        <input type="checkbox" name="know[]" value="雑誌"> 雑誌　
        <input type="checkbox" name="know[]" value="新聞"> 新聞　</td></tr>
        <tr><td align="left">
        質問カテゴリ</td>
                    <td align="left">
		<input type="text" name="questionCategory" size="4"></td></tr>

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
