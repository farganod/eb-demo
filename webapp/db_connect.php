<?php
    function OpenCon()
     {
     $dbhost = "eb-demo.cluster-cnh8fxw8a09f.us-east-1.rds.amazonaws.com";
     $dbuser = "admin";
     $dbpass = "This4now";
     $db = "ebdb";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
       
?>