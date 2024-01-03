

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="./" method="post">
    <label for="value">Value: </label>
    <input type="text" name="value">
    <!-- <label for="currency">Currency: </label>
    <input type="text" name="currency" >   -->
    <br>
    <input type="radio" id="SEK" name="currency" value="SEK">
    <label for="SEK">SEK</label><br>
    <input type="radio" id="USD" name="currency" value="USD">
    <label for="USD">USD</label><br>
    <input type="radio" id="JPY" name="currency" value="JPY">
    <label for="JPY">JPY</label>
    <br>
    <button type="submit">submit</button>
  </form>
</body>
</html>

<?php
// var_dump($_POST);
if($_POST["currency"]){
   $cur=$_POST["currency"];
   $value=(int)$_POST["value"];
  $calc = match($cur) { 
      'SEK' => $value/11, 
      'USD' => $value/0.91, 
      'JPY' => $value/0.0064, 
  }; 
$calc=round($calc,2);
echo ($_POST["value"]."  euros is equal to $calc  $cur ");
}
?>