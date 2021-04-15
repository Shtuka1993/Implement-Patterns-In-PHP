<?php
    include "Adapter.php";

    $adaptee = new IntegerStackImplementation();

    $adapter = new Adapter($adaptee);

    $adapter->push("23fsfsd23");
    echo $adapter->pop();