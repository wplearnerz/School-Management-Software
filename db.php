<?php
      $severname = "localhost";
      $username = "root";
      $password = "";
      $dbname = "registration";
      $conn = new mysqli($severname, $username, $password, $dbname);
    if ($conn->connect_errno) {
        die("Database connection error :".$conn->connect_errno);
    }

   