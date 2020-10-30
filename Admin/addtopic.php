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
$errors = array();

if (isset($_POST['submit'])) {
    $topicname = isset($_POST['topic'])?$_POST['topic']:'';
    
    // Validation to stop duplicacy of Subject
            $sql = "SELECT `name` from topic";
           $result =$conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        if ($row["name"]== $topicname) {
            $errors[] = array('input'=>'form','msg'=>'Topic already exists');
                  
        } 
    }    
       
     
  
    if (sizeof($errors)==0) {
                    // Insert the data into the Table        
            $sql = "INSERT INTO topic (`name`) VALUES ('".$topicname."')";

        if ($conn->query($sql) === true) {

            echo"<script>alert('Record Inserted Successfully!!!')</script>";
                        
        } else {
            echo"<script>alert('Record Not Inserted!!!')</script>";
            
                    
        }
    }    

           
        
   
      
   
  
    $conn->close();

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
    
        <form action="" name="topicpage" method="POST" onSubmit="return checkvalidation();">
            <table>
                <tr>
                    <td><label for="Subject">Enter Topic:</label></td>
                    <td><input type="text" name="topic" placeholder="Enter Topic Name"></td>
                </tr>
                
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Add Topic"></td>
                </tr>
            </table>    
        </form>
    </div>  
<?php include('footer.php'); ?>      

        
 