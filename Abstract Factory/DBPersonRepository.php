<?php
    class DBPersonRepository implements PersonRepository{
        public function savePerson(Person $person):void {
            
        }

        public function readPeople():array {
            return [];
        }

        public function readPerson(string $name):Person {
            return new Person($name, 1, $name."1");
        }
    }