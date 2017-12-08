<?php
session_start();

if(isset ($_POST['username']))
{
    echo ($_POST['username']);
    echo ($_POST['password']);
}
else
{
    echo "my code is dumb";
}
if (isset($_POST['loginForm'])) {  //login form has been submitted
    include '../dbConnection.php';
    echo "no wait it is here";
    $dbConn = getDatabaseConnection();    
    echo "here perhaps?";
     $sql = "SELECT * FROM admin " .
            " WHERE username = :username " .
             "AND password = :password  ";
    $stmt = $dbConn->prepare($sql);
    echo "error here";
    $stmt->execute( array (":username" => $_POST['username'],
		        ":password" => hash("sha1",$_POST['password'])));
	echo "got here";
    $record = $stmt->fetch();

  if (!empty($record)) { //if record with username and password was found
        $_SESSION['username'] = $record['username'];
        echo "yo i got here but still don't work?";
        $_SESSION['adminName'] = $record['lastName'];
        header("Location: adminPage.php");
    } else {
        echo "<script>
        alert('Incorrect Username or Password')
        </script>"; 
    }
}//endIf loginForm was submitted
?>