<?php 

    include('config.php');
    $id = $_REQUEST['id'];
    echo $id;

    $sql = "DELETE FROM question where`que_id`='".$id."'";

if ($conn->query($sql) == true) {

        header("location:viewquestion.php");
      
} else {
        echo $conn->error;
}

?>