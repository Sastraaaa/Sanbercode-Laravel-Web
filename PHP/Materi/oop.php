<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // public class
    class Mobil {
        public $roda =4;
        public function jalan(){
            echo $this->roda;
        }
    }

    $mini = new Mobil();
    echo $mini->jalan();
    echo "<br>";

    // private class
    class Motor {
        private $roda = 4;
        private function jalan(){
            echo "Berjalan cuyy <br>";
        }
    }

    $honda = new Motor();
    echo $honda->jalan();
    echo "<br>";

    // Protected Class
    class Kapal {
        protected $penumpang = 5;
    }
    
    class kapalPesiar extends Kapal {
        protected function berlayar() {
            echo "Kapal membawa " . $this->penumpang . " penumpang";
        }
    }
    
    $kapalLaut = new kapalPesiar();
    echo $kapalLaut->berlayar();
    
    ?>
</body>
</html>