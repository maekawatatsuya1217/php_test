<?php

  if(!empty($_POST)){
    echo '<pre>';
    var_dump($_POST);
    echo '<pre>';
  }

  $pageFlag = 0;

  if(!empty($_POST['btn_confilm'])){
      $pageFlag = 1;
  }

  if(!empty($_POST['btn_submit'])){
      $pageFlag = 2;
  }

?>
<!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body>

    <!-- 入力画面 -->
    <?php if($pageFlag === 0) : ?>
        <form method="POST" action="input.php">
            名前
            <input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo $_POST['your_name'];}?>">
            <br>
            メールアドレス
            <input type="email" name="your_email" value="<?php if(!empty($_POST['your_email'])){echo $_POST['your_email'];}?>">
            <br>
            <input type="submit" name="btn_confilm" value="確認画面へ">
        </form>
    <?php endif; ?>
    <!-- 入力画面 -->

    <!-- 確認画面 -->
    <?php if($pageFlag === 1) :?>
        <form method="POST" action="input.php">
            <input type="submit" name="back" value="戻る">
            名前
            <?php echo $_POST['your_name'];?>
            <br>
            メールアドレス
            <?php echo $_POST['your_email']; ?>
            <br>
            <input type="submit" name="btn_submit" value="送信する">
            <input type="hidden" name="your_name" value="<?php echo $_POST['your_name'];?>">
            <input type="hidden" name="your_email" value="<?php echo $_POST['your_email']; ?>">
        </form>
    <?php endif; ?>
    <!-- 確認画面 -->

    <!-- 完了画面 -->
    <?php if($pageFlag === 2) :?>
        送信が完了しました。
    <?php endif; ?>
    <!-- 完了画面 -->

</body>
</html>