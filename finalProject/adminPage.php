<?php
session_start();

if (!isset($_SESSION['username'])){
  header("Location: login.php");
}

?> 
<html>
    <head>
        <title> Who's that pokemon? </title>
        <meta charset- "utf-8"/>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
       
        <style>
            @import url("css/styles.css");
        </style>
        <script>
                
                 $(document).ready(  function(){
                //this will be triggered when the first button was clicked
                $("#add").click(function(){
                  //this will find the selected website from the dropdown
                  var go_to_url = $("#add").val();
                  //this will redirect us in same window
                  document.location.href = go_to_url;
                });
                $("#update").click(function(){
                  //this will find the selected website from the dropdown
                  var go_to_url = $("#update").val();
                  //this will redirect us in same window
                  document.location.href = go_to_url;
                });
                $("#delete").click(function(){
                  //this will find the selected website from the dropdown
                  var go_to_url = $("#delete").val();
                  //this will redirect us in same window
                  document.location.href = go_to_url;
                });
                
                $("#out").click(function(){
                  //this will find the selected website from the dropdown
                  var go_to_url = $("#out").val();
                  //this will redirect us in same window
                  document.location.href = go_to_url;
                });
                 
            } ); //documentReady
            
        </script>
    </head>
<body>
  <div>
        <h1>Welcome Professor <?=$_SESSION['adminName']?></h1>
        <h2>What would you like to do?</h2>
        <button type="button" id = "add" class="btn btn-danger btn-lg" value = "addPokemon.php">Add Pokemon</button>
        
        <button type="button" id = "update" class="btn btn-danger btn-lg" value = "updatePokemon.php">Update Pokemon</button>
        
        <button type="button" id = "delete" class="btn btn-danger btn-lg" value = "deletePokemon.php">Delete Pokemon</button>
        
        <button type="button" id = "out" class="btn btn-danger btn-lg" value = "logoff.php">Log Out</button>
 </div>
</body>
</html>
