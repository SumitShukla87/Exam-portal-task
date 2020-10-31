<?php 
    session_start();
if ($_SESSION['user']== "") {
    header("location:index.php");
}

?>
<?php include('header.php');
    include('admin/config.php');

?>

    <?php 
    
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM test WHERE `topic_id`='".$id."'";
        $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while ($row = $result->fetch_assoc()) {

            echo"<table class='show-table-css'>";
            
                echo'<tr><td><a href="exam.php?id='.$row['test_id'].'" class="anchor-css">'.$row['test_name'].'</a>';
                
            echo"</table>";
        }
    } else {

        echo"<h2 class='failed'>No exam For This Topic</h2>";
    }  





    ?>
   
<?php include ('footer.php');?>