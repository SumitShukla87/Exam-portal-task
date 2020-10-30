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

        echo "<table class='view-table-css'>";
        echo"<tr> <th class='view-table-css-td'><a href='addtopic.php' class='anchor-css'>Add Topic</a></th>
        <th colspan='3' class='view-table-css-td'>View Topics</th></tr>";
        echo"<tr>
        <th class='view-table-css-td'>ID</th>
        <th class='view-table-css-td'>Name</th>
        <th class='view-table-css-td'>Update</th>
        <th class='view-table-css-td'>Delete</th></tr>";
        $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id= $row['topic_id'];
            echo "<tr>";
            echo"<td class='view-table-css-td'>".$row['topic_id']."</td>";
           
            echo"<td class='view-table-css-td'>".$row['name']."</td>";
           
            echo'<td class="view-table-css-td"><a href="edittopic.php?id='.$row['topic_id'].'" class="anchor-css">Update</a></td>';
            echo'<td class="view-table-css-td"><a href="deletetopic.php?id='.$row['topic_id'].'" class="anchor-css">Delete</a></td>';
            echo"</tr>";
            
        } 
    } 
    echo"</table>";
    ?>
</div>    
<?php include ('footer.php') ?>