<?php

    include '../../../dbConnection.php';
    $dbConn = getDatabaseConnection("pokemon");    
    $sql = "SELECT * 
    FROM pokemon p 
    INNER JOIN type t on p.type1Id = t.typeId 
    WHERE p.type1Id = :typeId OR p.type2Id = :typeId";
    $stmt = $dbConn -> prepare($sql);
    $stmt -> execute(array("typeId"=>$_GET['typeId']));
    $resultSet = $stmt->fetchAll();
    echo json_encode($resultSet);
        
?>