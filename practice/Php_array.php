<?php

    function displaySymbol($symbol)
    {
        echo "<img src = '../labs/lab2/img/$symbol.png' width = '70' />";
    }
    
    $symbols = array("lemon","orange","cherry");
    
    //print_r($symbols);
    
    //echo $symbols[0]; displays first value in the array
    //displaySymbol($symbols[0]);
    
    $symbols[] = "grapes";//adds element at the end
    //$symbols[2] = "seven" replaces value in the array
    
    array_push($symbols,"seven"); //adds an element at the end of the array
    //displaySymbol($symbols[4]);
    for ($i = 0;$i <count($symbols);$i++)
    {
        displaySymbol($symbols[$i]);
    }
    sort($symbols); //sorts elements in ascending order. rsort does descending order
    print_r($symbols);
    //shuffle($symbols);
    echo "<hr>";
    print_r($symbols);
    echo "<hr>";
    $lastSymbol = array_pop($symbols); //retrieves and removes last element of the array
    displaySymbol($lastSymbol);
    echo "<hr>";
    print_r($symbols);
    foreach ($symbols as $s)
    {
        displaySymbol($s);
    }
    unset($symbols[2]); //deletes a value in the array
    echo "<hr>";
    print_r($symbols);
    $symbols = array_values($symbols); //re-indexes the array
    echo "<hr>";
    print_r($symbols);
    displaySymbol($symbols[array_rand($symbols)]);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> PHP Arrays </title>
    </head>
    <body>

    </body>
</html>