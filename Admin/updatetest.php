<?php
// Including the config File
include('config.php');
if (isset($_POST['submit'])) {

    $id = isset($_POST['id'])?$_POST['id']:'';
  
    $testname = isset($_POST['testname'])?$_POST['testname']:'';
    $totalque = isset($_POST['ques'])?$_POST['ques']:'';
  

    echo $id , $totalque , $testname;
    
    

        // Update the data into the Table        
         $sql = "UPDATE  test SET `test_name`='".$testname."', `total_que`='".$totalque."' where `test_id`='".$id."'";


    

    if ($conn->query($sql) === true) {

                    header("location:viewtest.php");
                    
    } else {
             echo $conn->error;
    }

           
        
        
      
  
   
   
}
    
?>