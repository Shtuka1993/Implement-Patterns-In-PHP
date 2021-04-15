<?php
    include "File.php";

    class Directory extends File {
        private $filesystem = [];

        public function add(FileSystemEntity $fsEntity):void {
            $this->filesystem[$fsEntity->getName()] = $fsEntity;
        }

        public function remove(FileSystemEntity $fsEntity):void {
            unset($this->filesystem[$fsEntity->getName()]);
        }

        public function listContent():array {
            return $this->filesystem;
        }
    }