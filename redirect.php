<?php
include __DIR__.'/partials/functions.php';

session_start();

$pass = generatePass($_SESSION['remaining'],$_SESSION['character']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h3>
            la tua nuova password :
        </h3>
        <p>
            <?php echo $pass ?>
        </p>
</body>
</html>