<?php
// Notice: Undefined index: m in /var/www/html/Task/task10/task10.php on line 29

$m = $_POST['m'];
$n = $_POST['n'];

$a = str_pad($m, $n, 0, STR_PAD_LEFT);
// var_dump($a);
$errors = array();

if ($m = '' or $n = '')
{
  $errors['m'] = 'mもしくはnが未入力です';
}


?>

<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>数字の出力</title>
  </head>
  <body>
  <p1>数字を入力してください</p1>
    <form action="" method="post">
      m: <input type="text" name="m">
      n: <input type="text" name="n">
      <input type="submit" value="送信"><br>
      <?php if ($errors['m']) : ?>
        <?php echo htmlspecialchars($errors, ENT_QUOTES, "utf-8"); ?>
      <?php else : ?>
        <?php echo htmlspecialchars($a, ENT_QUOTES, "utf-8"); ?>
      <?php endif; ?>
    </form>
  </body>
  </html>