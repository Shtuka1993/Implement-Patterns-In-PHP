<?php
    class DBPersonRepository implements PersonRepository{
        const DB_HOST = "localhost";
        const DB_NAME = "PersonRepository";
        const DB_TABLE = "People";
        const DB_USER = "root";
        const DB_PASS = "root";
        
        public function savePerson(Person $person):void {
            
        }

        public function readPeople():array {
            return [];
        }

        public function readPerson(string $name):Person {
            return new Person($name, 1, $name."1");
        }
    }