<!DOCTYPE html>
<html>
    <head>
        <title> Pokemon Professor Login </title>
        <meta charset- "utf-8"/>

        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
       
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <header>
              <h1> Pokemon Professor Login </h1>
        </header>
        <form method="post">
        Username: <input type="text" name="username" /> <br />
        Password: <input type="password" name="password"  />
        <input type = "submit" name ="loginForm" value = "Login"/> 
        </form>
        <?php
            include 'login.php';
        ?>
      
    </body>
</html>