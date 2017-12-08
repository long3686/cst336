<!DOCTYPE html>
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
        </script>
        
<script>
    
    function getPokemon()
    {
        $.ajax({
        
        type: "GET",
        url: "api/getPokemonInfo.php",
        dataType: "json",
        data: { "typeId": $("#typeOption").val() },
        success: function(data,status) {
        //alert(data.length);
        $("#pokemonOption").html("<option> Select One </option>");
        for (var i = 0; i < data.length;i++)
        {
            $("#pokemonOption").append("<option value = '"+ data[i].pokemonId+ "'>"+data[i].pokemonName+"</option>");
        }
        
        },
        complete: function(data,status) { //optional, used for debugging purposes
        //alert(status);
        }
        
        });//ajax
    }
    function displayPicture()
    {
        
        $.ajax({
        type: "GET",
        url: "api/getPicture.php",
        dataType: "json",
        data: { "id": $("#pokemonOption").val() },
        success: function(data,status) {
        //alert(data.pokemonName);
        //$("#picture").html(data.pokemonName)
        $("#picture").html("<img src = 'img/" + data.pokemonName + ".png' />")
        
        },
        complete: function(data,status) { //optional, used for debugging purposes
        //alert(status);
        }
        
        });//ajax
    }
    $(document).ready(  function(){
        
        $('#typeOption').change( function(){getPokemon();});
        $('#pokemonOption').change( function(){displayPicture();});
        //this will be triggered when the first button was clicked
        $("#admin").click(function(){
          //this will find the selected website from the dropdown
          var go_to_url = $("#admin").val();
          //this will redirect us in same window
          document.location.href = go_to_url;
        });
        $("#pokedex").click(function(){
          //this will find the selected website from the dropdown
          var go_to_url = $("#pokedex").val();
          //this will redirect us in same window
          document.location.href = go_to_url;
        });
        
    } ); //documentReady
    
</script>

    </head>
    <body>
        <header>
              <h1> Who's that pokemon? </h1>
        </header>
        <form>
            <fieldset>
               <legend>Choose that Pokemon!</legend>
                Type: <select id="typeOption">
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
                Select a Pokemon: <select id ="pokemonOption"></select><br>
                
            </fieldset>
        </form>
        <div id = "picture">
            
        </div>
        <div id = "adminWindow">
             <button type="button" id = "admin" class="btn btn-danger btn-sr" value = "admin.php">Pokemon Professor Login</button>
        </div>
    </body>
</html>