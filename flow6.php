<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<form action="" method="post">
  
    <tr>
      <td><label for="jam">input waktu</label></td>
      <td><input type="number" name="waktu" id="waktu"></td>
    </tr>
    <br>
    <tr>
      <td><input type="submit" name="submit" value="hitung"></td>
    </tr>
  </form>

<?php
  if (isset($_POST['submit'])) {
    $waktu = $_POST['waktu'];
    $jam;
    $menit;
    $detik;
    $hasil;
    
    if ($waktu > 3600){
      $jam = ($waktu / 3600);
      $waktu = $waktu - ($jam * 3600);
    } else {
    $jam = 0;
   } if ($waktu > 60){
    $menit = ($waktu / 60);
    $waktu = $waktu - ($menit * 60);
   } else {
    $menit = 0;
   }

   $detik = $waktu;
   $hasil = $jam . "jam" . $menit . "menit" . $detik . "detik";
   
   echo "wktu yg di input yaitu: " . $hasil;
  }
  
  ?>

</body>
</html>