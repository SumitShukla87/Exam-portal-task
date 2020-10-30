<?php 
    session_start();
    if ($_SESSION['user']== "") {
        header("location:index.php");
    }

?>
<?php include('header.php');
    include('admin/config.php');

?>

    <div id="dashboard">    
        <h3>Welcome  <?php echo $_SESSION['user']?> to User Dash Board</h3>
        <?php 
            echo"<h1>Select Topic to give Exam</h1>";


            $sql = "SELECT * from topic";

        echo "<table>";
        $result =$conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                    $id= $row['topic_id'];
                    echo'<tr><td><a href="showtest.php?id='.$row['topic_id'].'">'.$row['name'].'</a>';
            
            
            } 
        } 
        echo"</table>";

        ?>
    </div>    
<?php include ('footer.php'); ?>