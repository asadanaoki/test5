<h1>FizzBuzz問題</h1>

<form method="post" action="./index.php" >
  <table >
<tr>
<td>FizzNum:</td><td><input type="text" name="fizznum"></td>
</tr>
<tr>
<td>BizzNum:</td><td><input type="text" name="buzznum"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="実行"></td>
</tr>
</table>
</form>
【出力】<br /><br />


  <?php
$fizznum = $_POST["fizznum"];
$buzznum = $_POST["buzznum"];
if( !is_numeric($fizznum) || !is_numeric($buzznum) || preg_match('/\./',$fizznum) || 
preg_match('/\./',$buzznum)){
  print "エラー";
  exit;
} 

for($i = 1; $i < 100; $i++){
  if($i % $fizznum === 0 && $i % $buzznum === 0){
    print "FizzBuzz {$i}<br>";
  } elseif ($i % $fizznum === 0){
    print "Fizz {$i}<br>";
  } elseif ($i % $buzznum === 0){
    print "Buzz {$i}<br>";
  }
}
?>

