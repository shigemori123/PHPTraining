確認画面

<?php
    if(isset($_POST['where01'])){
        $where01 = $_POST["where01"];
    }else{
        $where01 = "";
    }
    if(isset($_POST['where02'])){
        $where02 = $_POST["where02"];
    }else {
        $where02 = "";
    }
    $last_name = $_POST["last_name"];
    $first_name = $_POST["first_name"];
    $gender = $_POST["gender"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $tel01 = $_POST["phone01"];
    $tel02 = $_POST["phone02"];
    $tel03 = $_POST["phone03"];
    $mail01 = $_POST["mail01"];
    //$mail02 = $_POST["mail02"];
    $category = $_POST["category"];
    $question = $_POST["question"];
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<br>
<br>
<hr>
<title>お問い合わせフォーム</title>
</head>
<body>
<link rel="stylesheet" href="Web_design.css">
<center>
    <form action="Web04.php" method="post">
        <input type="hidden" name="last_name" value=<?= $_POST['last_name']?>>
        <input type="hidden" name="first_name" value=<?= $_POST['first_name']?>>
        <input type="hidden" name="gender" value=<?= $_POST['gender']?>>
        <input type="hidden" name="address" value=<?= $_POST['address']?>>
        <input type="hidden" name="phone" value=<?= $_POST['phone01']."-".$_POST['phone02']."-".$_POST['phone03']?>>
        <input type="hidden" name="mail01" value=<?= $_POST['mail01']?>>
        <input type="hidden" name="where01" value=<?= $_POST['where01']?>>
        <input type="hidden" name="where02" value=<?= $_POST['where02']?>>
        <input type="hidden" name="category" value=<?= $_POST['category']?>>
        <?php
        $sige=str_replace(" ","&nbsp",$_POST['question']);
        $mintia=explode("\n",$sige);
            for($i=0; $i < count($mintia); $i++){
                print "<input type=\"hidden\" name=\"question[]\" value=".$mintia[$i].">";
            }
        ?>
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div class="table">
            <table class="type01" border="0" bordercolor="A9085B" text-align="center" width="500px">
            <tr><td width="50%">
                    <label class="mark_4">性</label>
            </td><td width="50%">
                     <p><?php echo $last_name; ?></p>
            </td></tr>
            <tr><td>
                    <label class=mark_4>名</label>
            </td><td>
                    <p><?php echo $first_name; ?></p>
            </td></tr>
            <tr><td>
                    <label class=mark_4>性別</label>
            </td><td>
                    <p><?php echo $gender; ?></P>
            </td></tr>
            <tr><td>
                    <label class=mark_4>住所</label>
            </td><td>
                    <p><?php echo $address; ?></p>
            </td></tr>
            <tr><td>
                    <label class=mark_4>電話番号</label>
            </td><td>
                    <p><?php echo $tel01 ."-". $tel02 ."-". $tel03; ?></p>
            </td></tr>
            <tr><td>
                    <label class="mark_4">メールアドレス</label>
            </td><td>
                    <p><?php echo $mail01 ?></p>
            </td></tr>
            <tr>
                <td>
                    <label class="mark_4">どこで知ったか</label>
                </td>
				<td>
                    <p><?= $where01." ".$where02; ?>
                </td>
            </tr>
            <tr><td>
                    <label class="mark_4">質問カテゴリ</label>
            </td><td>
                    <p><?php echo $category; ?></p>
            </td></tr>
            <tr><td width="50" height="80">
                    <label class="mark_4">質問内容</label>
            </td><td width="100">
                    <p><?php echo str_replace("\n","<br>",$question) ?></p>
            </td></tr>
        </table>
        </div>
        <br>
        <input class="button" type="button" value="編集" onclick="history.back(-1)">
        <input class="button" type="submit"　value="送信" name="submit">
    </form>
    <hr>
</center>
</body>
</html>
