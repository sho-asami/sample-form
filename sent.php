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
      <div class="thanks-message">お問い合わせありがとうございます。</div>
       <div class="display-contact">

        <div class="form-title">入力内容</div>

        <div class="form-item">▫️ 名前</div>
        <!-- nameとbodyとageとcategoryを受け取る処理 -->
        <?php echo $_POST['name']; ?>

        <div class="form-item">年齢</div>
        <?php echo $_POST['age']; ?>

        <div class="form-item">お問い合わせの種類</div>
        <?php echo $_POST['category']; ?>

        <div class="form-item">▫️ 内容</div>
        <?php echo $_POST['body']; ?>

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
