<?php
    include "Superman.php";
    $superman1 = Superman::getInstance();
    $superman2 = Superman::getInstance();
    if($superman1 === $superman2) {
        echo "There can be only one supperman: ";
        var_dump(Superman::getInstance());
    } else {
        echo "Something is wrong";
    }
