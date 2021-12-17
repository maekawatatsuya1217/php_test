<?php

  if(!empty($_POST)){
    echo '<pre>';
    var_dump($_POST);
    echo '<pre>';
  }

?>
<!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body>
    <form method="POST" action="input.php">
        名前
        <input type="text" name="your_name">
        <br>
        <input type="checkbox" name="fluits[]" value="リンゴ">リンゴ
        <input type="checkbox" name="fluits[]" value="バナナ">バナナ
        <input type="checkbox" name="fluits[]" value="サクランボ">サクランボ
        <br>
        <input type="submit" value="送信">
    </form>
</body>
</html>