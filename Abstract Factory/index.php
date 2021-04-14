<?php
    include "PersonRepositoryFactory.php";

    $repository1 = PersonRepositoryFactory::createRepositoryFS();

    $people1 = new Person("Test1", 12, "Address1");
    $people2 = new Person("Test2", 21, "Address2");
    $people3 = new Person("Test3", 121, "Address3");
    $people4 = new Person("Test4", 123, "Address4");
    $people5 = new Person("Test5", 212, "Address5");

    $repository1->savePerson($people1);
    $repository1->savePerson($people2);
    $repository1->savePerson($people3);
    $repository1->savePerson($people4);
    $repository1->savePerson($people5);

    $peoples1 = $repository1->readPeople();

    var_dump($peoples1);

    $person1 = $repository1->readPerson("Test1");

    var_dump($person1);


    
    