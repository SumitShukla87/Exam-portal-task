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
 <?php include('nav.php'); ?>
   <?php $sql = "SELECT * from test";

        echo "<table>";
        echo"<tr> <th><a href='addtest.php'>Add Test</a></th></tr>";
        echo"<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Total Question</th>
        <th>Update</th>
        <th>Delete</th></tr>";
        $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id= $row['test_id'];
            echo "<tr>";
            echo"<td>".$row['test_id']."</td>";
           
            echo"<td>".$row['test_name']."</td>";
            echo"<td>".$row['total_que']."</td>";
           
            echo'<td><a href="edittest.php?id='.$row['test_id'].'">Update</a></td>';
            echo'<td><a href="deletetest.php?id='.$row['test_id'].'">Delete</a></td>';
            echo"</tr>";
            
        } 
    } 
    echo"</table>";
    ?>
 <?php include('footer.php') ?>   