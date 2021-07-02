<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Simple Calculator</title>
</head>
<body>
  <h1>Simple Calculator</h1>
  <form action="index.php" method="post">
      1st number:<input type="number" step="0.001" name="num1" id="num1"><br><br>
      Operator:<input type="text" name="op" id="op" placeholder="+ - / *"><br><br>
      2nd number:<input type="number" name="num2" id= "num2"><br><br>
      <input type="submit" name="submit" value="Answer"id="submit">
  </form>
    
  <?php

    if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $op = $_POST['op'];
    $num2 = $_POST['num2'];
  
    $op;

    switch($op){
      case '+':
        echo 'The answer is: '. $num1 + $num2;
        break;
      case '-':
        echo 'The answer is: '. $num1 - $num2;
        break;
      case '/':
        echo 'The answer is: '. $num1/$num2;
        break;
      case '*':
        echo 'The answer is: '. $num1 * $num2;
        break;
      default:
        echo 'invalid operator';
    }
  }
?>

</body>
</html>