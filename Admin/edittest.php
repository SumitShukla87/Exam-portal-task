<?php
// Including the config File
include('config.php');
include('header.php');
$errors = array();
$id = $_REQUEST['id'];

?>
     <div id="update">       
        <form action="updatetest.php"  method="POST">
        <?php 

               
                    $id = $_REQUEST['id'];

                    $sql = "SELECT * FROM test WHERE `test_id`='".$id."'";
                    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while ($row = $result->fetch_assoc()) {

                        echo'<input type="hidden"   name="id" value="'.$row['test_id'].'" />';

                        echo"<table>";
                            echo"<tr>";
                                echo"<td><label for='Subject'>Test Name:</label></td>";
                                echo'<td><input type="text"  name="testname" value="'.$row['test_name'].'" required /></td>'; 
            
                            echo"</tr>";
                            echo"<tr>";
                            echo"<td><label for='Question'>Total Question:</label></td>";
                            echo'<td><input type="text"  name="ques" value="'.$row['total_que'].'" required /></td>'; 
        
                        echo"</tr>";
                                            
                            echo'<tr>
                                <td colspan="2"><input type="submit" name="submit" value="Update Test"></td>
                            </tr>
                        </table>';


            }  
        }            
        ?>        
        </form>
    </div>
<?php include('footer.php'); ?>