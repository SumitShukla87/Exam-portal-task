<?php 

session_start();
if ($_SESSION['admin']== "") {
    header("location:index.php");
}
?>

<?php
    include('header.php');
    include('config.php');
?>
<div class="main"> 
 <?php include('nav.php'); ?>

   <?php $sql = "SELECT * from topic";

        echo "<table>";
        echo"<tr> <th><a href='addtopic.php'>Add Topic</a></th></tr>";
        echo"<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Update</th>
        <th>Delete</th></tr>";
        $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id= $row['topic_id'];
            echo "<tr>";
            echo"<td>".$row['topic_id']."</td>";
           
            echo"<td>".$row['name']."</td>";
           
            echo'<td><a href="edittopic.php?id='.$row['topic_id'].'">Update</a></td>';
            echo'<td><a href="deletetopic.php?id='.$row['topic_id'].'">Delete</a></td>';
            echo"</tr>";
            
        } 
    } 
    echo"</table>";
    ?>
</div>    
<?php include ('footer.php') ?>