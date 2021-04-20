<?php
    include "../Abstract Factory/PersonRepository.php";
    class LowerCaseReadPersonDecorator implements PersonRepository{
        private $instance;
        public function __construct(PersonRepository $instance) {
            $this->instance = $instance;
        }
        public function savePerson(Person $person):void {
            $this->instance->savePerson($person);
        }
        public function readPeople():array {
            $data = $this->instance->readPeople();
            foreach($data as $key => $value) {
                $data[$key] = strtolower($value);
            } 
            return $data;
        }
        public function readPerson(string $name):Person{
            $data = $this->instance->readPerson($name);
            return strtolower($data);
        }
    }