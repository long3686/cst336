<?php

    include '../../dbConnection.php';
    $dbConn = getDatabaseConnection(); 
    $sql = "SELECT * 
    FROM Pokemon p 
    INNER JOIN type t on p.type1Id = t.typeId 
    WHERE p.type1Id = :typeId OR p.type2Id = :typeId";
    $stmt = $dbConn -> prepare($sql);
    $stmt -> execute(array("typeId"=>$_GET['typeId']));
    $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultSet);
        
?>