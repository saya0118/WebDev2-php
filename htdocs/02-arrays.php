<?php

    /*
        -Indexed
        -Associative
        -Multi-dimensional
    */

    //Indexed
    $people = array('Kevin', 'Jeremy', 'Sara');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'BMW'];

    echo print_r($people) . '<br>';//----> Array([0]=> Kevin, [1]=>Jeremy, [2]=>Sara)
    echo print_r($ids) . '<br>';
    echo print_r($cars) . '<br>';

    echo $people[1];//----> Jeremy
    echo count($cars); //---> 3
    var_dump($cars); //---> checking data type

    //Associative
    $people1 = array('Brad' => 35, 'Jose' => 32, 'William' =>25);
    $ids1 = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    echo $people1['Brad'];//--->35
    echo $ids1[44];//--->Jose

    $people1['Jill'] = 18;
    echo $people1['Jill'];//--->18

    //Multi-dimensional - nested array

    $cars1 = array(
        array('Honda', 20, 10), //name | sold | available
        array('Toyota', 5, 20),
        array('BMW', 20, 5)
    );

    echo $cars1[1][2]; //--->20
?>