

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
    <br>
    <select name="from" id="from">
      <option value="EUR">euro</option>
      <option value="SEK">swedish krona</option>
      <option value="RON">RON</option>
      <option value="USD">USD</option>
      <option value="JPY">japanese yen</option>
    </select>
    <select name="to" id="to">
      <option value="EUR">euro</option>
      <option value="SEK">swedish krona</option>
      <option value="RON">RON</option>
      <option value="USD">USD</option>
      <option value="JPY">japanese yen</option>
    </select>
    <br>
    <button type="submit">submit</button>
  </form>
</body>
</html>

<?php
  // var_dump($_POST);
   $cur=$_POST["to"];
   $from=$_POST["from"];
   $value=(int)$_POST["value"];
  $value = match($cur) { 
      'SEK' => $value*11.18, 
      'EUR' => $value, 
      'USD' => $value/0.91, 
      'JPY' => $value/0.0064, 
      'RON' =>$value*4.5,
  }; 
  $value = match($from) { 
      'SEK' => $value/11.18, 
      'EUR' => $value, 
      'USD' => $value*0.91, 
      'JPY' => $value*0.0064, 
      'RON' =>$value/4.5,
  }; 
$value=round($value,2);
echo ($_POST["value"].$from ." is equal to $value  $cur ");
?>