<?php
session_start();

if (!isset($_SESSION['username'])){
  header("Location: login.php");
  
    
}

 include("../dbConnection.php");
 $conn = getDatabaseConnection();

function getPokemonInfo($pokemonId) {
    global $conn;    
    $sql = "SELECT * 
            FROM Pokemon
            WHERE pokemonId = $pokemonId";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch();
    //print_r($record);
    return $record;
}

if (isset($_GET['deletePokemonForm'])){
    //the administrator clicked on the "Add User" button
    $pokemonId = $_GET['pokemonId'];
    $pokemonName = $_GET['pokemonName'];
    
    $sql = "DELETE
            FROM Pokemon
            WHERE pokemonId = :pokemonId";
    $namedParameters = array();
    $namedParameters[":pokemonId"] = $_GET['pokemonId'];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    
    echo "<script>
    alert('Pokemon has been deleted successfully!')
    </script>";
            
}

if (isset($_GET['deleteId'])) {
    
    $pokemonInfo = getPokemonInfo($_GET['pokemonId']);
    
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
                $("#back").click(function(){
                  //this will find the selected website from the dropdown
                  var go_to_url = $("#back").val();
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
        <h2>Enter the data of the Pokemon you want to delete from the Pokedex</h2>
        <form>
            Pokemon Id Number: <input type = "text" name = "pokemonId"  value ="<?=$pokemonInfo['pokemonId']?>"><br>
            <input type="submit" name="deleteId" value="Update Id"/><br>
            Pokemon Name: <input type="text" name="pokemonName" value ="<?=$pokemonInfo['pokemonName']?>"/> <br>
                <input type="submit" name="deletePokemonForm" value="Delete Pokemon!"/>
        </form>
        <button type="button" id = "back" class="btn btn-danger btn-lg" value = "adminPage.php">Go Back</button>
    
        <button type="button" id = "out" class="btn btn-danger btn-lg" value = "logoff.php">Log Out</button>
 </div>
</body>
</html>