<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'animal.php';
        require_once 'Frog.php';
        require_once 'Ape.php';

        // Release 0: Animal instance
        $sheep = new Animal("shaun");
        $sheep->displayInfo();
        echo "<br>";

        // Release 1: Frog instance
        $kodok = new Frog("buduk");
        $kodok->displayInfo();
        echo "<br>";

        // Release 1: Ape instance
        $sungokong = new Ape("kera sakti");
        $sungokong->displayInfo();
    ?>

</body>
</html>