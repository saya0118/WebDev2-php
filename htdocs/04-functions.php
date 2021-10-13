<?php

    /*
        1) Camel Case - myFunction() ---recommended
        2) Lower Case - my_function()
        3)Pascal Case - MyFunction() ---used for classes
    */

    function simpleFunction(){
        echo 'Hello World' . '<br>';
    }

    simpleFunction();

    //function with params
    function sayHello($name = 'Sekai'){
        echo "Hello $name<br>";
    }

    sayHello('Joe');
    sayHello();

    //Return value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    echo addNumbers(5,6);

    //By reference
    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";

    addTen($myNum);
    echo "Value: $myNum<br>";