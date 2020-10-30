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

        echo "<table class='view-table-css'>";
        echo"<tr> <th class='view-table-css-td'><a href='addquestion.php' class='anchor-css'>Add Question</a></th>
        <th class='view-table-css-td' colspan='3'>View Question</th></tr>";
        echo"<tr>
        <th class='view-table-css-td'>ID</th>
        <th class='view-table-css-td'>Question</th>
        <th class='view-table-css-td'>Update</th>
        <th class='view-table-css-td'>Delete</th></tr>";
        $result =$conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id= $row['que_id'];
            echo "<tr>";
            echo"<td class='view-table-css-td'>".$row['que_id']."</td>";
           
            echo"<td class='view-table-css-td'>".$row['que_name']."</td>";
           
            echo'<td class="view-table-css-td"><a href="editquestion.php?id='.$row['que_id'].'" class="anchor-css">Update</a></td>';
            echo'<td class="view-table-css-td"><a href="deletequestion.php?id='.$row['que_id'].'" class="anchor-css">Delete</a></td>';
            echo"</tr>";
            
        } 
    } 
    echo"</table>";
    ?>
</div>    
<?php include('footer.php'); ?>