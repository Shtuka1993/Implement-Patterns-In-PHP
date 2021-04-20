<?php
    include "ASCIIStackInterface.php";
    include "IntegerStackImplementation.php";
    class Adapter implements ASCIIStackInterface {
        private $adaptee;

        public function __construct(IntegerStackInterface $adaptee)
        {
            $this->adaptee = $adaptee;
        }
  
        public function push(string $char):void {
            $data = (int)$char;
            $this->adaptee->push($data);
        }

        public function pop():string {
            $data = $this->adaptee->pop();
            $result = (string)$data;

            return $result;
        }
    }