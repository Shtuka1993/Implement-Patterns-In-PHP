<?php
    class FSPersonRepository implements PersonRepository{
        const FILE_NAME = "PersonRepository.txt";
        const SEPARATOR = " ; ";

        public $people = [];
        public $filePath = __DIR__."/".self::FILE_NAME;

        public function savePerson(Person $person):void {
            $objectData = serialize($person);
            if (is_writable($this->filePath)) {
                $file = fopen($this->filePath, "a");
                fwrite($file, $objectData.self::SEPARATOR);
                fclose($file);
            }
        }

        public function readPeople():array {
            if (file_exists($this->filePath)) {
                $text = file_get_contents($this->filePath);
                $data = explode(self::SEPARATOR, $text);
                foreach($data as $key => $value) {
                    $obj = unserialize($value);
                    $this->people[$obj->name] = $obj;
                }
            }

            return $this->people;
        }

        public function readPerson(string $name):Person {
            if((! empty($this->people)) && (key_exists($name, $this->people))) {
                return $this->people[$name];                
            } else {
                return false;
            }
        }
    }