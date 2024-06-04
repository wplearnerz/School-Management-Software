<?php
include "links.php";
require_once "db.php";
include "navbar.php";

// $sql = "DROP DATABASE IF EXISTS registration";
// $result = $conn->query($sql);


    $table  ="CREATE TABLE IF NOT EXISTS students (
        id INT PRIMARY KEY AUTO_INCREMENT,
        sname VARCHAR(25) NOT NULL,
        sclass VARCHAR(25) NOT NULL,
        srollno INT(6) NOT NULL
      )";
$conn->query($table);


// insert data
if (isset($_POST['btn'])) {
  $sname = $_POST['std_name'];
  $sclass = $_POST['std_class'];
  $srollno = $_POST['std_rollno'];
  $sql = "INSERT INTO `students` (`sname`,`sclass`,`srollno`) 
            VALUES('$sname','$sclass','$srollno') ";
  if ($conn->query($sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Data</title>
</head>

<body>
  
  <div class="container">


    <div class="row">
      <div class="col-md">
        <img src="images/school.jpg" alt="school building" class="img-fluid" style="width: 1200px;
        height: 220px; border-radius: 8px; opacity: 0.5; object-fit:fill;">
      </div>
    </div>
  </div>


  <div class="container mx-auto">
    <div class="row justify-content-center mx-auto">
      <div class="col-md">

        <form method="POST" action="">

          <div class="form-group">
            <label for="studentName" class="col-sm-2 col-form-label font-weight-bold">Student Name</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" id="studentName" name="std_name" placeholder="Enter Student Name">
            </div>
          </div>
          <div class="form-group">
            <label for="studentClass" class="col-sm-2 col-form-label font-weight-bold">Student Class</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="std_class" id="studentClass" placeholder="Enter Student Class">
            </div>
          </div>
          <div class="form-group">
            <label for="studentRollNo" class="col-sm-2 col-form-label font-weight-bold">Student Roll No</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" name="std_rollno" id="studentRollNo" placeholder="Enter Student Roll No">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10">
              <button type="submit" name="btn" class="btn-primary btn-block">Submit</button>
            </div>

          </div>
        </form>
      </div>
    </div>
  </div>







</body>

</html>