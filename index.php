<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 6-119140026</title>
</head>
<body>
<footer>  &copy; Muhammad Asyroful Nur Maulana Yusuf (119140026)</footer>
<h2>Desimal to Romawi</h2>
<form action ="index.php" method="post">
    <h4>Input Angka: <input type="text" name="number"><br></h4>
    <input type="submit" name="submit"value="Convert">
</form>
<br>
</body>
</html>

<?php
function convert($integer)
{
    $integer = intval($integer);
    $hasil = '';
    
    $ref = array('M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1);
    
    foreach($ref as $roman => $nilai){

    $matches = intval($integer/$nilai);
    
    $hasil.= str_repeat($roman,$matches);
    
    $integer = $integer % $nilai;
    }
    
    return $hasil;
}

if(isset($_POST['submit'])){
    $integer = $_POST['number'];
    echo $integer." Romawinya adalah ". convert($integer).'';
}
?>

