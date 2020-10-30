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

   <?php $sql = "SELECT * from user";

        echo "<table class='view-table-css'>";
        echo"<tr><th colspan='4' class='view-table-css-td'>View User</th></tr>";
        echo"<tr>
        <th class='view-table-css-td'>ID</th>
        <th class='view-table-css-td'>Name</th>
        <th class='view-table-css-td'>Email</th>
        <th class='view-table-css-td'>Delete</th></tr>";
        $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
 
            echo "<tr>";
            echo"<td class='view-table-css-td'>".$row['user_id']."</td>";
           
            echo"<td class='view-table-css-td'>".$row['name']."</td>";
            echo"<td class='view-table-css-td'>".$row['email']."</td>";
           
            echo'<td class="view-table-css-td"><a href="deleteuser.php?id='.$row['user_id'].'" class="anchor-css">Delete</a></td>';
            echo"</tr>";
            
        } 
    } 
    echo"</table>";
    ?>

</div>    
 <?php include('footer.php') ?>   