<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $numbers = array("10","20","30") ;
    print_r($numbers);
    echo"<br>";
    $numbers[]= "40";
    print_r($numbers);
    ?>
</body>
</html>