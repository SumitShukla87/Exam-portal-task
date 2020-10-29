<?php
// Including the config File
include('config.php');
include('header.php');
$errors = array();
$id = $_REQUEST['id'];

?>

     <div id="update">       
        <form action="updatetopic.php"  method="POST">
        <?php 

               
                    $id = $_REQUEST['id'];

                    $sql = "SELECT * FROM topic WHERE `topic_id`='".$id."'";
                    $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while ($row = $result->fetch_assoc()) {

                        echo'<input type="hidden"   name="id" value="'.$row['topic_id'].'" />';

                        echo"<table>";
                            echo"<tr>";
                                echo"<td><label for='Subject'>Topic:</label></td>";
                                echo'<td><input type="text"  name="topicname" value="'.$row['name'].'" /></td>'; 
            
                            echo"</tr>";
                                            
                            echo'<tr>
                                <td colspan="2"><input type="submit" name="submit" value="Update Topic"></td>
                            </tr>
                        </table>';


            }  
        }            
        ?>        
        </form>
    </div>
 <?php include('footer.php') ?>