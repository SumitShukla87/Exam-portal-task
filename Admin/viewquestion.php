<?php 

session_start();
if ($_SESSION['admin']== "") {
    header("location:index.php");
}
?>
<?php


    include('config.php');
    include('header.php');
?>
<div class="main">
 <?php include('nav.php'); ?>
   <?php $sql = "SELECT * from question";

        echo "<table>";
        echo"<tr> <th><a href='addquestion.php'>Add Question</a></th></tr>";
        echo"<tr>
        <th>ID</th>
        <th>Question</th>
        <th>Update</th>
        <th>Delete</th></tr>";
        $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id= $row['que_id'];
            echo "<tr>";
            echo"<td>".$row['que_id']."</td>";
           
            echo"<td>".$row['que_name']."</td>";
           
            echo'<td><a href="editquestion.php?id='.$row['que_id'].'">Update</a></td>';
            echo'<td><a href="deletequestion.php?id='.$row['que_id'].'">Delete</a></td>';
            echo"</tr>";
            
        } 
    } 
    echo"</table>";
    ?>
</div>    
<?php include('footer.php'); ?>