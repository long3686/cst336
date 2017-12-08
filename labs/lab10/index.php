<?php

    function createThumbnail()
    {
    $sourcefile = imagecreatefromstring(file_get_contents($_FILES["myFile"]["name"]));
    $newx = 150; $newy = 150;  //new size
    if (imagesx($sourcefile) > imagesy($sourcefile))
    {   // landscape orientation
        $newy = round($newx/imagesx($sourcefile) * imagesy($sourcefile));
     }
     else 
     {   // portrait orientation 
        $newx = round($newy/imagesy($sourcefile) * imagesx($sourcefile));
     }

    $thumb = imagecreatetruecolor($newx,$newy);
    imagecopyresampled($thumb, $sourcefile, 0,0, 0,0, $newx, $newy,     
     imagesx($sourcefile), imagesy($sourcefile)); 
    imagejpeg($thumb,"thumb.jpg"); //creates jpg image file called "thumb.jpg"
    echo "<img src='thumb.jpg'/>";
    }
    
    
    function filterUploadedFile() 
    {
      $allowedTypes = array("text/plain","image/png");
      $allowedExtensions = array("txt", "png","jpg","gif");
      $allowedSize = 1000;
      $filterError = "";
      if (!in_array($_FILES["myFile"]["type"],  $allowedTypes ) ) 
      {
            $filterError = "Invalid type. <br>";
      }
    
      $fileName = $_FILES["myFile"]["name"];
       if (!in_array(substr($fileName,strrpos($fileName,".")+1), $allowedExtensions) ) 
       {
           $filterError = "Invalid extension. <br>"; 
    }
       
       if ($_FILES["myFile"]["size"]  > $allowedSize  ) 
       {
            $filterError = "File size too big. <br>";
        }
        return $filterError;
    }

  
    $filterError = filterUploadedFile();
    if (empty($filterError)) {
    if ($_FILES["myFile"]["error"] > 0) 
    {
      echo "Error: " . $_FILES["myFile"]["error"] . "<br>";
    }
    else 
    {
      echo "Upload: " . $_FILES["myFile"]["name"] . "<br>";
      echo "Type: " . $_FILES["myFile"]["type"] . "<br>";
      echo "Size: " . ($_FILES["myFile"]["size"] / 1024) . " KB<br>";
      echo "Stored in: " . $_FILES["myFile"]["tmp_name"];
    }  
}//end empty($filterError)


?>



<!DOCTYPE html>
<html>
    <head>
        <title> Lab 10: Photo Gallery </title>
    </head>
    <body>

    <h2> Photo Gallery </h2>
    <form method="POST" enctype="multipart/form-data"> 


        <input type="file" name="myFile" /> 
        
        <input type="submit" value="Upload File!" />

    </form>
    <?php
  
      move_uploaded_file($_FILES["myFile"]["tmp_name"], "gallery/" . $_FILES["myFile"]["name"] );
      
      $files = scandir("gallery/", 1);
       //print_r($files);
      
      for ($i = 0; $i < count($files) - 2; $i++) 
      {
         
         //createThumbnail();
         echo "<img src='gallery/" .   $files[$i] . "' width='50' >";
          
      }
      
      
    
    ?>

    </body>
</html>