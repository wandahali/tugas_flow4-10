<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  
<form action="" method="post">
    <table>
    <tr>
      <td>input Bilangan</td>
      <td><input type="number" value="input bilangan" name="blngn"></td>
    </tr>
    <br>
    <tr>
      <td><input type="submit" value="hitung" name="submit"></td>
    </tr>
  </form>
</table>
<?php
  if (isset($_POST['submit'])) {
    $blngn = $_POST['blngn'];

    $satuan = $blngn % 10;
    $puluhan = ($blngn / 10 ) % 10;
    $ratusan = $blngn / 100;

    echo "Ratusan = $ratusan<br>";
    echo "Puluhan = $puluhan<br>";
    echo "Satuan = $satuan<br>";
  }
  ?>
</body>
</html>