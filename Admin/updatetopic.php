<?php 

session_start();
if ($_SESSION['admin']== "") {
    header("location:index.php");
}
?>
<?php
// Including the config File
include('config.php');
if (isset($_POST['submit'])) {

    $id = isset($_POST['id'])?$_POST['id']:'';
  
    $topicname = isset($_POST['topicname'])?$_POST['topicname']:'';
  

    
    
    

        // Update the data into the Table        
         $sql = "UPDATE  topic SET `name`='".$topicname."' where `topic_id`='".$id."'";


    

    if ($conn->query($sql) === true) {

                    header("location:viewtopic.php");
                    
    } else {
             echo $conn->error;
    }

           
        
        
      
  
   
   
}
    
?>