<?php
     include "db.php";
     include "links.php";
     include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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

    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 mb-4">
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>

    <div class="container">
      <table border="2" class="table">
        <tr>
          <th>ID</th>
          <th>Std Name</th>
          <th>Std Class</th>
          <th>Std Roll No</th>
          <th>Action</th>
        </tr>
        <?php
           
            
                 $sql = "SELECT * FROM `students`";
                 $result = $conn->query($sql); if ($result->num_rows > 0 ) {
        while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['sname']; ?></td>
          <td><?php echo $row['sclass']; ?></td>
          <td><?php echo $row['srollno']; ?></td>
          <td>
            <a
              href="edit.php?sid=<?php echo $row['id']; ?>"
              class="btn btn-info btn-sm"
              >Edit</a
            >
            <a
              href="delete.php?sid=<?php echo $row['id']; ?>"
              class="btn btn-danger btn-sm"
              >Delete</a
            >
          </td>
        </tr>
        <?php        }
                    

    
                   }
             
            
?>
      </table>
    </div>
  </body>
</html>
