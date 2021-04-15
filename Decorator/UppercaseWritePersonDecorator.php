<?php
    include "../Abstract Factory/PersonRepository.php";
    include "../Abstract Factory/Person.php";
    class UppercaseWritePersonDecorator implements PersonRepository{
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
                $data[$key] = strtoupper($value);
            } 
            return $data;
        }
        public function readPerson(string $name):Person {
            $data = $this->instance->readPerson($name);
            return strtoupper($data);
        }
    }