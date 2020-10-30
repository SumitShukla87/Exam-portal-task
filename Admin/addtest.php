<?php 

session_start();
if ($_SESSION['admin']== "") {
    header("location:index.php");
}
?>
<?php
// Including the config File
include('config.php');
// Including the header File
include ('header.php');
$errors = array();

if (isset($_POST['submit'])) {


    $topic = isset($_POST['topic'])?$_POST['topic']:'';
    $testname = isset($_POST['test'])?$_POST['test']:'';
    $question = isset($_POST['question'])?$_POST['question']:'';
   
                    // Insert the data into the Table        
    $sql = "INSERT INTO test (`topic_id`,`test_name`,`total_que`) VALUES ('".$topic."','".$testname."','".$question."')";

    if ($conn->query($sql) === true) {

        $errors[] = array('input'=>'form','msg'=>'Record Inserted Successfully');
                    
    } else {
        $errors[] = array('input'=>'form','msg'=>'Record Not Inserted !!!');
        echo $conn->error;
        
                
    }
       

}

?>
<div class="main">
    <?php include('nav.php'); ?>
        <div id="error">
            <?php if(sizeof($errors) > 0) : ?>
                <?php foreach($errors as $error):?>
                    <?php echo'<script>alert("'.$error['msg'].'")</script>'?> 
                <?php endforeach?> 
            <?php endif; ?>
            
        </div>
    
    
        <form action="" name="testform" method="POST" onSubmit="return check();">
            <table>
                <tr>
                    <td><label for="Subject">Choose Topic:</label></td>
                    <td>
                    <?php 
                            
                            $sql = "SELECT * from topic";
                            $result =$conn->query($sql);
                            $row_count = $result->num_rows;
                    ?>
                            <select name="topic">
                    <?php
                    for ($i=1;$i<=$row_count;$i++) {

                            $row = $result->fetch_assoc();
                        ?>
                        <option value="<?php echo $row["topic_id"] ?>"><?php echo $row["name"] ?></option>
                            <?php	   
                    }
                    ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="Subject">Enter Test Name:</label></td>
                    <td><input type="text" name="test" placeholder="Enter Test Name" ></td>
                </tr>
                <tr>
                    <td><label for="Subject">Enter Total Question:</label></td>
                    <td><input type="text" name="question" placeholder="Enter Total Question" ></td>
                </tr>
                <tr>
                    <td><input type="submit"  name="submit" value="Add Test"></td>
                    <td><a href="viewtest.php">View all Test</a></td>
                </tr>
            </table>    
        </form>
    </div>                
 <?php include('footer.php'); ?>