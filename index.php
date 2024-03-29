<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>お問い合わせ</title>
    <link rel="stylesheet" type="text/css" href="/stylesheet.css">
  </head>
  <body>
    <div class="header">
      <div class="header-left">ようこそ！</div>
        <div class="header-right">
          <ul>
            <li>概要</li>
            <li>料金</li>
            <li class="selected">お問い合わせ</li>
          </ul>
        </div>
    </div>

    <div class="main">
      <div class="contact-form">
        <div class="form-title">お問い合わせ</div>
        <form action="sent.php" method="post">

          <div class="form-item">名前</div>
          <input type="text" name="name">

          <div class="form-item">年齢</div>
          <select name="age">
            <option value="未選択">選択してください</option>
            <?php
            for($i = 10; $i <= 30; $i++) {
              echo "<option value='{$i}'>{$i}</option>";
            }
            ?>
          </select>

          <div class="form-item">お問い合わせ内容</div>
          <?php
          $types = array('サイトに関するお問い合わせ', 'サイトに対する意見', '料金に関するお問い合わせ', 'その他');
          ?>

          <select  name="category">
            <option value="未選択">選択してください</option>

            <?php
            foreach ($types as $type) {
              echo "<option value='{$type}'>{$type}</option>";
            }
            ?>
          </select>

          <div class="form-item">内容</div>
          <textarea name="body"></textarea>

          <input type="submit" value="送信">

        </form>
      </div>
    </div>

    <div class="footer">
      <div class="footer-left">
        <ul>
          <li>概要</li>
          <li>料金</li>
          <li>お問い合わせ</li>
        </ul>
      </div>
    </div>
  </body>
</html>
