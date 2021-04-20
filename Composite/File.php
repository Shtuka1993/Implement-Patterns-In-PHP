<?php
    include "FileSystemEntity.php";
    class File implements FileSystemEntity {
        private $name;
        private $size;

        public function __construct($name, $size) {
            $this->name = $name;
            $this->size = $size;
        }

        public function getName():string {
            return $this->name;
        }

        public function getSize():int {
            return $this->size;
        }
    }