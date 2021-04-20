<?php
    include "Person.php";
    include "PersonRepository.php";
    include "DBPersonRepository.php";
    include "FSPersonRepository.php";

    class PersonRepositoryFactory {
        public static function createRepositorDB() {
            return new DBPersonRepository();
        }

        public static function createRepositoryFS() {
            return new FSPersonRepository();
        }
    }