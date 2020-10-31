<?php
    session_start();
    if ($_SESSION['user']== "") {
        header("location:index.php");
    }
    include('admin/config.php');
    include('header.php');
     
?>

<div id="result">
        <table class="view-table-css">
                <tr>
                <th class="view-table-css-td" colspan="7">Result</th>
                </tr>            
            <tr>
                    <th class="view-table-css-td">Question</th>
                    <th class="view-table-css-td">Option1</th>
                    <th class="view-table-css-td">Option2</th>
                    <th class="view-table-css-td">Option3</th>
                    <th class="view-table-css-td">Option4</th>
                    <th class="view-table-css-td">Correct Answer</th>
                    <th class="view-table-css-td">Your Answer</th>
            </tr>
                <?php 
                $session_id = $_SESSION['session_id'];

                $sql = "SELECT * FROM answer WHERE `session_id`='".$_SESSION['session_id']."'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    
                    while ($row = $result->fetch_assoc()) {?>
                        
  
                                <tr>
                                        <td class="view-table-css-td"><?php echo $row['q_name']; ?></td>
                                        <td class="view-table-css-td"><?php echo $row['ans1']; ?></td>
                                        <td class="view-table-css-td"><?php echo $row['ans2']; ?></td>
                                        <td class="view-table-css-td"><?php echo $row['ans3']; ?></td>
                                        <td class="view-table-css-td"><?php echo $row['ans4']; ?></td>
                                        <td class="view-table-css-td"><?php echo $row['true_ans']; ?></td>
                                        <td class="view-table-css-td"><?php echo $row['given_ans']; ?></td>
                                </tr>
                        
                        <?php
                    }
                }
                ?>
        </table>
       

        <?php 
         $sql2 = "SELECT * FROM answer WHERE `session_id`='".$_SESSION['session_id']."'";
         $result2 = $conn->query($sql2);
         $total_question = $result2->num_rows;
     
        ?>
        <?php 
         $sql3 = "SELECT * FROM answer WHERE `session_id`='".$_SESSION['session_id']."' and `given_ans`!=0";
         $result3 = $conn->query($sql3);
         $user_attempt = $result3->num_rows;
  
        ?>
        <?php 
        $sql4 = "SELECT * FROM answer WHERE `session_id`='".$_SESSION['session_id']."' and `given_ans`=`true_ans`";
        $result4 = $conn->query($sql4);
        $right_attempt = $result4->num_rows;

        ?>
        <?php $pass = 33;
        ?>

        <form action="resultinsert.php" method="POST">
                <input type="hidden" name="username" value="<?php echo $_SESSION['user'] ?>" >

                <table class="show-table-css">
                        <tr>
                                <td>Total No Of Question:</td>
                                <td><?php echo $total_question;?></td>
                                <input type="hidden" name="tque" value="<?php echo $total_question;?>">
                        </tr>
                        <tr>
                                <td>Attempted By You:</td>
                                <td><?php echo $user_attempt;?></td>
                                <input type="hidden" name="user_attempt" value="<?php echo $user_attempt;?>">
                        </tr>
                        <tr>
                                <td>Correct Answer:</td>
                                <td><?php echo $right_attempt;?></td>
                                <input type="hidden" name="right" value="<?php echo $right_attempt;?>">
                        </tr>
                        <tr>
                                <td colspan="2"><?php
                                if ($pass<ceil(($right_attempt*100)/($total_question))) {
                                        echo "Pass";
                                } else {
                                        echo "Fail";
                                } ?></td>
                                
                        </tr>
                        <tr><td colpsan="2"><input type="submit" name="finalsubmit" value="Final Submission"></td></tr>

                </table>

                <h2 class="showtopic">Please Final submit Before Logout</h1>
                <a href="logout.php" class="anchor-css">Log Out</a>
        </form>



<?php include('footer.php') ?>
</div>