<?php
final class Tigger {
        private static $instance;
        private $counter;

        private function __construct() {
                echo "Building character..." . PHP_EOL;
        }

        public static function getInstance(): Tigger{
                if (!self:: $instance) {
                        self::$instance = new self();
                }
                return self::$instance;
        }

        private function __clone(){}
        private function __wakeup(){}

        public function roar() {
                echo "Grrr!" . PHP_EOL;
                $this->counter++;
        }
        
        public function getCounter(){
                echo "He rugido " .$this->counter. " veces";
        }

}

?>