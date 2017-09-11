<!DOCTYPE html>
<html>
    <head>
        <title> Challenge Website </title>
        <meta charset- "utf-8"/>
        <?php
            include 'function.php';
            
        ?>
        
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id = "main">
        <header>
            <h1> Random Card Game </h1>
        </header>
        <h2> Human Computer</h2>
        
            <?php play(); ?>
        </div>
    </body>
</html>