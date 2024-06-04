<?php
        include "db.php";
        include "links.php";
        $sid = $_GET['sid'];
        $sql = "DELETE FROM `students` WHERE `id`=$sid ";
        $result = $conn->query($sql);
     if ($result===TRUE) {
           $message = "<div class='alert alert-danger text-center'>Deleted Successfully!</div>";
           echo $message;
     }
?>
