<?php
// Including the config File
include('config.php');
// including the header file
include ('header.php');
$errors = array();


if (isset($_POST['submit'])) {


    $testname = isset($_POST['test'])?$_POST['test']:'';
    $question = isset($_POST['quename'])?$_POST['quename']:'';
    $ans1 = isset($_POST['ans1'])?$_POST['ans1']:'';
    $ans2 = isset($_POST['ans2'])?$_POST['ans2']:'';
    $ans3 = isset($_POST['ans3'])?$_POST['ans3']:'';
    $ans4 = isset($_POST['ans4'])?$_POST['ans4']:'';
    $trueans = isset($_POST['trueans'])?$_POST['trueans']:'';

 
    
     // Insert the data into the Table        
    $sql = "INSERT INTO question (`test_id`,`que_name`,`ans1`,`ans2`,`ans3`,`ans4`,`true_ans`) VALUES ('".$testname."','".$question."','".$ans1."','".$ans2."','".$ans3."','".$ans4."','".$trueans."')";

    if ($conn->query($sql) === true) {

        $errors[] = array('input'=>'form','msg'=>'Record Inserted Successfully');
                    
    } else {
        $errors[] = array('input'=>'form','msg'=>'Record Not Inserted !!!');
        echo $conn->error;
        
                
    }
       

}

?>
   
    <div id="error">

        <?php if(sizeof($errors) > 0) : ?>
            <?php foreach($errors as $error):?>
                <?php echo'<script>alert("'.$error['msg'].'")</script>'?> 
            <?php endforeach?> 
        <?php endif; ?>
        
    </div>

    <div id="mainform">

        <form action="" name="queform" method="POST" onSubmit="return checkall();">
            <table>
                <tr>
                    <td><label for="Test">Choose Test:</label></td>
                    <td>
                    <?php 
                            
                            $sql = "SELECT * from test";
                            $result =$conn->query($sql);
                            $row_count = $result->num_rows;
                    ?>
                            <select name="test">
                    <?php
                    for ($i=1;$i<=$row_count;$i++) {

                            $row = $result->fetch_assoc();
                        ?>
                        <option value="<?php echo $row["test_id"] ?>"><?php echo $row["test_name"] ?></option>
                            <?php	   
                    }
                    ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="Subject">Enter Question:</label></td>
                    <td><textarea name="quename" placeholder="Enter Question Here"  rows="3" cols="40"></textarea></td>
                </tr>
                <tr>
                    <td><label for="Subject">Enter Answer1:</label></td>
                    <td><input type="text" name="ans1" placeholder="Enter Answer1 here"></td>
                </tr>
                <tr>
                    <td><label for="Subject">Enter Answer2:</label></td>
                    <td><input type="text" name="ans2" placeholder="Enter Answer2 here" ></td>
                </tr>
                <tr>
                    <td><label for="Subject">Enter Answer3:</label></td>
                    <td><input type="text" name="ans3" placeholder="Enter Answer3 here" ></td>
                </tr>
                <tr>
                    <td><label for="Subject">Enter Answer4:</label></td>
                    <td><input type="text" name="ans4" placeholder="Enter Answer4 here" ></td>
                </tr>
                <tr>
                    <td><label for="Subject">Enter True Answer:</label></td>
                    <td><input type="text" name="trueans" placeholder="Enter True Answer here" ></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Add Question"></td>
                    <td><a href="viewquestion.php">View Question</a></td>
                </tr>
            </table>   
         
        </form>
    </div>                
 <?php include('footer.php') ?>   