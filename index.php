<?php
include __DIR__.'/partials/functions.php';
$alphabet_lower = "abcdefghijklmnopqrstuwxyz";
$alphabet_upper = 'ABCDEFGHIJKLMNOPQRSTUWXYZ';
$numbers = "123456789";
$special_carchters = "/\\:;!@#$%^*()_+=|{}[]<>?~&";
$all_character = $alphabet_lower.$numbers.$special_carchters.$alphabet_upper;
$pass = '';

if (isset($_GET['number'])) {
    $number = $_GET['number'];
    if ($number < 8) {
        header('index.php');
    }
    else{
        $remaining = $number;
        $pass.= generatePass($remaining,$all_character);
        /* $pass = str_shuffle($pass); */
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
        <h3>
            la tua nuova password :
        </h3>
        <p>
            <?php echo $pass ?>
        </p>

    </form>
</body>
</html>