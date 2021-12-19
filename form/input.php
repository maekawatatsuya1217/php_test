<?php

session_start();

header('X-FRAME-OPTIONS:DENY');

  if(!empty($_SESSION)){
    echo '<pre>';
    var_dump($_SESSION);
    echo '<pre>';
  }

//   セキュリティ
  function h($str)
  {
      return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
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

        <?php
            if(!isset($_SESSION['csrfToken'])){
                $csrfToken = bin2hex(random_bytes(32));
                $_SESSION['csrfToken'] = $csrfToken;
            }
            $token = $_SESSION['csrfToken'];
        ?>

        <form method="POST" action="input.php">
            名前
            <input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo h($_POST['your_name']);}?>">
            <br>
            メールアドレス
            <input type="email" name="your_email" value="<?php if(!empty($_POST['your_email'])){echo h($_POST['your_email']);}?>">
            <br>
            <input type="submit" name="btn_confilm" value="確認画面へ">
            <input type="hidden" name="csrf" value="<?php echo $token; ?>">
        </form>
    <?php endif; ?>
    <!-- 入力画面 -->

    <!-- 確認画面 -->
    <?php if($pageFlag === 1) :?>
        <?php if($_POST['csrf']=== $_SESSION['csrfToken']) :?>
        <form method="POST" action="input.php">
            <input type="submit" name="back" value="戻る">
            名前
            <?php echo h($_POST['your_name']);?>
            <br>
            メールアドレス
            <?php echo h($_POST['your_email']); ?>
            <br>
            <input type="submit" name="btn_submit" value="送信する">
            <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']);?>">
            <input type="hidden" name="your_email" value="<?php echo h($_POST['your_email']);?>">
            <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']);?>">
        </form>
        <?php endif; ?>
    <?php endif; ?>
    <!-- 確認画面 -->

    <!-- 完了画面 -->
    <?php if($pageFlag === 2) :?>
        送信が完了しました。
        <?php unset($_SESSION['csrfToken']); ?>
    <?php endif; ?>
    <!-- 完了画面 -->

</body>
</html>