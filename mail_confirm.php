<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <title>お問合わせフォーム</title>
</head>
<body>
  <h1>お問合わせ内容確認</h1>
  <div class="confirm">
    <p>
      お問い合わせ内容はこちらで宜しいでしょうか？
      <br>
      よろしければ「送信する」ボタンを押して下さい。
    </p>
    <p>
      <label for="">名前</label>
      <br>
      <?php echo $_POST['name']; ?>
    </p>
    <p>
      <label for="">メールアドレス</label>
      <br>
      <?php echo $_POST['mail']; ?>
    </p>
    <p>
      <label for="">年齢</label>
      <br>
      <script>
        if (<?php echo $_POST['age'] ?> != null) {
          document.write("<?php echo $_POST['age']."歳"; ?>");
        }
      </script>      
    </p>
    <p>
      <label for="">コメント</label>
      <br>
      <?php echo $_POST['comments']; ?>
    </p>
    <div class="btn">
      <form action="index.html">
        <input type="submit" class="btn_back" value="戻って修正する">
      </form>
      <form action="insert.php" method="post">
        <input type="submit" class="btn_regist" value="登録する">
        <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
        <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
        <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
      </form>
      </div>
  </div>
</body>
</html>