<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8"></meta>
  <title>Document</title>
</head>
<body>
  <h1>FizzBuzz問題</h1>
  <form method="post"> 
  <label>FizzNum:<input type="text" name="fizznum"><br /></label> 
  <label>BizzNum:<input type="text" name="buzznum"><br /></label> 
  <input type="submit" value="実行"></input>
  </form>
  <p>【出力】</p>

<?php
$fizznum = $_POST['fizznum'];
$buzznum = $_POST['buzznum'];
if (!is_numeric($fizznum) || !is_numeric($buzznum) || preg_match('/\./', $fizznum) ||
    preg_match('/\./', $buzznum)) {
?>
<ul >
  <li> <?php echo 'エラー';?><li>
</ul>
<?php exit;
}
?>
<ul style="list-style-type: none; margin:0; padding:0;">
 <?php for ($i = 1; $i < 100; ++$i) {
    if ($i % $fizznum === 0 && $i % $buzznum === 0) {
  ?> 
      <li><?php echo "FizzBuzz {$i}";?></li> 
      <?php
    } elseif ($i % $fizznum === 0) {
    ?>
      <li><?php echo "Fizz {$i}";?></li>
    <?php
    } elseif ($i % $buzznum === 0) {
    ?>
      <li><?php echo "Buzz {$i}";?></li>
  <?php 
    }
  }
  ?>
</ul>
</body>
</html>