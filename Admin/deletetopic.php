<?php 

    include('config.php');
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM topic where`topic_id`='".$id."'";

if ($conn->query($sql) == true) {

        header("location:viewtopic.php");
      
} else {
        echo $conn->error;
}

?>