<?php
 
$dsn= "mysql:host=localhost;dbname=login";
 
try{
 // create a PDO connection with the configuration data
 $conn = new PDO($dsn, "root", "");
 
 // display a message if connected to database successfully
 if($conn){
 echo "Connected to the <strong>LOGIN</strong> database successfully!";
        }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}



