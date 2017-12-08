<?php
session_start();

if (isset($_POST['loginForm'])) {  //login form has been submitted
    include '../dbConnection.php';
    $dbConn = getDatabaseConnection();    
     $sql = "SELECT * FROM admin " .
            " WHERE username = :username " .
             "AND password = :password  ";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute( array (":username" => $_POST['username'],
		        ":password" => hash("sha1",$_POST['password'])));
    $record = $stmt->fetch();

  if (!empty($record)) { //if record with username and password was found
        $_SESSION['username'] = $record['username'];
        $_SESSION['adminName'] = $record['lastName'];
        header("Location: adminPage.php");
    } else {
        echo "<script>
        alert('Incorrect Username or Password')
        </script>"; 
    }
}//endIf loginForm was submitted
?>