<?php

    include '../../../dbConnection.php';
    $dbConn = getDatabaseConnection();    
    $sql = "SELECT pokemonName 
    FROM pokemon  
    WHERE pokemonId = :id";
    $stmt = $dbConn -> prepare($sql);
    $stmt -> execute(array("id"=>$_GET['id']));
    $resultSet = $stmt->fetch();
    echo json_encode($resultSet);
        
?>