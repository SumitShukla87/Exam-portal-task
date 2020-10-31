<?php
    session_start();
    include('admin/config.php');
    include('header.php');
?>

<div id="result">
<?php 

$sql = "SELECT * FROM answer WHERE `session_id`='".$_SESSION['session_id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {?>
        
       <table>
       <tr>
            <td><?php echo $row['q_name']; ?></td>
            <td><?php echo $row['ans1']; ?></td>
            <td><?php echo $row['ans2']; ?></td>
            <td><?php echo $row['ans2']; ?></td>
            <td><?php echo $row['ans3']; ?></td>
            <td><?php echo $row['ans4']; ?></td>
            <td><?php echo $row['true_ans']; ?></td>
            <td><?php echo $row['given_ans']; ?></td>
       </tr>
       
       </table>
        <?php
    }
}
?>





</div>