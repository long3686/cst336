<?php

function displaySymbol($randomValue,$reel)
        {
            //$randomValue = rand(0,4);
             switch($randomValue)
        {
            case 0: $symbol = "seven";
            break;
            case 1: $symbol = "lemon";
            break;
            case 2: $symbol = "orange";
            break;
            case 3: $symbol = "cherry";
        }
        
            echo "<img id= 'reel$reel' src = 'img/$symbol.png' alt = '$symbol' title = '$symbol' width = '70'/>";
        }
        
        function checkValues($value1,$value2,$value3)
        {
            echo "<div id = 'output'>";
            if ($value1 == $value2)
            {
                if ($value1 == $value3)
                {
                    if ($value1 == 0)
                    {   
                        echo "<h1>Jackpot!</h1>";
                        echo "<h2>You won 1000 points!</h2>";
                    }
                    else if ($value1 == 1)
                        echo "<h2>You won 250 points!</h2>";
                    else if ($value1 == 2 )
                        echo "<h2>You won 900 points!</h2>";
                    else
                        echo "<h2>You won 750 points!</h2>";
                }
                else 
                    echo "<h3>Try again</h3>";
            }
            else
                echo "<h3>Try again</h3>";
            echo "</div>";
        }
        function play()
        {
            $randomValue1 = rand(0,3);
            displaySymbol($randomValue1,1);
            $randomValue2 = rand(0,3);
            displaySymbol($randomValue2,2);
            $randomValue3 = rand(0,3);
            displaySymbol($randomValue3,3);
            
            checkValues($randomValue1,$randomValue2,$randomValue3);
        }
?>