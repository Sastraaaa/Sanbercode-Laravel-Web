<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Animal {
    public $name;
    public $legs;
    public $cold_blooded;

    public function __construct($name) {
        $this->name = $name;
        $this->legs = 4;
        $this->cold_blooded = "no";
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Legs: " . $this->legs . "<br>";
        echo "Cold blooded: " . $this->cold_blooded . "<br>";
    }
}
?>

</body>
</html>