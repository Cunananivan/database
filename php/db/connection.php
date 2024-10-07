<?php
  //Establish a connection to the database
   $host = "localhost";
   $user = "root";
   $pass = "";
   $dbname = "ivan_db";

   // COMBINE ALL VARIABLE TO CONNECT DATABASE
   $conn = new mysqli($host, $user, $pass, $dbname);

   //CHECK IF CONNECTION IS FAILED
   if($conn->connect_error)
   {
     die("connection failed: ". $conn->connection_error);
   }
?>