<?php

$pass = '';
$number = '';
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    if ($number < 8) {
        header('index.php');
    }
    else{
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ";
        $numbers = "123456789";
        $special_carchters = "'/\\:;!@#$%^*()_+=|{}[]<>,?~`&.";
        $array = $alphabet.$numbers.$special_carchters;
        
        
        for ($i = 0; $i < 1; $i++) {
            $arrayLength = strlen($alphabet) - 1; 
            $n = rand(0, $arrayLength);
            $pass .= strtoupper($alphabet[$n]).' ';
        }
        for ($i = 0; $i < 1; $i++) {
            $arrayLength = strlen($alphabet) - 1; 
            $n = rand(0, $arrayLength);
            $pass .= strtolower($alphabet[$n]).' ';
        }
        for ($i = 0; $i < 1; $i++) {
            $arrayLength = strlen($numbers) - 1; 
            $n = rand(0, $arrayLength);
            $pass .= $numbers[$n].' ';
        }
        for ($i = 0; $i < 1; $i++) {
            $arrayLength = strlen($special_carchters) - 1; 
            $n = rand(0, $arrayLength);
            $pass .= $special_carchters[$n].' ';
        }
        for ($i = 0; $i < ($number-4); $i++) {
            $arrayLength = strlen($array) - 1; 
            $n = rand(0, $arrayLength);
            $pass .= $array[$n].' ';
        }
        
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="number" name='number' id='number'>
        <button type ='submit'></button>
        <?php echo "<h3>La tua password è: {$pass}</h3>"; ?>
    </form>
</body>
</html>