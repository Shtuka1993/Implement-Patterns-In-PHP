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

    /*$repository2 = PersonRepositoryFactory::createRepositoryDB();

    $people11 = new Person("1Test1", 12, "1Address1");
    $people12 = new Person("2Test2", 21, "2Address2");
    $people13 = new Person("3Test3", 121, "3Address3");
    $people14 = new Person("4Test4", 123, "4Address4");
    $people15 = new Person("5Test5", 212, "5Address5");

    $repository2->savePerson($people11);
    $repository2->savePerson($people12);
    $repository2->savePerson($people13);
    $repository2->savePerson($people14);
    $repository2->savePerson($people15);

    $peoples2 = $repository2->readPeople();

    var_dump($peoples2);

    $person2 = $repository2->readPerson("1Test1");

    var_dump($person2);*/

    
    