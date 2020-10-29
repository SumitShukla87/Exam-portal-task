<?php 

    include('config.php');
    $id = $_REQUEST['id'];
    echo $id;

    $sql = "DELETE FROM test where`test_id`='".$id."'";

if ($conn->query($sql) == true) {

        header("location:viewtest.php");
      
} else {
        echo $conn->error;
}

?>