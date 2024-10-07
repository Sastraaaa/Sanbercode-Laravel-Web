<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // string biasa
    echo 'hallow brow';
    echo'<br>'; 

    // strlen() untuk menghitung panjang string
    echo strlen('tetap santuy broku');
    echo '<br>';

    // strcmp() untuk membandingkan kesamaan di antara dua variable string. outputnya boolean
    $passwordasli = 'belajar';
    $passwordinput = 'belajar';
    $output = strcmp($passwordinput, $passwordasli);
    if ($output !== 0) {
        echo 'password anda salah';
    } else {
        echo 'password anda benars';
    }

    ?>
</body>
</html>