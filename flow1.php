<?php
    $bilangan_pertama;
    $bilangan_kedua;
    $bilangan_ketiga;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        <table>
    <tr>
        <td>bilangan pertama</td>
        <td></td>
        <td><input type="number" name="bil_satu"></td>
    </tr>
    <tr>
        <td>bilangan kedua</td>
        <td></td>
        <td><input type="number" name="bil_kedua"></td>
    </tr>
    <tr>
        <td>bilangan ketiga</td>
        <td></td>
        <td><input type="number" name="bil_ketiga"></td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="cari" name="submit"></td>
    </tr>
</table>
<?php
if(isset($_POST['submit'])) {
    $bilangan_pertama = $_POST['bil_satu'];
    $bilangan_kedua = $_POST['bil_kedua'];
    $bilangan_ketiga = $_POST['bil_ketiga'];

    if ($bilangan_pertama > $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
        echo $bilangan_pertama;
    } else if ($bilangan_kedua > $bilangan_pertama && $bilangan_kedua > $bilangan_ketiga) {
        echo $bilangan_kedua;
    } else if ($bilangan_ketiga > $bilangan_pertama && $bilangan_ketiga > $bilangan_kedua) {
        echo $bilangan_ketiga;
    }
     
    else if ($bilangan_pertama == $bilangan_kedua && $bilangan_pertama > $bilangan_ketiga) {
        echo "nilai 1 2 sama besar";
    } else if ($bilangan_pertama == $bilangan_ketiga  && $bilangan_pertama > $bilangan_kedua ) {
        echo "nilai 2 3 sama besar";
    } else if ($bilangan_kedua == $bilangan_ketiga && $bilangan_kedua > $bilangan_pertama  ) {
        echo "nilai 3 4 sama besar";
    }
    else {
        echo "sama besar";
    }
}
?>
</form>
</body>
</html>