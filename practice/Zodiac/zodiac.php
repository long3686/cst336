<?php

    function yearList($startYear, $endYear)
    {
        $zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");
        $sum = 0;
        $ii = 0;
        for ($i = $startYear; $i < $endYear; $i++)
        {
            echo "<li> Year ". $i." ";
            if($i == 1776)
                echo "USA INDEPENDENCE ";
            if ($i % 100 == 0)
                echo " HAPPY NEW CENTURY ";
            echo "</li>";
            if ($i >= 1900 && $i%4 ==0)
            {
               echo "<img src = img/".$zodiac[$ii].".png ";
               $ii++;
            }
            $sum = $sum + $i;
            if($ii>11)
                $ii = 0;
        }
        return $sum;
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Zodiac Website </title>
        <meta charset- "utf-8"/>
        <style>
        
        </style>
    </head>
    <body>
        <header>
              <h1> Chinese Zodiac List</h1>
              
              <ul>
                  
              <h2>   
              <?php 
              
                    $sum=yearList($_GET["start"],$_GET["end"]);
                     
                     echo "<h1> Year Sum " .$sum. "</h1>";
                      
               ?> 
              </h2>
                  
              </ul>
              
        </header>
      
    </body>
</html>