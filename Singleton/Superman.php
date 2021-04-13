<?php
    class Superman {
        public $name = "Kalel";
        public $firstName = "Clark";
        public $lastName = "Kent";

        private static $instance;

        private function __construct() {}
        private function __clone() {}
        private function __wakeup() {}

        public static function getInstance():Superman {
            if (!isset(self::$instance)) {
                self::$instance = new Superman();
            } 
            
            return  self::$instance;
        }
    }