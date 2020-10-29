<?php
    include('header.php');
    session_start();
    include('config.php');
?>
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
<?php include ('footer.php') ?>