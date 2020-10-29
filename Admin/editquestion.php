<?php 

session_start();
if ($_SESSION['admin']== "") {
    header("location:index.php");
}
?>
<?php
// Including the config File
include('config.php');
include('header.php');
$id = $_REQUEST['id'];

?>

    <div id="edit">       
        <form action="updatequestion.php"  method="POST">
        <?php 

    
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM question WHERE `que_id`='".$id."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while ($row = $result->fetch_assoc()) {

                        echo'<input type="hidden"   name="id" value="'.$row['que_id'].'" />';

                        echo"<table>";
                            echo"<tr>";
                                echo"<td><label for='Question'>Question Name:</label></td>";
                                echo'<td><textarea name="qname" value="'.$row['que_name'].'"  rows="3" cols="40">"'.$row['que_name'].'"</textarea></td>
                                </td>'; 
            
                            echo"</tr>";
                            echo"<tr>";
                            echo"<td><label for='ans1'>Answer1:</label></td>";
                            echo'<td><input type="text"  name="ans1" value="'.$row['ans1'].'" required /></td>'; 
                            echo"</tr>";

                            echo"<tr>";
                            echo"<td><label for='ans2'>Answer 2:</label></td>";
                            echo'<td><input type="text"  name="ans2" value="'.$row['ans2'].'"  required/></td>'; 
                            echo"</tr>";

                            echo"<tr>";
                            echo"<td><label for='ans3'>Answer 3:</label></td>";
                            echo'<td><input type="text"  name="ans3" value="'.$row['ans3'].'" required /></td>'; 
                            echo"</tr>";

                            echo"<tr>";
                            echo"<td><label for='ans4'>Answer 4:</label></td>";
                            echo'<td><input type="text"  name="ans4" value="'.$row['ans4'].'"  required /></td>'; 
                            echo"</tr>";

                            echo"<tr>";
                            echo"<td><label for='trueans'>True Answer:</label></td>";
                            echo'<td><input type="text"  name="tans" value="'.$row['true_ans'].'" required/></td>'; 
                            echo"</tr>";
                                            
                            echo'<tr>
                                <td colspan="2"><input type="submit" name="submit" value="Update Question"></td>
                            </tr>
                        </table>';


            }  
        }            
        ?>        
        </form>
    </div>
<?php include ('footer.php');?>