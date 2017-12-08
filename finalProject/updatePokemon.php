<?php
session_start();

if (!isset($_SESSION['username'])){
  header("Location: login.php");
  
    
}

 include("../../dbConnection.php");
 $conn = getDatabaseConnection("pokemon");

function getPokemonInfo($pokemonId) {
    global $conn;    
    $sql = "SELECT * 
            FROM pokemon
            WHERE pokemonId = $pokemonId";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch();
    //print_r($record);
    return $record;
}

if (isset($_GET['addPokemonForm'])){
    //the administrator clicked on the "Add User" button
    $pokemonId = $_GET['pokemonId'];
    $pokemonName = $_GET['pokemonName'];
    $type1 = $_GET['type1'];
    $type2 = $_GET['type2'];
    $preEvolution1 = $_GET['preEvolution1'];
    $preEvolution2 = $_GET['preEvolution2'];
    $evolution1 = $_GET['evolution1'];
    $evolution2 = $_GET['evolution2'];
    
    $sql = "UPDATE pokemon
            SET
            pokemonName = :pokemonName,
            type1Id = :type1,
            type2Id = :type2,
            preEvolution1Id = :preEvolution1,
            preEvolution2Id = :preEvolution2,
            evolution1Id = :evolution1, 
            evolution2Id = :evolution2
            WHERE pokemonId = :pokemonId";
    $namedParameters = array();
    $namedParameters[':pokemonName'] =  $pokemonName;
    $namedParameters[':type1'] =  $type1;
    $namedParameters[':type2'] =  $type2;
    $namedParameters[':preEvolution1'] =  $preEvolution1;
    $namedParameters[':preEvolution2'] = $preEvolution2;
    $namedParameters[':evolution1']  = $evolution1;
    $namedParameters[':evolution2']   = $evolution2;
    $namedParameters[":pokemonId"] = $_GET['pokemonId'];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
    
    echo "<script>
    alert('Pokemon has been updated successfully!')
    </script>";
            
}

if (isset($_GET['updateId'])) {
    
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
        <h2>Enter the data of the Pokemon you want to update</h2>
        <form>
            Pokemon Id Number: <input type = "text" name = "pokemonId"  value ="<?=$pokemonInfo['pokemonId']?>"><br>
            <input type="submit" name="updateId" value="Update Id"/><br>
            Pokemon Name: <input type="text" name="pokemonName" value ="<?=$pokemonInfo['pokemonName']?>"/> <br>
            Pokemon Type 1: <select name="type1">
                    <option value="">Select One</option>
                    <option value="1"> Normal</option>
                    <option value="2"> Fighting</option>
                    <option value="3"> Flying</option>
                    <option value="4"> Poison</option>
                    <option value="5"> Ground</option>
                    <option value="6"> Rock</option>
                    <option value="7"> Bug</option>
                    <option value="8"> Ghost</option>
                    <option value="9"> Steel</option>
                    <option value="10"> Fire</option>
                    <option value="11"> Water</option>
                    <option value="12"> Grass</option>
                    <option value="13"> Electric</option>
                    <option value="14"> Psychic</option>
                    <option value="15"> Ice</option>
                    <option value="16"> Dragon</option>
                    <option value="17"> Dark</option>
                    <option value="18"> Fairy</option>
                </select><br />
                Pokemon Type 2: <select name="type2">
                    <option value="">Select One</option>
                    <option value="">N/A</option>
                    <option value="1"> Normal</option>
                    <option value="2"> Fighting</option>
                    <option value="3"> Flying</option>
                    <option value="4"> Poison</option>
                    <option value="5"> Ground</option>
                    <option value="6"> Rock</option>
                    <option value="7"> Bug</option>
                    <option value="8"> Ghost</option>
                    <option value="9"> Steel</option>
                    <option value="10"> Fire</option>
                    <option value="11"> Water</option>
                    <option value="12"> Grass</option>
                    <option value="13"> Electric</option>
                    <option value="14"> Psychic</option>
                    <option value="15"> Ice</option>
                    <option value="16"> Dragon</option>
                    <option value="17"> Dark</option>
                    <option value="18"> Fairy</option>
                </select><br />
                
                Previous Evolved Form ID: <input type="text" name="preEvolution1"/> <br>
                Second Previous Evolved Form ID: <input type="text" name="preEvolution2"/> <br>
                Evolved Form ID: <input type="text" name="evolution1"/> <br>
                Second Evolved Form ID: <input type="text" name="evolution2"/> <br>
                <input type="submit" name="addPokemonForm" value="Update Pokemon!"/>
        </form>
        <button type="button" id = "back" class="btn btn-danger btn-lg" value = "adminPage.php">Go Back</button>
    
        <button type="button" id = "out" class="btn btn-danger btn-lg" value = "logoff.php">Log Out</button>
 </div>
</body>
</html>