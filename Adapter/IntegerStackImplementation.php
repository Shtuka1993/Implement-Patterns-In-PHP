<?php
    include "IntegerStackInterface.php";

    class IntegerStackImplementation implements IntegerStackInterface {
        private $stack = [];

        public function push(int $integer):void {
            $this->stack[] = $integer;
        }

        public function pop():int {
            return array_pop($this->stack);
        }
    }