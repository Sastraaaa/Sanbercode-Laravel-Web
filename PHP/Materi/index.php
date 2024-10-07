<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $hello = "<h1>hello world</h1>";
    echo $hello;

    // Macam macam print di PHP 
    echo $hello;
    print $hello;
    print_r($hello); // bisa untuk menampilkan tipe data array 
    var_dump($hello); // bisa untuk menampilkan tipe data dan panjang data (untuk debugging)

    // nge print banyak "pakai titik (.)" 
    
    $txt = 'icikiwier';
    echo '<br>'.'apa coba'.''.$txt;
    ?>
</body>
</html>
