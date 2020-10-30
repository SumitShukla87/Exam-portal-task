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
 
   <?php $sql = "SELECT * from test";

        echo "<table class='view-table-css'>";
        echo"<tr> <th class='view-table-css-td'><a href='addtest.php' class='anchor-css'>Add Exam</a></th>
        <th colspan='4' class='view-table-css-td'>View Exams</th></tr>";
        echo"<tr>
        <th class='view-table-css-td'>ID</th>
        <th class='view-table-css-td'>Name</th>
        <th class='view-table-css-td'>Total Question</th>
        <th class='view-table-css-td'>Update</th>
        <th class='view-table-css-td'>Delete</th></tr>";
        $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id= $row['test_id'];
            echo "<tr>";
            echo"<td class='view-table-css-td'>".$row['test_id']."</td>";
           
            echo"<td class='view-table-css-td'>".$row['test_name']."</td>";
            echo"<td class='view-table-css-td'>".$row['total_que']."</td>";
           
            echo'<td class="view-table-css-td"><a href="edittest.php?id='.$row['test_id'].'" class="anchor-css">Update</a></td>';
            echo'<td class="view-table-css-td"><a href="deletetest.php?id='.$row['test_id'].'" class="anchor-css">Delete</a></td>';
            echo"</tr>";
            
        } 
    } 
    echo"</table>";
    ?>
</div>  
 <?php include('footer.php') ?>   