<?php
    
    include 'inc/functions.php';
    $backgroundImage = "img/dice.jpg";
    echo "<div class = 'main'>";
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    makeCharacterName($firstName,$lastName);
    $charItem = $_GET['item'];
    $charStat = $_GET['stat'];
    echo "<br>";
    chooseCharacterClass($charItem,$charStat);
    $charGB = $_GET['goodBad'];
    $charLC = $_GET['lawChaos'];
    echo "<br>";
    getAlignment($charGB,$charLC);
    echo "</div>";
    
?>


<!DOCTYPE html>
<html>
    <head>
        <title> RPG Character Creator </title>
        <meta charset- "utf-8"/>
        <style>
        
            @import url("css/styles.css");
            
            body
            {
                background-image: url('<?= $backgroundImage?>');
            }
            
        </style>
    </head>
    <body>
        <header>
              <h1> RPG Character Creator </h1>
        </header>
        <div>
            <h2>
                <form>
                    <input type="text" name="firstName" placeholder = "enter your real first name"/> <br> <br>
                    <input type="text" name="lastName" placeholder = "enter your real last name"/> <br> <br>
                     What item does your character carry? <br>
                    <select name = "item"> <br>
                        <option value = "">Select an item</option>
                        <option value = "sword">Sword</option>
                        <option value = "wand">Wand</option>
                        <option value = "dagger">Dagger</option>
                        <option value = "shield">Shield</option>
                    </select> <br>
                    What attribute does your character have the most of? <br>
                    <input type = "radio" id = "stren" name = "stat" value = "strength">
                    <label for "stren"></label><label for="stren"> Strength</label>
                    <input type = "radio" id = "speed" name = "stat" value = "speed" >
                    <label for = "speed"></label><label for = "speed"> Speed </label>
                    <input type = "radio" id = "intel" name = "stat" value = "intellect" >
                    <label for = "intel"></label><label for = "intel"> Intellect </label> <br>
                    What joys does your character partake in? <br>
                    <select name = "goodBad"> <br>
                        <option value = "">Select one</option>
                        <option value = "good">The joy of helping others</option>
                        <option value = "evil">The joy of taking life from your enemies</option>
                        <option value = "neutral">The joy of letting life take you where it will</option>
                    </select> <br>
                    What does your character think about rules? <br>
                    <select name = "lawChaos"> <br>
                        <option value = "">Select one</option>
                        <option value = "lawful">Rules are in place to be followed</option>
                        <option value = "chaotic">Rules are meant to be broken</option>
                        <option value = "neutral">Rules can be bent to fit my needs</option>
                    </select> <br> <br>
                    <input type="submit" value="Create Character"/>
                </form>
            </h2>
        </div>
    </body>
</html>