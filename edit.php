<?php
       include "links.php";
       include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
<?php include "buttons.php"; ?>
            <h1 class="text-center">Edit Record</h1>
        </div>
    </div>
  <?php 
         $sid = $_GET['sid'];
         //echo $sid; 
         $sql = "SELECT * FROM `students` WHERE `id` = '$sid' ";
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) { ?>
          <div class="container">
          <div class="row justify-content-center">
            <div class="col-md">
          
 <form method="POST" action="">
   
   <div class="form-group">
     <label for="studentName" class="col-sm-2 col-form-label">Student Name</label>
     <div class="col-sm-10">
       <input type="text" required value="<?php echo $row['sname']; ?>" class="form-control" id="studentName" name="std_name" placeholder="Enter Student Name">
     </div>
   </div>
   <div class="form-group">
     <label for="studentClass" class="col-sm-2 col-form-label">Student Class</label>
     <div class="col-sm-10">
       <input type="text" value="<?php echo $row['sclass']; ?>" class="form-control"required name="std_class" id="studentClass" placeholder="Enter Student Class">
     </div>
   </div>
   <div class="form-group">
     <label for="studentRollNo" class="col-sm-2 col-form-label">Student Roll No</label>
     <div class="col-sm-10">
       <input type="text" value="<?php echo $row['srollno']; ?>" required class="form-control" name="std_rollno" id="studentRollNo" placeholder="Enter Student Roll No">
     </div>
   </div>
   <div class="form-group">
     <div class="col-sm-10">
       <button type="submit"  name="update_btn" class="btn btn-primary btn-block">Update Record</button>
     </div>
         
   </div>
 </form>
         </div>
         </div>
     </div>
     <?php } ?>
<?php
           if (isset($_POST['update_btn'])) {
              $sname = $_POST['std_name'];
              $sclass = $_POST['std_class'];
              $srollno = $_POST['std_rollno'];
             $sql = "UPDATE `students` SET 
             `sname`='$sname',`sclass`='$sclass',`srollno`='$srollno' WHERE `id` = $sid ";
            $result = $conn->query($sql);
            if ($result===TRUE) {
                echo "Updated successfully";
            }else{
              echo "Error updating the record";
            }

           }
        
?>
       
  
    
</body>
</html>