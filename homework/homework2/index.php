<!DOCTYPE html>
<html>
    <head>
        <title> Chess Opening Randomizer </title>
        
        <style>
            @import url("css/styles.css");
        </style>
        <?php
         include 'inc/functions.php';
        ?>
    </head>
    <body>
        <div id = "fact">
            <?php
                playFact();
            ?>
        </div>
        <div id ="main">
            <?php
               play();
            ?>
            <form>
                <input type="Submit" value="Play Again!"/>
            </form>
        </div>
        
    </body>
</html>