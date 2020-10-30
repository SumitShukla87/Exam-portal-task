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
<div id="user">
   <?php $sql = "SELECT * from user";

        echo "<table>";
        echo"<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th></tr>";
        $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
 
            echo "<tr>";
            echo"<td>".$row['user_id']."</td>";
           
            echo"<td>".$row['name']."</td>";
            echo"<td>".$row['email']."</td>";
           
            echo'<td><a href="deleteuser.php?id='.$row['user_id'].'">Delete</a></td>';
            echo"</tr>";
            
        } 
    } 
    echo"</table>";
    ?>

</div>    
 <?php include('footer.php') ?>   